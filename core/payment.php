<?php

class Payment
{

    private $zarinpalMerchantID = zarinpalMerchantID;
    private $CallbackURL = callbackURL;



    function __construct()
    {
        require('public/nusoap/nusoap.php');
    }

    function zarinpalRequest($Amount, $Description, $Email, $Mobile)
    {

        $client = new nusoap_client(zarinpalWebAdress, 'wsdl');
        $client->soap_defencoding = 'UTF-8';

        $params=array(

            'MerchantID' => $this->zarinpalMerchantID,
            'Amount' => $Amount,
            'Description' => $Description,
            'Email' => $Email,
            'Mobile' => $Mobile,
            'CallbackURL'=>callbackURL

        );


        $result = $client->call('PaymentRequest', $params);

        $Status=$result['Status'];

        $ErrorsArray=unserialize(zarinpalErrors);


        $Authority='';
        $Error='';
        if($Status!=100) {
            $Error = $ErrorsArray[$Status];
        }
        if($Status==100){
            $Authority=$result['Authority'];
        }

        $array=array('Status'=>$Status,'Authority'=>$Authority,'Error'=>$Error);
        return $array;




    }



    function zarinpalVerify($Amount,$Authority){

        $client = new nusoap_client(zarinpalWebAdress, 'wsdl');
        $client->soap_defencoding = 'UTF-8';
        $result = $client->call('PaymentVerification', array(

            'MerchantID' => $this->zarinpalMerchantID,
            'Amount' => $Amount,
            'Authority'=>$Authority


        ));

        $Status=$result['Status'];
        $Error='';
        $RefID='';
        if($Status!=100) {
            $ErrorsArray=unserialize(zarinpalErrors);
            $Error = $ErrorsArray[$Status];
        }
        if($Status==100){
            $RefID=$result['RefID'];
        }

        $array=array('Status'=>$Status,'Error'=>$Error,'RefID'=>$RefID);
        return $array;


    }


}



?>













