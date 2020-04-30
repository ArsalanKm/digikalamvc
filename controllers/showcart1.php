<?php

class Showcart1 extends Controller{

    function __construct()
    {

        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if($check!=false){
            header('location:'.URL.'showcart2');
        }
        
    }

    function index(){

        $this->view('showcart1/index');
    }

}


?>