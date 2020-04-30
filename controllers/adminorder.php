<?php

class Adminorder extends Controller
{

    function __construct()
    {
        parent::__construct();
        $level=Model::getUserLevel();
        if($level!=1){header('location:'.URL.'adminlogin');}
    }

    function index()
    {

        $order = $this->model->getOrders();
        $data = array('orders' => $order);
        $this->view('admin/order/index', $data);

    }

    function detail($orderId)
    {

        $order_status = $this->model->orderStatus();
        $orderInfo = $this->model->getOrderInfo($orderId);
        $data = array('orderInfo' => $orderInfo, 'order_status' => $order_status);
        $this->view('admin/order/detail', $data);
    }

    function editOrder($orderId)
    {

        $data = $_POST;
        $this->model->editOrder($orderId, $data);
    }

    function showfactor($orderId)
    {

        $orderInfo = $this->model->getOrderInfo($orderId);
        $data = array('orderInfo' => $orderInfo);
        $this->view('admin/order/factor', $data, 1, 1);

    }

    function delete()
    {


        $this->model->delete($_POST);
        header('location:' . URL . 'adminorder');
    }


}











