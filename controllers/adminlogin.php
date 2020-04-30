<?php

class Adminlogin extends Controller
{

    function __construct()
    {
        parent::__construct();

    }

    function index()
    {

        $this->view('admin/login/index');


    }


    function checkuser()
    {

        $form = $_POST;
        $this->model->checkUser($form);
        Model::sessionInit();
        $check=Model::sessionGet('userId');

        if($check==false){
            header('location:'.URL.'adminlogin');
        }else{
            echo 'login success!';
            header('location:'.URL.'admindashboard');
        }



    }


}