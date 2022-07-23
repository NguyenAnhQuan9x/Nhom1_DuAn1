<?php
class Home extends BaseController{
    public function Show(){
        //model
        $show = $this->model('home');
        $show->getKH();
        //view
        $this->view("master1",[
            'page'=>'Home'
        ]);

    }
}