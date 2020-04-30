<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    #main {
        font-family: yekan;
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
        cursor: pointer;
    }


</style>



    <?php

    $activeMenu='order';

    require ('views/admin/layout.php');
    $orderInfo = $data['orderInfo'];

    ?>

    <div class="left">

    <form method="post" action="adminorder/editOrder/<?= $orderInfo['id'] ?>">

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


        <?php


        $basket = unserialize($orderInfo['basket']);
        $time_sabt = $orderInfo['time_sabt'];
        $gozashte = time() - $time_sabt;
        $mohlat = mohlatPay * 3600;

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

            h4 {
                font-family: yekan;
                font-size: 13pt;
                margin-top: 4px;
            }
        </style>

        <h4>
            جزییات سفارش کد:
            <?= $orderInfo['id'] ?>

            <a href="adminorder/showfactor/<?= $orderInfo['id'] ?>" class="btn_green"
               style="float: left;margin-left: 10px;margin-top: 3px;">
                مشاهده فاکتور
            </a>

        </h4>


        <?php
        if ($gozashte > $mohlat) {

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
                        <?= $row['price'] * $row['tedad'] ?>
                        تومان
                    </td>
                    <td>
                        <?= (($row['discount'] * $row['price']) / 100) * $row['tedad'] ?>
                        تومان
                    </td>


                </tr>

            <?php } ?>


        </table>


        <style>
            .row2 {
                background: #d9f4ec;
                padding: 15px 0;
                font-size: 11pt;
                margin-top: 15px;
                margin-bottom: 15px;
            }
        </style>


        <div class="row2">

            <p>
                وضعیت پرداخت:


                <select name="pay_status">

                    <option value="0" <?php if($orderInfo['pay'] == 0){echo 'selected="selected"';} ?>>
                        در انتظار پرداخت
                    </option>
                    <option value="1" <?php if($orderInfo['pay'] == 1){echo 'selected="selected"';} ?>>
                        پرداخت شده
                    </option>

                </select>


            </p>

            <p>
وضعیت سفارش:


                <select name="order_status">

                    <?php
                    $order_status=$data['order_status'];
                    foreach ($order_status as $status){

                    ?>
                    <option value="<?= $status['id'] ?>" <?php if($orderInfo['status'] == $status['id']){echo 'selected="selected"';} ?>>
<?= $status['title'] ?>
                    </option>

                    <?php } ?>


                </select>


            </p>

            <p>
                نوع ارسال:

                <?php
                echo $orderInfo['postTitle'];

                ?>

            </p> <p>
شیوه پرداخت:
                <?php
                echo $orderInfo['payTypeTitle'];

                ?>

                (

                <?php
                $date=$orderInfo['pay_year'].'/'.$orderInfo['pay_month'].'/'.$orderInfo['pay_day'];
                $time=$orderInfo['pay_hour'].':'.$orderInfo['pay_minute'];

                echo $date.'-'.$time;

                ?>

                )

            </p>

            <p>

                <?php

                echo 'شماره کارت:'.$orderInfo['pay_card'].'- نام بانک:'.$orderInfo['pay_bank_name'];
                ?>

            </p>
            <p>
                شماره خرید:

                <?php

                echo $orderInfo['beforepay'];
                ?>

            </p>

            <?php


            if ($orderInfo['pay'] == 0 and ($gozashte <= $mohlat)) {
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
                    <input name="address" type="text" value="<?= $orderInfo['address']; ?>">
                </td>
                <td>
                    <?= $orderInfo['city']; ?>
                </td>
                <td>

                    <input name="code_posti" type="text" value="<?= $orderInfo['code_posti']; ?>">
                </td>
                <td>
                    <?= $orderInfo['mobile']; ?>
                </td>
                <td>

                    <input name="tel" type="text" value="<?= $orderInfo['tel']; ?>">
                </td>
            </tr>

        </table>

        <div class="row2">

        <span class="btn_green" onclick="submitForm()">
            ذخیره اطلاعات
        </span>

        </div>


    </form>
        </div>



<script>
    function submitForm() {
        $('form').submit();
    }
</script>










