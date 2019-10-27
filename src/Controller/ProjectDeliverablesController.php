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
class ProjectDeliverablesController extends AppController
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
            $formatted_data = $this->buildUploads($data);
            $upload = $this->ProjectDeliverables->newEntities($formatted_data);
                 if($this->ProjectDeliverables->saveMany($upload)){
                    $response = ['message'=> 'ok'];
                    $this->RequestHandler->renderAs($this, 'json');
                    $this->set(compact('response'));
                    $this->set('_serialize',['response']);
                 }else{
                   throw new Exception\BadRequestException(__('build upload save error 1'));
                 }
        }
      }
    }

    public function download(){
        $response = $this->response->withFile('img/deliverables/'.$this->request->params['file']);
        // Return the response to prevent controller from trying to render
        return $response;
    }

    private function buildUploads($data){
            try {
                $uploads = [];
                  if(isset($data['assets']) && (!empty($data['assets']))){
                    foreach ($data['assets'] as $key => $value){
                       $original_name = explode('.',$value['name']);
                        $temp_upload = [
                            'project_id' => $data['project_id'],
                            'asset' => $value,
                            'created_by' => $this->request->session()->read('Auth.User.id'),
                            'deliverable_type' => $data['asset_types'][$key],
                            'deliverable_meta'=>json_encode([
                              'display_name' => $original_name[0],
                              'size' => $value['size'],
                              'extension' => end((explode('.',$value['name'])))
                            ]),
                            'deliverable_content' => Text::uuid().'.'.end((explode('.',$value['name'])))
                        ];
                        array_push($uploads,$temp_upload);
                    }
                    return $uploads;
                  }else{
                    throw new Exception\BadRequestException(__('upload object empty/null'));
                  }
            }catch(MainException $e){
                throw new Exception\BadRequestException(__('build upload failed'));
            }

    }

}
