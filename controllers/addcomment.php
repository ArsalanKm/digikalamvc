<?php

class Addcomment extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($productId)
    {

        $params=$this->model->getParam($productId);
        $productInfo=$this->model->productInfo($productId);
        $commentInfo=$this->model->commentInfo($productId);
        $data=array('params'=>$params,'productInfo'=>$productInfo,'commentInfo'=>$commentInfo);
        $this->view('addcomment/index',$data);
    }

    function savecomment($productId){

        $this->model->saveComment($_POST,$productId);
    }

}


?>




















