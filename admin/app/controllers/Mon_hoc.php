<?php
class Mon_hoc extends BaseController{
    public function Show(){
        //model
        $show = $this->model('LopModel');
        $show->getLop();
        //view
        $this->view("master1",[
            'page'=>'Monhoc'
        ]);

    }
}