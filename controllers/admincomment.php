<?php

class Admincomment extends Controller
{


    function __construct()
    {
        parent::__construct();

    }


    function index()
    {

        $comment = $this->model->getComment();
        $data = array('comment' => $comment);
        $this->view('admin/comment/index', $data);
    }

    function confirm()
    {


        $this->model->confirm($_POST);
        header('location:'.URL.'admincomment');
    }
    function unconfirm()
    {

        $ids = $_POST['id'];
        $this->model->unconfirm($ids);
        header('location:'.URL.'admincomment');
    }
    function delete()
    {

        $ids = $_POST['id'];
        $this->model->delete($ids);
        header('location:'.URL.'admincomment');
    }

}


?>















