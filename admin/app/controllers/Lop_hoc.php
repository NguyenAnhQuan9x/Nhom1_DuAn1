<?php
class Lop_hoc extends BaseController{
    public function Show(){
        //model
        $them = $this->model('LopModel');
        $them->getLop();
        //view
        $this->view('master1',[
            'page'=>'Lophoc'
        ]);
    }
}