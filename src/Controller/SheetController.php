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
class SheetController extends AppController
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

    public function corrections(){
      $this->loadModel('ProjectVulnerabilities');
      $cache_content = Cache::read('content','register_cache_engine');


      $vulnerability_sheet = $this->ProjectVulnerabilities->get($this->request->params['vuln_id'],['contain'=>['Projects']]);
        // $this->viewBuilder()->options([
        //         'pdfConfig' => [
        //             // 'filename' => 'portrait.pdf',
        //             // 'download' => false
        //         ]
        // ]);

      $vulnerability_sheet->vulnerability_content = json_decode($vulnerability_sheet->vulnerability_content);
      $begin_date_unformat = new \DateTime($vulnerability_sheet->begin_date);
      $begin_date = $begin_date_unformat->format('d-m-Y');

      $end_date_unformat = new \DateTime($vulnerability_sheet->end_date);
      $end_date = $end_date_unformat->format('d-m-Y');

      $vulnerability_sheet->begin_date = $begin_date;
      $vulnerability_sheet->end_date = $end_date;

      $severities = [];
      $surfaces = [];

      // surfaces calculations
      foreach ($cache_content->project_deliverables->reports->categories as $type){
                                    $type = [
                                        "encountered" => 0,
                                        "type" => $type->category,
                                        "vulns" => []
                                    ];
                                    array_push($surfaces,$type);
      }

      foreach($surfaces as $surface_key=>$surface_value){
             foreach ($vulnerability_sheet->vulnerability_content as $vunl_key => $vuln_value){
                      if($vuln_value->type === $surface_value['type']){
                            $surfaces[$surface_key]['encountered']++;
                            array_push($surfaces[$surface_key]['vulns'],$vuln_value);
                      }
             }
      }


      // severities calculation
      foreach($cache_content->project_deliverables->reports->severities as $severity){
        $severities[$severity->rating]=0;
      }

      foreach ($vulnerability_sheet->vulnerability_content as $content){
        $severities[$content->riskrating]++;
      }

      foreach ($surfaces as $key => $value) {
         if($value['encountered']==0)
          unset($surfaces[$key]);
      }

        if(!count($surfaces)>0)
          $surfaces = false;

  

        $this->set(compact('vulnerability_sheet','severities','surfaces'));
        $this->viewBuilder()->setLayout('default_sheet_corrections');
    }

    private function format_corrections_vulns(){

    }

}
