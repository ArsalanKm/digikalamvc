<?php

class Showcart2 extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $address=$this->model->getAddress();
        $postType=$this->model->getPostType();
        $data=array('address'=>$address,'postType'=>$postType);
        $this->view('showcart2/index',$data);
    }

    function addaddress($editAddressId)
    {

        $this->model->addAddress($_POST,$editAddressId);
        
    }
    
    function editaddress($addressId){
        
        $addressInfo=$this->model->getAddressInfo($addressId);
        echo json_encode($addressInfo);
        
    }
    
    
    function getpostprice(){
        
        $data=$_POST;
        $this->model->getPostPrice($data);
    }
    
    function sessionposttype(){
        
        $data=$_POST;
        $this->model->sessionPostType($data);
    }

    function deleteaddress($id){
        $this->model->deleteAddress($id);
    }
    
   
  
}


?>

















