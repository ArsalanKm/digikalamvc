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
        cursor: pointer;
    }

    .head .btn_green {
        float: left;
        margin-left: 5px;
        margin-top: 8px;
    }

    .row2 {

        width: 100%;
        float: right;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 10.5pt;
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

<?php

$orderInfo=$data['orderInfo'];

?>

<div id="main" style="width: 1200px;margin:10px auto;background: #fff;padding: 10px;">

    <form action="checkout/creditcard/<?= $orderInfo['id'] ?>" method="post">

        <div class="row2">
            <h3>
                اطلاعات واریز کارت به کارت
            </h3>
        </div>

        <div class="row2">

        <span class="title w120">
            تاریخ واریز:
        </span>

            <span class="title">
روز:
        </span>
            <select name="day">
                <?php
                for ($i = 1; $i < 32; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
ماه:
        </span>
            <select name="month">
                <?php
                for ($i = 1; $i < 13; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
سال:
        </span>
            <select name="year">

                <option value="1400">
                    1400
                </option>
                <option value="1399">
                    1399
                </option>

            </select>

        </div>

        <div class="row2">

        <span class="title w120">
شماره کارت:
        </span>

            <input name="creditcard" type="text">

        </div>


        <div class="row2">

        <span class="title w120">
نام بانک صادرکننده:
        </span>

            <input name="bank" type="text">

        </div>


        <div class="row2">

        <span class="title w120">
            زمان واریز:
        </span>

            <span class="title">
ساعت:
          </span>
            <select name="hour">
                <?php
                for ($i = 0; $i < 24; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?php
                        if ($i == 0) {
                            echo '00';
                        } else {
                            echo $i;
                        }

                        ?>
                    </option>
                <?php } ?>
            </select>
            <span class="title">
دقیقه:
        </span>
            <select name="minute">
                <?php
                for ($i = 1; $i < 60; $i++) {
                    ?>
                    <option value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>

        </div>

        <div class="row2">
            <a class="btn_green" onclick="submitForm()">
                ثبت اطلاعات
            </a>
        </div>

    </form>

    <script>
        function submitForm()
        {
            $('form').submit()
        }
    </script>

</div>














