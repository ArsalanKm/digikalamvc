<?php

class Adminslider extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (isset($_POST['title'])) {
            $this->model->addSlider($_POST, $_FILES);
        }

        $result = $this->model->getslider();
        $data = array('slider' => $result);
        $this->view('admin/slider/index', $data);


    }

    function delete()
    {

        $this->model->delete($_POST);
        header('location:' . URL . 'adminslider/index');
    }

}


?>




















