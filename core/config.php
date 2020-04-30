<?php

$model = new Model;
$options = Model::getoption();

define('URL', $options['root']);
define('zarinpalMerchantID', $options['zarinpalMID']);
define('callbackURL', 'http://clicksite.ir/checkout');
define('zarinpalWebAdress', 'https://www.zarinpal.com/pg/services/WebGate/wsdl');
define('mohlatPay', $options['mohlatPay']);
define('menu_color', $options['menu_color']);
define('body_color', $options['body_color']);


$zarinpalErrors = array(

    '-1' => 'اطلاعات ارسال شده ناقص شده است',
    '-2' => 'IP یا مرچنت کد صحیح نیست',
    '-3' => 'سطح تایید پذیرنده کمتر از نقره ای است'

);
define('zarinpalErrors', serialize($zarinpalErrors))


?>