<?php
//controlleri ke bad az pardakht check mikonad
class Checkout extends Controller{

    function __construct()
    {
        parent::__construct();
    }

    function index($orderId){
//zarrinpal system is get
        if(isset($_GET['Authority'])){

           $result= $this->model->zarinpalChekout($_GET);
            $data=array('orderInfo'=>$result);

        }
        if(isset($orderId)){

            $result=$this->model->getOrderInfo($orderId);
            $data=array('orderInfo'=>$result);

        }

        $this->view('checkout/index',$data);

    }


    function payonline($orderId){

        $this->model->payOnline($orderId);

    }

    function showerror(){

        $Error=$_GET['error'];
        $orderId=$_GET['orderId'];
        $data=array('Error'=>$Error,'orderId'=>$orderId);
        $this->view('checkout/showerror',$data);

    }
    function creditcard($orderId){

        if(isset($_POST['day'])){

            $this->model->updateCreditCard($_POST,$orderId);

        }

        $orderInfo=$this->model->getOrderInfo($orderId);
        $data=array('orderInfo'=>$orderInfo);
        $this->view('checkout/creditcard',$data);
        
    }

}





?>














