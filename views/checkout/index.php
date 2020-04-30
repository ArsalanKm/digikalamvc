<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    #main {
        font-family: yekan;
    }

    .head {
        float: right;
        margin-top: 36px;
        width: 100%;
    }

    .head h4 {
        font-size: 12.5pt;
        font-family: yekan;
        margin-top: 5px;
        padding-right: 10px;
        float: right;
    }

    .btn_green {
        background: #36be2b none repeat scroll 0 0;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        display: inline-block;
        font-family: yekan;
        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
    }

    .head .btn_green {
        float: left;
        margin-left: 5px;
        margin-top: 8px;
    }

</style>

<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">


    <style>

        .order-steps {

            padding-left: 10px;
            padding-right: 200px;
            padding-top: 53px;
            height: 100px;
            font-family: yekan;
        }

        .order-steps .dashed {

            float: right;
            margin-top: 12px;
            margin-left: 4px;
        }

        .order-steps .dashed span {
            width: 11px;
            height: 3px;
            background: blue;
            display: block;
            float: right;
            margin-left: 3px;
        }

        .order-steps ul {

        }

        .order-steps ul li {

            display: block;
            float: right;
            height: 1px;
            position: relative;
            width: 180px;

        }

        .order-steps ul li .circle {

            width: 19px;
            height: 19px;
            display: block;
            border: 3px solid #ccc;
            border-radius: 100%;
            position: absolute;
        }

        .order-steps ul li.active .circle {

            border: 3px solid #2396f3;
            background: #2396f3 url(public/images/slices.png) no-repeat -810px -476px;
            border-radius: 100%;
            position: absolute;
        }

        .order-steps ul li .line {

            width: 128px;
            height: 2px;
            display: block;
            background: #ccc;
            position: absolute;
            right: 36px;
            top: 15px;

        }

        .order-steps ul li.active .line {

            background: #2396f3;

        }

        .order-steps ul li .title {

            font-size: 11.7pt;
            position: absolute;
            right: -41px;
            top: 27px;
            width: 146px;
        }

        .order-steps ul li.active .title {

            color: #2396f3;
        }

    </style>

    <div class="order-steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="active"><span class="circle"></span><span class="line"></span><span
                    class="title">
ورود به کلیک سایت
                                    </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات ارسال سفارش
            </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
بازبینی سفارش
            </span></li>
            <li class="active"><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات پرداخت
            </span></li>


        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <?php
    $orderInfo = $data['orderInfo'];

    $basket = unserialize($orderInfo['basket']);
    $time_sabt=$orderInfo['time_sabt'];
    $gozashte=time()-$time_sabt;
    $mohlat=mohlatPay*3600;

    ?>

    <style>
        #products, #addressinfo {
            width: 100%;
        }

        table tr:first-child td {
            background: #b1e09c;
        }

        table td {
            padding: 4px;
            font-size: 10.5pt;
            border-bottom: 1px solid #eee;
            border-left: 1px solid #eee;
        }

        table tr td:first-child {
            border-right: 1px solid #eee;
        }

        table tr:nth-child(even) td {
            background: #f2f4f2;
        }
        .error {
            border: 1px solid red;
            text-align: center;
            font-size: 12pt;
            color: red;
            font-family: yekan;
            padding: 8px;
        }
    </style>


    <?php
    if($gozashte>$mohlat){

    ?>

    <p class="error">

        این سفارش منقضی شده است.حداکثر مهلت پرداخت،برابر
        <?= mohlatPay ?>
        ساعت می باشد

    </p>

    <?php } ?>

    <table id="products" cellpadding="0" cellspacing="0">

        <tr>
            <td>
                نام محصول
            </td>

            <td>
                رنگ
            </td>
            <td>
                گارانتی
            </td>

            <td>
                تعداد
            </td>

            <td>

                قیمت
            </td>
            <td>
                تخفیف
            </td>

        </tr>

        <?php
        foreach ($basket as $row) {

            ?>
            <tr>


                <td>
                    <?= $row['title'] ?>
                </td>
                <td>
                    <?= $row['colorTitle'] ?>
                </td>
                <td>
                    <?= $row['garanteeTitle'] ?>
                </td>
                <td>
                    <?= $row['tedad'] ?>
                </td>
                <td>
                    <?= $row['price']*$row['tedad'] ?>
                    تومان
                </td>
                <td>
                    <?= (($row['discount']*$row['price'])/100)*$row['tedad']   ?>
                    تومان
                </td>


            </tr>

        <?php } ?>


    </table>


    <style>
        .row2{
            background: #d9f4ec;
            padding: 15px;
            font-size: 11pt;
            margin-top: 15px;
            margin-bottom: 15px;
            width: 97%;
        }
    </style>


    <div class="row2">

        <p>
        وضعیت پرداخت:

        <?php

        if($orderInfo['pay']==1){
            echo 'پرداخت شده';
        }else{
            echo 'در انتظار پرداخت';
        }

        ?>
        </p>
        <p>
            نوع ارسال:

            <?php

            if($orderInfo['post_type']==1){
                echo 'پیشتاز';
            }else if($orderInfo['post_type']==2){
                echo 'سفارشی';
            }

            ?>

        </p>
    <p>
شماره خرید:

            <?php

            echo $orderInfo['beforepay'];
            ?>

        </p>

        <?php



        if($orderInfo['pay']==0 and ($gozashte<=$mohlat) ) {
            ?>
            <p>


                <a class="btn_green" href="checkout/payonline/<?= $orderInfo['id'] ?>">
                    پرداخت آنلاین

                </a>
                <a class="btn_green" href="checkout/creditcard/<?= $orderInfo['id'] ?>">
                    پردخت با کارت
                </a>

            </p>
            <?php
        }
        ?>


    </div>


    <table id="addressinfo" cellpadding="0" cellspacing="0">

        <tr>
            <td>
            گیرنده
            </td>
            <td>
                آدرس
            </td>
            <td>
                شهر
            </td>
            <td>
                کد پستی
            </td>
            <td>
                موبایل
            </td>
            <td>
                تلفن ثابت
            </td>

        </tr>

        <tr>
            <td>
                <?= $orderInfo['family']; ?>
            </td>
            <td>
                <?= $orderInfo['address']; ?>
            </td>
            <td>
                <?= $orderInfo['city']; ?>
            </td>
            <td>
                <?= $orderInfo['code_posti']; ?>
            </td>
            <td>
                <?= $orderInfo['mobile']; ?>
            </td>
            <td>
                <?= $orderInfo['tel']; ?>
            </td>
        </tr>

    </table>


</div>










