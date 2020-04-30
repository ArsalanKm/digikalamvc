<?php

class Adminuser extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $users = $this->model->getUsers();
        $data = array('users' => $users);
        $this->view('admin/user/index', $data);


    }

    function changelevel1()
    {
        $ids = $_POST['id'];
        $this->model->changelevel1($ids);
        header('location:' . URL . 'adminuser');
    }
    function changelevel2()
    {
        $ids = $_POST['id'];
        $this->model->changelevel2($ids);
        header('location:' . URL . 'adminuser');
    }


}



















