<?php
$activeMenu = 'stat';
require('views/admin/layout.php');


?>
<style>
    .w400 {
        width: 600px;
    }

    h4 {
        font-size: 12.5pt;
        font-family: yekan;
    }

    .row2 .title {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;

    }

    .row2 select {
        float: right;
        margin-right: 6px;
        font-family: yekan;
        font-size: 10pt;
        min-width: 100px;
    }

    h3 {
        font-size: 13pt;
        border-bottom: 1px solid #ccc;
    }

    .row2 input[type=text] {
        width: 200px;
        border: 1px solid #eee;
        float: right;
        height: 20px;
        padding: 4px;
        font-family: yekan;
        margin-right: 10px;
    }

    .w120 {
        width: 120px;
    }
</style>

<div class="left">


    <?php

    $stat = $data['stat'];
    $result = $stat['result'];

    ?>

    <p class="title">
        <a>
            آمار سفارشات در بازه زمانی
            <?= $stat['startDate'] ?>
            تا
            <?= $stat['endDate'] ?>

        </a>


    </p>

    <style>
        .spanTag {
            float: right;
            font-size: 10.5pt;
            margin-left: 30px;
        }
    </style>

    <div class="row2">


        <span class="spanTag">
            تعداد کل سفارشات:
            <?= sizeof($result) ?>
        </span>

        <span class="spanTag">
تعداد سفارشات پرداخت شده:
            <?= $stat['order_paied'] ?>
        </span>

        <span class="spanTag">
درصد سفارشات پرداخت شده:
            <?= ($stat['order_paied'] / sizeof($result)) * 100 ?>
            %
        </span>


        <span class="spanTag">
مبلغ کل فروش:
            <?= number_format($stat['amount']) ?>
            تومان
        </span>


    </div>



    <table class="list" cellspacing="0">

        <tr>
            <td>
                کد
            </td>
            <td>
                تاریخ
            </td>

            <td style="width: 350px;">
                تحویل گیرنده
            </td>
            <td>
                مبلغ کل
            </td>
            <td>
                استان
            </td>
            <td>
                شهر
            </td>

            <td>
                جزییات
            </td>


        </tr>

        <?php
        foreach ($result as $row) {

            ?>
            <tr>
                <td>
                    <?= $row['id']; ?>
                </td>
                <td>
                    <?= $row['tarikh']; ?>
                </td>
                <td>
                    <?= $row['family']; ?>
                </td>
                <td>
                    <?= $row['amount']; ?>
                </td>
                <td>
                    <?= $row['ostan']; ?>
                </td>
                <td>
                    <?= $row['city']; ?>
                </td>

                <td>
                    <a href="adminorder/detail/<?= $row['id']; ?>">
                        <img src="public/images/edit_icon.ico" class="view">
                    </a>
                </td>


            </tr>


        <?php } ?>

    </table>



</div>


</div>


<script>
    function submitForm(formId) {
        $('#' + formId).submit();
    }
</script>











