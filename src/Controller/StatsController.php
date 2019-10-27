<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Network\Exception;
use Cake\Validation\Validator;
use \Exception as MainException;
use Cake\Utility\Text;
use Cake\Cache\Cache;
use Cake\I18n\Time;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class StatsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
    }


    public function globalStats(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    if((isset($data['start_date'])) && (isset($data['end_date']))){
                        try{

                            $start = new \DateTime($data['start_date']);
                            $end = new \DateTime($data['end_date']);
                            if($start<$end){
                                $formatted_start = $start->format('Y-m-d H:i:s');
                                $formatted_end = $end->format('Y-m-d H:i:s');
                                $this->loadModel('Projects');
                                // loading cache
                                $cache_content = Cache::read('content','register_cache_engine');
                                // project counts section
                                $projects_status = [];
                                foreach($cache_content->project_accompaniments->status as $value){
                                    $projects_status[$value]=0;
                                }
                                $projects_status["Clotûrés"]=0;
                                $projects_audit_count=0;
                                // projects stats
                                $projects_count = $this->Projects->find()
                                ->where(function($exp,$q) use($formatted_start,$formatted_end){
                                    return $exp->between('Projects.created',$formatted_start,$formatted_end);
                                })->count();

                                $projects = $this->Projects->find()
                                ->contain(['ProjectAccompaniments'=>function($q){
                                    return $q->order(['ProjectAccompaniments.created'=>'desc']);
                                },'ProjectPlannings'=>function($q){
                                    return $q->order(['ProjectPlannings.created'=>'desc']);
                                },'ProjectDeliverables.UserAccounts.Users','ProjectAccompaniments.UserAccounts.Users','ProjectVulnerabilities'=>function($q){
                                    return $q->order(['ProjectVulnerabilities.created'=>'asc']);
                                },'ProjectVulnerabilities.UserAccounts.Users'])
                                ->where(function($exp,$q) use($formatted_start,$formatted_end){
                                    return $exp->between('Projects.created',$formatted_start,$formatted_end);
                                })->order(['created'=>'desc']);

                                // project carriers stats
                                $project_carriers_stats = [];
                                foreach ($cache_content->projects->carriers as $carrier) {
                                    $carrier_stat = [
                                        'carrier' => $carrier,
                                        'project_followed' => 0,
                                        'risk_before'=> 0,
                                        'risk_actual'=> 0
                                    ];
                                    array_push($project_carriers_stats,$carrier_stat);
                                };

                                // projects vulnerabilities encountered
                                $project_vulnerabilities_glossary = [];
                                foreach ($cache_content->project_deliverables->reports->vulnerabilities as $vuln) {
                                    $temp_vuln = [
                                        "type" => $vuln->type,
                                        "description" => $vuln->description,
                                        "encountered" =>0
                                    ];
                                    array_push($project_vulnerabilities_glossary,$temp_vuln);
                                }
                                $project_vulnerabilities_types_glossary = [];
                                // grouping project_vulnerabilities_glossary
                                foreach ($cache_content->project_deliverables->reports->categories as $type) {
                                    $type = [
                                        "type" => $type->category,
                                        "vulns" => []
                                    ];
                                    array_push($project_vulnerabilities_types_glossary,$type);
                                }

                                // projects table stats
                                $report_stats = $this->reset_project_report_stats();

                                foreach($projects as $project){
                                    // search spoc secbydesign
                                    $context_project_meta = json_decode($project->project_meta);
                                    foreach ($context_project_meta->contributors as $contributor){
                                        if($contributor->role === "SPOC SecByDesign")
                                            $project->spoc = $contributor->fullname;
                                    }
                                        // search vulns
                                        foreach ($project->project_vulnerabilities as $project_vuln){

                                                 $project_vuln_meta = json_decode($project_vuln->vulnerability_content);
                                                // stats encountered vulns
                                                 foreach ($project_vuln_meta as $vuln_meta_key => $vuln_meta_value){
                                                      foreach ($project_vulnerabilities_glossary as $vuln_glossary_key => $vuln_glossary_value){
                                                        if($vuln_meta_value->description === $vuln_glossary_value['description'])
                                                            $project_vulnerabilities_glossary[$vuln_glossary_key]['encountered']++;
                                                    }
                                                }

                                    

                                                if($project_vuln->vulnerability_report_type === "Rapport Audit"){
                                                    $report_stats["report_dates"]["begin_date"] =  $project_vuln->begin_date;
                                                    $report_stats["report_dates"]["end_date"] =  $project_vuln->end_date;
                                                }

                                                if($project_vuln->vulnerability_report_type === "Rapport Vérification"){
                                                   $report_stats["audit_ver_report_count"]++;
                                                   $report_ver = [
                                                        "begin_date" => $project_vuln->begin_date,
                                                        "end_date" => $project_vuln->end_date
                                                   ];
                                                   array_push($report_stats["report_ver_dates"],$report_ver);
                                                }
                                        }

                                    // flush carriers stats
                                    foreach ($project_carriers_stats as $k => $v){
                                        if($context_project_meta->project_carrier === $v['carrier']){
                                             $project_carriers_stats[$k]['project_followed']++;
                                             // risk before
                                             $risk_before_meta = json_decode($project->project_vulnerabilities[0]->vulnerability_content);
                                             foreach($risk_before_meta as $risk){
                                                $project_carriers_stats[$k]['risk_before']++;
                                             }
                                             // risk after
                                             $temp_risk_after = end($project->project_vulnerabilities);
                                             $risk_after_meta = json_decode($temp_risk_after->vulnerability_content);
                                             foreach($risk_after_meta as $risk){
                                                $project_carriers_stats[$k]['risk_actual']++;
                                             }
                                        }
                                    }
                                    

                                    if(count($report_stats["report_ver_dates"])>0){
                                        $being_date_ver = $report_stats["report_ver_dates"][0]["begin_date"];
                                        $temp_end_ver_date = end($report_stats["report_ver_dates"]);
                                        $end_ver_date = $temp_end_ver_date['end_date'];
                                        $report_stats['being_date_ver'] = $being_date_ver;
                                        if($project->project_is_closed){
                                             $report_stats['end_ver_date'] = $end_ver_date;
                                             $nbr_corrections_days = $this->getWorkingDays($report_stats['being_date_ver'],$report_stats['end_ver_date']);
                                             $report_stats["delay_corrections"] = $nbr_corrections_days;
                                        }else{
                                            $report_stats['end_ver_date'] = '';
                                            $report_stats["delay_corrections"] = '';
                                            // calculation delais de correction à ce jour
                                           $now_date = Time::now();
                                            $nbr_corrections_days = $this->getWorkingDays($report_stats["report_dates"]["end_date"],$now_date);
                                            $report_stats['corrections_until_today'] = $nbr_corrections_days;
                                        }

                                        $project->report_stats = $report_stats;
                                    }else{
                                        $project->report_stats = $report_stats;
                                    }

                                    $report_stats = $this->reset_project_report_stats();


                                    if($project->project_is_closed){
                                        $projects_status["Clotûrés"]++;
                                    }else{
                                        $first_accompaniment = $project->project_accompaniments[0];
                                        $decoded_status = json_decode($first_accompaniment->accompaniments_meta);
                                        $status = $decoded_status->status;
                                        if(isset($projects_status[$status]))
                                            $projects_status[$status]++;
                                        if(count($project->project_vulnerabilities)>0){
                                                $projects_audit_count++;
                                            }
                                    }
                                }

                                // grouping project_vulnerabilities_glossary
                                foreach($project_vulnerabilities_types_glossary as $vuln_type_glossary_key=>$vuln_type_glossary_value){
                                     foreach ($project_vulnerabilities_glossary as $vuln_glossary_key => $vuln_glossary_value){
                                                        if($vuln_glossary_value['type'] === $vuln_type_glossary_value['type'])
                                                             array_push($project_vulnerabilities_types_glossary[$vuln_type_glossary_key]['vulns'],$vuln_glossary_value);
                                                    }
                                                }

                                    foreach($project_vulnerabilities_types_glossary as $k=>$v){
                                                    $project_vulnerabilities_types_glossary[$k]['vulns'] = $this->sortArray($project_vulnerabilities_types_glossary[$k]['vulns'],'encountered');
                                    }

                                // stats spocs secByDesign
                                $spocs = [];
                                foreach ($cache_content->projects->spocs as $value) {
                                    $spoc = [
                                        'auditor' => $value,
                                        'project_followed' => 0,
                                        'projects' => [],
                                        'project_carriers'=>[]
                                    ];
                                    foreach($cache_content->projects->carriers as $carrier){
                                        $spoc_carrier = [$carrier=>0];
                                        $spoc['project_carriers'][$carrier] = 0;
                                    }
                                    array_push($spocs,$spoc);
                                };


                                $spoc_projects = $this->Projects->find()->where(function($exp,$q) use($formatted_start,$formatted_end){
                                    return $exp->between('Projects.created',$formatted_start,$formatted_end);
                                })->order(['created'=>'desc']);

                                //spocs stats
                                foreach($spocs as $key => $value){
                                    foreach ($spoc_projects as $project){
                                        $meta = json_decode($project->project_meta);
                                        foreach ($meta->contributors as $contributor){
                                            if($contributor->fullname == $spocs[$key]['auditor']){
                                                $spocs[$key]['project_followed']++;
                                                $s_project = [
                                                    'fullname' => $project->project_name,
                                                    'programme' => $meta->progam,
                                                    'priority' => $meta->project_priority,
                                                    'project_governance_type' =>$meta->project_governance_type,
                                                    'created' =>  $project->created,
                                                    'carrier' => $meta->project_carrier
                                                ];
                                                $spocs[$key]['project_carriers'][$meta->project_carrier]++;
                                                array_push($spocs[$key]['projects'],$s_project);
                                            }
                                        }
                                    }
                                }

                                // flush total risk before-after
                                $project_carriers_stats_total = [
                                    'total_risk_before' => 0,
                                    'total_risk_actual' => 0
                                ];
                                foreach($project_carriers_stats as $carrier){
                                    $project_carriers_stats_total["total_risk_actual"]+=$carrier['risk_actual'];
                                    $project_carriers_stats_total["total_risk_before"]+=$carrier['risk_before'];
                                }

                                $whole_stats = [
                                    "projects" => $projects,
                                    "report_stats" => $report_stats,
                                    "project_counts" => $projects_count,
                                    "project_status" => $projects_status,
                                    "projects_audit_count" => $projects_audit_count,
                                    "spocs" => $spocs,
                                    "project_carriers" => $cache_content->projects->carriers,
                                    "project_carriers_stats" => $project_carriers_stats,
                                    "project_carriers_stats_total" => $project_carriers_stats_total,
                                    'vulns_carto' => $project_vulnerabilities_types_glossary
                                ];

                                $this->RequestHandler->renderAs($this, 'json');
                                $this->set(compact('whole_stats'));
                                $this->set('_serialize',['whole_stats']);

                                }else
                                    throw new Exception\BadRequestException(__('date error 2'));
                        }catch(MainException $e){
                            throw new Exception\BadRequestException(__('error formatting date 1'));
                        }

                    }else
                            throw new Exception\BadRequestException(__('date error 1'));
            }
        }
       
    }


      private function sortArray($data, $field)
      {
        if(!is_array($field)) $field = array($field);
        usort($data, function($a, $b) use($field) {
          $retval = 0;
          foreach($field as $fieldname) {
            if($retval == 0) $retval = strnatcmp($b[$fieldname],$a[$fieldname]);
          }
          return $retval;
        });
        return $data;
      }

    private function getWorkingDays($begin_date,$end_date){
            $begin=strtotime($begin_date);
            $end=strtotime($end_date);

            if($begin>$end){
                return false;
            }else{
                $no_days = 0;
                $weekends = 0;
                while($begin<=$end){
                    $no_days++;
                    $what_day=date("N",$begin);
                    if($what_day>5){
                          $weekends++;
                    }
                    $begin+=86400; 
                }

                $working_days = $no_days - $weekends;
                return $working_days;
            }
    }

    private function reset_project_report_stats(){
                                $item = [
                                    "audit_ver_report_count" => 0,
                                    "report_dates" => [],
                                    "report_ver_dates" => [],
                                    "delay_corrections" => 0
                                ];
                return $item;
    }


}
