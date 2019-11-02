<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

// Home Controller For Managing Home Tab
class ZineController extends AppController
{

    public function initialize(){

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function read(){
        // $mag = $emag_code;

        // $this->set(compact('mag'));
        // $this->set('_serialize',['mag']);
    }


}
