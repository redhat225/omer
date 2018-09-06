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
use Cake\Network\Http\Client;
use Cake\Network\Exception;

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

    public function topServiceBase(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date],"index"=>"0","size"=>"5","topsize"=>"5"];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/om-analytics/transaction/getTopServiceBaseByCriteria',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json;
                            $stats = ['by_ca'=> $payload['indicators']['TOP_SERVICE_BASE_BY_CA'], 'by_nbre_trans' => $payload['indicators']['TOP_SERVICE_BASE_BY_NB_TRANS']];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('stats','payload'));
                            $this->set('_serialize',['stats','payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
       
    }

    public function allServiceTransactions(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date],"index"=>"0","size"=>"5","topsize"=>"5"];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/om-analytics/transaction/getAllServiceTransByCriteria',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json;
                            $stats = ['datas'=> $payload['indicators']['datas'], 'total' => $payload['indicators']['total']];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('stats','payload'));
                            $this->set('_serialize',['stats','payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
       
    }

    public function topZone(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date],"index"=>"0","size"=>"5","topsize"=>"5"];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/om-analytics/transaction/getTopZoneCommercialeByCriteria',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json;
                            $stats = ['by_ca'=> $payload['indicators']['TOP_ZONE_COMMERCIALE_BY_CA'], 'by_nbre_trans' => $payload['indicators']['TOP_ZONE_COMMERCIALE_BY_NB_TRANS']];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('stats','payload'));
                            $this->set('_serialize',['stats','payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
    }

    public function quickParc(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date]];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/dashboard-api/tdb_dg/parc',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json['indicators'];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('payload'));
                            $this->set('_serialize',['payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
    }


    public function quickTraffic(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date]];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/dashboard-api/tdb_dg/trafic',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json['indicators'];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('payload'));
                            $this->set('_serialize',['payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
    }


    public function quickReload(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date]];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/dashboard-api/tdb_dg/rechargement',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json['indicators'];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('payload'));
                            $this->set('_serialize',['payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
    }


    public function quickCa(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                    $data = $this->request->data;
                    $start = new \DateTime($data['start_date']);
                    $end = new \DateTime($data['end_date']);

                    $start_date = $start->format('d/m/Y');
                    $end_date = $end->format('d/m/Y');

                    try{
                        $http = new Client();
                        $data = ["data"=>["start_date"=>$start_date, "end_date"=>$end_date]];
                        $response = $http->post('http://dashboard-dg.smile.ci/api/dashboard-api/tdb_dg/ca',json_encode($data),['type'=>'json']);
                        if($response->code === 200){
                            $payload = $response->json['indicators'];
                            $this->RequestHandler->renderAs($this,'json');
                            $this->set(compact('payload'));
                            $this->set('_serialize',['payload']);
                        }
                    }catch(Exception $e){
                        throw new Exception\BadRequestException(__('Une erreur est survenue'));
                    }
            }
        }
    }

}
