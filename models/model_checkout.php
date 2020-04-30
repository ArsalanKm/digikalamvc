 <?php

class model_checkout extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getOrderInfo($orderId)
    {
        $sql = "select * from tbl_order where id=?";
        $result = $this->doSelect($sql, array($orderId), 1);
        return $result;
    }

    function zarinpalChekout($data)
    {

        $Status = $data['Status'];
        $Authority = $data['Authority'];
        $sql = "select * from tbl_order where beforepay=?";
        $result = $this->doSelect($sql, [$Authority], 1);
        $Amount = $result['amount'];

        $Payment = new Payment;

        $result = $Payment->zarinpalVerify($Amount, $Authority);
        $Status = $result['Status'];
        $Error = $result['Error'];
        $RefID = $result['RefID'];

        if ($Status == 100) {

            $sql = "update tbl_order set pay=1,afterpay=? where beforepay=?";
            $params = array($RefID, $Authority);
            $this->doQuery($sql, $params);
        }

        $sql = "select * from tbl_order where beforepay=?";
        $result = $this->doSelect($sql, array($Authority), 1);
        return $result;


    }


    function payOnline($orderId)
    {



        $orderInfo = $this->getOrderInfo($orderId);
        $payType = $orderInfo['pay_type'];

        if($payType==4){

            $sql="update tbl_order set pay_type=1 where id=?";
            $this->doQuery($sql,array($orderId));
            $payType=1;

        }

        if ($payType == 1) {

            $Amount = $orderInfo['amount'];
            $Email = 'info@clicksite.ir';
            $Mobile = $orderInfo['mobile'];
            $Payment = new Payment;
            $result = $Payment->zarinpalRequest($Amount, 'خرید از کلیک سایت', $Email, $Mobile);

            $Status = $result['Status'];
            $Authority = $result['Authority'];
            $Error= $result['Error'];

            if ($Status == 100) {

                header('location: https://www.zarinpal.com/pg/StartPay/' . $Authority);

            } else {

                header('location:'.URL.'checkout/showerror?error='.$Error.'&orderId='.$orderId);
            }

        }//zarinpal
        if ($payType == 2) {

        }//saman
        if ($payType == 3) {

        }//pasargad...


    }

    function updateCreditCard($data,$orderId){

        $day=$data['day'];
        $month=$data['month'];
        $year=$data['year'];
        $creditcard=$data['creditcard'];
        $bank=$data['bank'];
        $hour=$data['hour'];
        $minute=$data['minute'];

        $sql="update tbl_order  set pay_day=?,pay_month=?,pay_year=?,pay_card=?,pay_bank_name=?,pay_hour=?,pay_minute=?,pay_type=4 where id=?";
        $params=array($day,$month,$year,$creditcard,$bank,$hour,$minute,$orderId);
        $this->doQuery($sql,$params);
    }

}


?>












