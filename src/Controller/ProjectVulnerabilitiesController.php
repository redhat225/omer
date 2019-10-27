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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ProjectVulnerabilitiesController extends AppController
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

    public function add(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
              $data = $this->request->data;
              if( (isset($data['issue'])) && (gettype($data['issue'])==="boolean")){
                      // if($project_vulnerability)
                      $is_bypassing_dates = false;
                      if( (new \DateTime($data['begin_date'])) > (new \DateTime($data['end_date'])) )
                              $is_bypassing_dates = true;

                 if($is_bypassing_dates){
                          throw new Exception\BadRequestException("Error badRequest - bypassing dates");
                  }else{
                    switch ($data['issue']){
                      case true:
                      $this->loadModel('Projects');
                         $project = $this->Projects->get($data['project_id'],['contain'=>['ProjectVulnerabilities']]);
                         if(count($project->project_vulnerabilities)>0)
                            $data['vulnerability_report_type'] = 'Rapport Vérification';
                          else
                            $data['vulnerability_report_type'] = 'Rapport Audit';

                            $project_vulnerability = $this->ProjectVulnerabilities->find()->where(['project_id'=>$data['project_id']])->last();

                              if(count($project_vulnerability)>0){
                                  $is_bypassing_dates = false;
                                  $last_begin_date = $project_vulnerability->begin_date;
                                  $last_end_date = $project_vulnerability->end_date;

                                  if( ((new \DateTime($data['begin_date']))<$last_end_date) || ((new \DateTime($data['begin_date']))<$last_begin_date))
                                      $is_bypassing_dates = true;
                                  else if( ((new \DateTime($data['end_date']))<$last_begin_date) || ((new \DateTime($data['end_date']))<$last_begin_date))
                                      $is_bypassing_dates = true;
                              }

                          if($is_bypassing_dates)
                            throw new Exception\BadRequestException("Error badRequest - bypassing dates");

                          $data['vulnerability_report_denomination'] = $data['vulnerability_report_type'].'-'.$data['vulnerability_report_denomination'];
                             $data['action'] = "add"; 
                             $data['created_by'] = $this->request->session()->read('Auth.User.id');
                             $data['modified_by'] = $this->request->session()->read('Auth.User.id');
                             $project_vunlerability = $this->ProjectVulnerabilities->newEntity($data);
                      break;

                      case false:
                        $data['action'] = "update";

                        $project_vunlerability = $this->ProjectVulnerabilities->get($data['project_vulnerability_id']);
                        $project_vunlerability = $this->ProjectVulnerabilities->patchEntity($project_vunlerability,$data);
                        $data['modified_by'] = $this->request->session()->read('Auth.User.id');
                      break;
                      
                      default:
                        $data['action'] = "update";
                      break;
                    }
                    if(!$project_vunlerability->errors()){
                                $project_vunlerability->vulnerability_content = json_encode($data['vulnerability_content']);
                                if($this->ProjectVulnerabilities->save($project_vunlerability)){
                                    $response = ['message'=>'ok'];
                                    $this->RequestHandler->renderAs($this, 'json');
                                    $this->set(compact('response'));
                                    $this->set('_serialize',['response']);
                                }else{
                                throw new Exception\BadRequestException(__('error saving 2'));
                                }
                            }else{
                                throw new Exception\BadRequestException(__('error saving 1'));
                            }
                 }

              }else{
                throw new Exception\BadRequestException(__('Une erreur est survenue'));
              }
        }
      }
    }

}
