<?php

class SweetsController extends AppController
{

// Sweet,Commentモデルを使用する
    public $uses = array('Sweet', 'Comment');

    // Sessionコンポーネントを使用する
    public $components = array('Session');



    public function admin_register(){


    }

	public function admin_confirm(){

        $this->Sweet->save($this->request->data);
        $this->Session->write('hozon',$this->request->data);


    }

    public function admin_notice(){

        $register = $this->Session->read('hozon');
        $this->Sweet->save($register);

    }

    public function index(){
        $happy = $this->Sweet->?find("all");
        $this->set("marriage", $happy);

    }

}
