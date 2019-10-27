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
class ProjectAccompanimentsController extends AppController
{
    public function initialize(){
        parent::initialize();
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function create(){
      if($this->request->is('ajax')){
        if($this->request->is('post')){
              try{
              $data = $this->request->data;
              $data['created_by'] = $this->request->session()->read('Auth.User.id');
              $accompaniment = $this->ProjectAccompaniments->newEntity($data);
              if(!$accompaniment->errors()){
                  $accompaniment->accompaniments_meta = json_encode($data['accompaniments_meta']);
                  if($this->ProjectAccompaniments->save($accompaniment)){
                        $response = ['message'=>'ok'];
                        $this->RequestHandler->renderAs($this, 'json');
                        $this->set(compact('response'));
                        $this->set('_serialize',['response']);
                  }else
                    throw new Exception\BadRequestException(__('bad request save 1'));
              }else
                throw new Exception\BadRequestException(__('bad request error 1'));
              }catch(MainException $e){
                throw new Exception\BadRequestException(__('Exception error 1'));
              }
        }
      }
    }

    public function update(){
      if($this->request->is('ajax')){
        if($this->request->is('post')){   

              $data = $this->request->data;
              $accompaniment = $this->ProjectAccompaniments->get($data['id']);
              if($accompaniment->created_by === $this->request->session()->read('Auth.User.id')){
                $accompaniment = $this->ProjectAccompaniments->patchEntity($accompaniment,$data);
                if(!$accompaniment->errors()){
                    $accompaniment->accompaniments_meta = json_encode($data['accompaniments_meta']);
                    if($this->ProjectAccompaniments->save($accompaniment)){
                        $response = ['message'=>'ok'];
                        $this->RequestHandler->renderAs($this, 'json');
                        $this->set(compact('response'));
                        $this->set('_serialize',['response']);
                    }else
                       throw new Exception\BadRequestException(__('bad request save accompaniment'));
                }else
                   throw new Exception\BadRequestException(__('bad request errors accompaniment'));
              }else{
                throw new Exception\BadRequestException(__('bad request update forbidden'));
              }
        }
      }
    }

}
