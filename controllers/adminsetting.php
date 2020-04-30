<?php

class Adminsetting extends Controller
{


    function __construct()
    {
        parent::__construct();
    }

    function index()
    {


        if(isset($_POST['limit_slider'])){

            $this->model->saveSetting($_POST);

        }


        $this->view('admin/setting/index');

    }


}


?>














