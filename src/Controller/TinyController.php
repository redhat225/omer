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

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class TinyController extends AppController
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

    public function upload(){
        if($this->request->is('ajax')){
            if($this->request->is('post')){
                // Writing a custom validator
                try{
                        $validator = new Validator();
                        $validator
                            ->requirePresence('file')
                            ->notEmpty('file', 'please fill file')
                            ->add('file','fileSize',[
                                'rule' => ['fileSize', '<', '10MB'],
                                'message' => "overflow size"
                            ])
                            ->add('file', 'fileType',[
                                'rule' => ['mimeType', ['image/jpeg','image/jpg','image/png','image/bitmap','image/gif']],
                                'message' => 'failure signature'
                            ]);
                        $errors = $validator->errors($this->request->data);
                        if(!$errors){
                            $target = Text::uuid().'.'.strtolower(pathinfo($this->request->data['file']['name'],PATHINFO_EXTENSION));
                            if(move_uploaded_file($this->request->data['file']['tmp_name'],WWW_ROOT.'img/tiny/content/'.$target)){
                                    $location= "/img/tiny/content/{$target}"; 
                                    $this->RequestHandler->renderAs($this, 'json');
                                    $this->set(compact('location'));
                                    $this->set('_serialize',['location']);
                            }else{
                                throw new Exception\ConflictException(__('Conflict occured 3'));
                            }
                        }else{
                                throw new Exception\ConflictException(__('Conflict occured 2'));
                        }

                }catch(MainException $e){
                    throw new Exception\ConflictException(__('Conflict occured 1'));
                }

        }
      }
    }

}
