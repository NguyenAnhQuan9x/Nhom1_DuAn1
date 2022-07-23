<?php
class Khoahoc extends BaseController{
    public function SayHi(){
        $ds = $this-> model("KhoahocModel");
        $ds->getKH2();
    }
}