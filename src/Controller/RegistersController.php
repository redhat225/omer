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

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class RegistersController extends AppController
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

    public function retrieve(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                // if(($registers = Cache::read('content','register_cache_engine')) === false) {
                          $registers = $this->Registers->find()->first();

                          $register = json_decode($registers->register_content);
                          
                          Cache::write('content', $register,'register_cache_engine');
                // }else{
                //     $register = Cache::read('content','register_cache_engine');
                // }
                    $this->RequestHandler->renderAs($this, 'json');
                    $this->set(compact('register'));
                    $this->set('_serialize',['register']);
        }
      }
    }

    public function retrieveCountriesAndCities(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                    $file = new File(WWW_ROOT . 'assets' . DS .'countries.json');
                    $register_countries_cities = json_decode($file->read());
                    $file->close();
                    $this->RequestHandler->renderAs($this, 'json');
                    $this->set(compact('register_countries_cities'));
                    $this->set('_serialize',['register_countries_cities']);
        }
      }
    }

    public function resource(){
        if($this->request->is('ajax')){
            if($this->request->is('get')){
                    $resource = $this->request->params["resource_label"];
                    switch ($resource) {
                        case 'pcidssv321':
                          $resource_path="pcidss_v_3_2_1_test_procedures.json";
                        break;
                        case 'countriesandcities':
                          $resource_path="countries.json";
                        break;
                        case 'solutions_pcidss321':
                          $resource_path="solutions_pcidss321.json";
                        break;
                        default:
                          $resource_path="null.json";
                        break;
                    }
                    $file = new File(WWW_ROOT . 'assets' . DS . $resource_path);
                    $content = json_decode($file->read());
                    $file->close();
                    $this->RequestHandler->renderAs($this, 'json');
                    $this->set(compact('content'));
                    $this->set('_serialize',['content']);
        }
      }
    }

}
