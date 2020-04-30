<style>
    #adddigibon {
        padding: 10px;
        background: #eee;
        border: 1px dotted #ccc;
        width: 96%;
        padding-bottom: 30px;
        margin-bottom: 25px;
    }

    #adddigibon input {
        width: 300px;
        height: 24px;
        border: 1px solid #ccc;
        margin-right: 10px;
    }

    #adddigibon img {
        position: relative;
        right: 8px;
        top: 10px;
    }

    .digibon .sub {
        box-shadow: 0 0 5px #ccc;
    }

    .digibon .sub table {
        width: 100%;
    }

    .digibon .sub table tr {
        background: #fff !important;

    }

    .digibon .sub table tr:first-child {
        background: #eee !important;
        color: #000 !important;
    }


</style>

<section class="digibon" style="<?php if($activeTab=='digibon'){echo 'display:block;';} ?>">
    <div id="adddigibon">

                <span>
                    کد دریافت دیجی بن:
                </span>
        <input name="code" class="code" type="text">

        <img style="cursor: pointer;" onclick="saveCode();" src="public/images/SaveVoucher.gif">

    </div>

    <table cellspacing="0">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>شرح</td>
            <td>تاریخ ثبت</td>
            <td>تاریخ انقضا</td>
            <td>اعتبار اولیه</td>
            <td>اعتبار مصرفی</td>
            <td>
                مانده
            </td>
            <td> وضعیت</td>
            <td> جزییات</td>

        </tr>

        <?php

        $code = $data['code'];
        $i = 1;
        foreach ($code as $row) {

            ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $row['code'] ?></td>
                <td>بن تخفیف سفارش شما</td>
                <td><?= $row['tarikh_sabt'] ?></td>
                <td><?= $row['tarikh_end'] ?></td>
                <td><?= $row['max'] ?></td>
                <td><?= $row['used'] ?></td>
                <td> <?= $row['max'] - $row['used'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>

                    <img class="showdetails" onclick="showDetailsTr(this)" style="margin-top: 5px;"
                         src="public/images/orderdetailsopen.png">

                </td>

            </tr>


            <tr class="details" style="background: #fff;">

                <td colspan="11">

                    <div class="sub">
                        <table cellspacing="0">
                            <tr>
                                <td>سفارش</td>
                                <td>نوع</td>
                                <td>تاریخ</td>

                            </tr>
                            <?php
                            $orders = $row['orders'];
                            foreach ($orders as $row2) {

                                ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td>خرید</td>
                                    <td><?= $row2['pay_year'] . '/' . $row2['pay_month'] . '/' . $row2['pay_day'] ?></td>
                                </tr>

                            <?php } ?>
                        </table>
                    </div>

                </td>
            </tr>


            <?php
            $i++;
        } ?>

    </table>

</section>


<script>

    function saveCode() {
        var code = $('.code').val();
        var url = 'panel/saveCode';
        var data = {'code': code};

        $.post(url, data, function (msg) {

            window.location='panel/index/digibon';

        })
    }

</script>



























