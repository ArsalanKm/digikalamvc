<?php

class Showcart3 extends Controller
{

    function __construct()
    {

    }

    function index()
    {

        $basketInfo = $this->model->getBasketReview();
        $postPrice=$this->model->postPrice();
        Model::sessionInit();
        $addressInfo=Model::sessionGet('addressInfo');
        $addressInfo=unserialize($addressInfo);
        $postType=Model::sessionGet('postType');
        
        $data = array('basketInfo' => $basketInfo,'postPrice'=>$postPrice,'addressInfo'=>$addressInfo,'postType'=>$postType);
        


        $this->view('showcart3/index', $data);
    }

}


?>