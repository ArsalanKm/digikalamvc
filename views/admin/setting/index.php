<script src="public/ckeditor/ckeditor.js"></script>
<script src="public/jscolor/jscolor.js"></script>

<?php
require('views/admin/layout.php');


?>
<div class="left">

    <p class="title">

        تنظیمات سایت

        <style>
            .row {
                width: 100%;
                float: right;
                margin-top: 5px;
            }

            .span_title {
                display: inline-block;
                width: 150px;
                font-size: 10pt;
            }

            input {
                width: 200px;
                height: 24px;
                border: 1px solid #eee;
            }

            select {
                font-family: yekan;
                height: 32px;
                line-height: 30px;
                padding: 2px;

            }

            option {
                padding: 2px;
                font-family: yekan;
                font-size: 10pt;
            }

            textarea {
                width: 500px;
                border: 1px solid #ccc;
                height: 250px;
                vertical-align: top;
            }


        </style>

    <form action="adminsetting/index" method="post" enctype="multipart/form-data">

        <?php

        $option = Model::getoption();


        ?>

        <div class="row">

        <span class="span_title">
تعداد محصولات در اسلایدرها:
        </span>
            <input type="text" name="limit_slider" value="<?= $option['limit_slider'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
شماره های تماس:
        </span>
            <input type="text" name="tel" value="<?= $option['tel'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
ایمیل ارتباط با ما:
        </span>
            <input type="text" name="email" value="<?= $option['email'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
مهلت پرداخت(ساعت):
        </span>
            <input type="text" name="mohlatPay" value="<?= $option['mohlatPay'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
روت سایت:
        </span>
            <input type="text" name="root" value="<?= $option['root'] ?>">

        </div>
        <div class="row">

        <span class="span_title">
کد درگاه زرین پال:
        </span>
            <input type="text" name="zarinpalMID" value="<?= $option['zarinpalMID'] ?>">

        </div>


        <div class="row">

        <span class="span_title">
رنگ بدنه:
        </span>

            <style>
                .btn_green2{
                    background: #36be2b none repeat scroll 0 0;
                    border-radius: 4px;
                    box-shadow: 1px 1px 3px #ccc;
                    color: #fff;
                    cursor: pointer;
                    display: inline-block;
                    font-family: yekan;
                    font-size: 9pt;
                    height: 27px;
                    line-height: 27px;
                    text-align: center;
                    width: 42px;
                }
            </style>

            <input id="color1" class="jscolor" type="text" name="body_color" value="<?= $option['body_color'] ?>">

            <span class="btn_green2" onclick="document.getElementById('color1').jscolor.show();">
                انتخاب
            </span>

        </div>

        <div class="row">

        <span class="span_title">
رنگ منو:
        </span>


            <input id="color2" class="jscolor" type="text" name="menu_color" value="<?= $option['menu_color'] ?>">

            <span class="btn_green2" onclick="document.getElementById('color2').jscolor.show();">
                انتخاب
            </span>

        </div>


        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>











