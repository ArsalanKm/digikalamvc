<?php

class model_showcart4 extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function checkCode($code)
    {

        $sql = "select * from tbl_code where code=? and used=0";
        $result = $this->doSelect($sql, array($code));

        if (sizeof($result) > 0) {
            return $result[0]['darsad'];

        } else {
            return 0;
        }


    }


    function calcuateTotalPrice($code)
    {

        $basketInfo = $this->getBasket();
        $basketPrice = $basketInfo[1];
        $basketDiscount = $basketInfo[2];
        self::sessionInit();
        $addressInfo = self::sessionGet('addressInfo');
        $addressInfo = unserialize($addressInfo);
        $cityId = $addressInfo['city'];
        $postPriceBoth = $this->calculatePostPrice($cityId);
        $postType = self::sessionGet('postType');
        $postPrice = 0;
        if ($postType == 1) {
            $postPrice = $postPriceBoth['pishtaz'];
        } else if ($postType == 2) {
            $postPrice = $postPriceBoth['sefareshi'];
        }

        $check = $this->checkCode($code);
        $codeDiscount = 0;
        if ($check != 0) {
            $codeDiscount = ($check * $basketPrice) / 100;
            $codeDiscount = intval($codeDiscount);
        }

        $priceTotal = $basketPrice - $basketDiscount + $postPrice - $codeDiscount;

        return $priceTotal;

    }


    function saveOrder($data)
    {

        self::sessionInit();
        $addressInfo = self::sessionGet('addressInfo');
        $addressInfo = unserialize($addressInfo);
        $family = $addressInfo['family'];
        $ostan = $addressInfo['ostan_name'];
        $city = $addressInfo['city_name'];
        $mobile = $addressInfo['mobile'];
        $tel = $addressInfo['tel'];
        $codeposti = $addressInfo['codeposti'];
        $address = $addressInfo['address'];

        $basketInfo = $this->getBasket();
        $basket = $basketInfo[0];
        $basket = serialize($basket);
        $basketPrice = $basketInfo[1];
        $basketDiscount = $basketInfo[2];


        $postprice = $this->calculatePostPrice($addressInfo['city']);
        $postType = self::sessionGet('postType');
        if ($postType == 1) {
            $postprice = $postprice['pishtaz'];
        } else if ($postType == 2) {
            $postprice = $postprice['sefareshi'];
        }


        $code = $data['code'];
        $darsadDiscount = $this->checkCode($code);
        $amountDiscount = ($darsadDiscount * $basketPrice) / 100;

        $priceTotal = $basketPrice - $basketDiscount + $postprice - $amountDiscount;
        $priceTotal = ceil($priceTotal);

        $userId = self::sessionGet('userId');


        $payType = $data['paytype'];
        $beforepay = '';
        $Description = 'خرید از کلیک سایت';

        if ($payType == 1) {

            $Payment = new Payment;
            $result = $Payment->zarinpalRequest($priceTotal, $Description, 'info@clicksite.ir', $mobile);
            $Status = $result['Status'];
            $Authority = $result['Authority'];
            $beforepay = $Authority;
        }

        $time = time();
        $date = self::jaliliDate('Y/m/d');

        $sql = "insert into tbl_order (family,ostan,city,code_posti,mobile,tel,address,basket,amount,post_type,post_price,userId,status,beforepay,pay_type,time_sabt,tarikh) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $params = array($family, $ostan, $city, $codeposti, $mobile, $tel, $address, $basket, $priceTotal, $postType, $postprice, $userId, 1, $beforepay, $payType, $time, $date);
        $this->doQuery($sql, $params);


        if ($payType == 1) {

            if ($Status == 100) {

                header('location: https://www.zarinpal.com/pg/StartPay/' . $Authority);

            } else {
                header('location:' . URL . 'showcart4/index/' . $Status);
            }
        }


        if ($payType == 4) {

            $sql = "select * from tbl_order order by id desc limit 1";
            $result = $this->doSelect($sql, array(), 1);
            header('location:' . URL . 'checkout/index/' . $result['id']);

        }


    }


}


?>



















