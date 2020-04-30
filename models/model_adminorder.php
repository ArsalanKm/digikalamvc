<?php

class model_adminorder extends Model
{


    function __construct()
    {
        parent::__construct();
    }


    function getOrders()
    {
        $sql = "select * from tbl_order order by id desc";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getOrderInfo($orderId)
    {


        $sql = "select o.* ,pa.title as payTypeTitle,po.title as postTitle
         from tbl_order o 
         LEFT JOIN tbl_pay_type pa ON o.pay_type=pa.id
         LEFT JOIN tbl_post_type po ON o.post_type=po.id
         where o.id=?";

        $result = $this->doSelect($sql, array($orderId), 1);
        return $result;

    }


    function editOrder($orderId, $data)
    {

        $address = $data['address'];
        $code_posti = $data['code_posti'];
        $tel = $data['tel'];
        $pay_status = $data['pay_status'];
        $order_status = $data['order_status'];

        $sql = "update tbl_order set address=?,code_posti=?,tel=?,pay=?,status=? where id=?";
        $this->doQuery($sql, array($address, $code_posti, $tel, $pay_status, $order_status, $orderId));

        header('location:' . URL . 'adminorder/detail/' . $orderId);

    }

    function orderStatus()
    {

        $sql = "select * from tbl_order_status";
        $result = $this->doSelect($sql);
        return $result;

    }

    function delete($data)
    {

        $ids = implode(',', $data['id']);
        echo $ids;
        $sql = "delete from tbl_order where id IN (" . $ids . ") ";
        $this->doQuery($sql);

    }
}


?>




















