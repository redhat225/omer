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
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Network\Exception;
use \Exception as MainException;
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Cake\Utility\Security;
use Cake\Utility\Text;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class  ProjectsController extends AppController
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

    public function index(){
              
    }

    public function add(){
              if($this->request->is('ajax')){
                  if($this->request->is('post')){
                        $data = $this->request->data;
                        $data['action'] = 'create';
                        $data['created_by'] = $this->request->session()->read('Auth.User.id');
                        $data['project_is_closed'] = false;
                        $data['project_accompaniments']['content']['created_by'] = $data['created_by'];
                        $project = $this->Projects->newEntity($data,['associated'=>['ProjectAccompaniments']]);
                        $project = $this->Projects->newEntity($data);
                        if(!$project->errors()){
                            $project->project_meta = json_encode($data['project_meta']);
                            $project->project_accompaniments[0]->accompaniments_meta = json_encode($data['project_accompaniments']['content']['accompaniments_meta']);
                            if($this->Projects->save($project)){
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
              }
    }

    public function view(){
      
    }



    public function write(){
              if($this->request->is('ajax')){
                  if($this->request->is('post')){
                    
                  }
              }
    }

    public function edit(){
              if($this->request->is('ajax')){
                  if($this->request->is('post')){
                    $data = $this->request->data;
                    $data['action'] = 'edit';
                    $project = $this->Projects->get($data['id']);
                    $project = $this->Projects->patchEntity($project,$data);
                    if(!$project->errors()){
                      $project->project_meta = json_encode($data['project_meta']); 
                      if($this->Projects->save($project)){
                          $response = ['message'=>'ok'];
                          $this->RequestHandler->renderAs($this, 'json');
                          $this->set(compact('response'));
                          $this->set('_serialize',['response']);
                      }else
                       throw new Exception\BadRequestException(__('errors save object'));
                    }else
                       throw new Exception\BadRequestException(__('errors object'));
                  }
              }
    }

    public function load(){
              if($this->request->is('ajax')){
                  if($this->request->is('post')){
                    $data = $this->request->data['project_id'];
                    $project = $this->Projects->get($data);
                    $this->RequestHandler->renderAs($this, 'json');
                    $this->set(compact('project'));
                    $this->set('_serialize',['project']);
                  }
              }
    }


    public function all(){
              if($this->request->is('ajax')){
                  if($this->request->is('get')){
                        $projects = $this->Projects->find()
                        ->contain(['ProjectAccompaniments'=>function($q){
                            return $q->order(['ProjectAccompaniments.created'=>'desc']);
                        },'ProjectPlannings'=>function($q){
                            return $q->order(['ProjectPlannings.created'=>'desc']);
                        },'ProjectDeliverables.UserAccounts.Users','ProjectAccompaniments.UserAccounts.Users','ProjectVulnerabilities'=>function($q){
                            return $q->order(['ProjectVulnerabilities.created'=>'desc']);
                        },'ProjectVulnerabilities.UserAccounts.Users']);
                        $this->RequestHandler->renderAs($this, 'json');
                        $this->set(compact('projects'));
                        $this->set('_serialize',['projects']);

                  }
            }
    }

    public function close(){
              if($this->request->is('ajax')){
                  if($this->request->is('post')){
                    $data = $this->request->data['project_id'];
                    $project = $this->Projects->get($data);
                    
                    if($project->project_is_closed)
                      $project->project_is_closed = false;
                    else
                      $project->project_is_closed = true;

                    if($this->Projects->save($project)){
                      $response = ['message'=>'ok'];
                      $this->RequestHandler->renderAs($this, 'json');
                      $this->set(compact('response'));
                      $this->set('_serialize',['response']);
                    }
                  }
              }
    }

}
