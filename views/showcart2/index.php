<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    #main {
        font-family: yekan;
    }
</style>

<div id="main" style="width: 1200px;margin:10px auto;background: #fff;padding: 6px;">


    <style>

        .order-steps {

            padding-left: 10px;
            padding-right: 200px;
            padding-top: 53px;
            height: 100px;
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
            <li><span class="circle"></span><span class="line"></span><span class="title">
اطلاعات ارسال سفارش
            </span></li>
            <li><span class="circle"></span><span class="line"></span><span class="title">
بازبینی سفارش
            </span></li>
            <li><span class="circle"></span><span class="line"></span><span class="title">
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

    <style>

        .head h4 {
            font-size: 12.4pt;
            font-weight: normal;
        }

        .btn_gray {
            background: #939697 none repeat scroll 0 0;
            box-shadow: 1px 1px 3px #ccc;
            color: #fff;
            display: block;
            font-family: yekan;
            font-size: 11pt;
            height: 37px;
            line-height: 34px;
            text-align: center;
            width: 170px;
            border-radius: 4px;
            margin: auto;
            cursor: pointer;
        }

        .head {
            float: right;
            margin-top: 10px;
            width: 100%;
        }

        .head h4 {
            float: right;
            padding-right: 20px;
        }

        .head .btn_gray {
            float: left;
            margin-top: 20px;
            margin-left: 3px;
        }

        .content {
            float: right;
            margin-top: 20px;
            width: 100%;

        }

        .content table {
            width: 100%;
            margin-top: 14px;
        }

        table tr:first-child td {
            border-top: 1px solid #eee;
        }

        table tr:first-child td:first-child {
            border-right: 1px solid #eee;
        }

        table td {
            border-left: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 5px;
        }

        table .circle {
            width: 15px;
            height: 15px;
            border: 1px solid #ccc;
            border-radius: 100%;
            position: relative;
            display: block;
            margin: auto;
        }

        .girande {
            font-size: 12pt;
        }

        .edit {
            background: #a9b1e8 !important;
        }

        .edit i {
            background: url(public/images/slices.png) no-repeat -812px -446px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto;
        }

        .remove {
            background: #f89d9f !important;
        }

        .remove i {
            background: url(public/images/slices.png) no-repeat -813px -510px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto;
        }

        .content table table {
            width: 100%;
            height: 140px;
        }

        table.active .circle {
            background: #515ff8;
            border: none;
            position: relative;
        }

        table.active tr:first-child td:first-child {
            background: #f7fff7;
        }

        table.active .circle::after {
            background: #fff none repeat scroll 0 0;
            border-radius: 100%;
            content: " ";
            display: block;
            width: 5px;
            height: 5px;
            position: absolute;
            right: 5px;
            top: 5px;
        }

        .content table.active .triangle {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 42px 42px 0;
            border-color: transparent #47ff0a transparent transparent;
            position: absolute;
            top: 0;
            right: 0;

        }


    </style>

    <div class="head">
        <h4>
            انتخاب آدرس
        </h4>
        <span class="btn_gray" onclick="showWindow()">
افزودن آدرس جدید
        </span>
    </div>

    <div class="content">

        <?php

        $address = $data['address'];
        $first=1;
        foreach ($address as $row) {

            ?>

            <table data-id="<?= $row['id']; ?>" data-city="<?= $row['city']; ?>" class="table_address <?php if($first==1){echo 'active';} ?>" cellspacing="0">
                <tr>

                    <td onclick="sessionAddress(<?= $row['id'] ?>)" class="select_address"
                        style="width: 60px;position: relative;cursor: pointer;" rowspan="3">
                        <span class="triangle"></span>
                        <span class="circle"></span>
                    </td>


                    <td class="girande" colspan="3">
                        <?= $row['family']; ?>
                    </td>
                    <td style="width: 34px;padding: 0;" rowspan="3">

                        <table cellspacing="0">
                            <tr>
                                <td onclick="editAddress(<?= $row['id'] ?>)" class="edit"
                                    style="border: 0;cursor: pointer;"><i></i></td>
                            </tr>
                            <tr>
                                <td onclick="deleteAddress(<?= $row['id'] ?>)" class="remove" style="border: 0;cursor: pointer;"><i></i></td>
                            </tr>
                        </table>

                    </td>

                </tr>
                <tr>
                    <td style="width: 200px;font-size: 10pt;">استان: <?= $row['ostan_name']; ?></td>
                    <td rowspan="2" style="font-size: 10.5pt;color: #858889;">

                        <br>
                        کدپستی:<?= $row['codeposti']; ?>
                    </td>
                    <td style="width: 200px;font-size: 10.5pt;">
                        شماره تماس اضطراری:<?= $row['mobile']; ?>
                    </td>

                </tr>
                <tr>
                    <td style="width: 200px;font-size: 10pt;">
                        شهر:<?= $row['city_name']; ?>
                    </td>
                    <td style="width: 200px;font-size: 10.5pt;">
                        شماره تماس ثابت:<?= $row['tel']; ?>
                    </td>
                </tr>
            </table>

        <?php
        $first=0;
        } ?>


    </div>


    <div class="head" style=" margin-top: 30px;">
        <h4>
            انتخاب شیوه ارسال
        </h4>

    </div>


    <div class="send_types">
        <style>

            .send_types {
                margin-top: 30px;
                float: right;
                width: 100%;
            }

            .send_types table {
                width: 100%;
                margin-top: 14px;
            }
        </style>

        <?php
        $postType = $data['postType'];
        foreach ($postType as $row) {
            ?>

            <table data-post-type="<?= $row['id'] ?>" class="table_post" cellspacing="0">
                <tr>
                    <td class="select_post" style="width: 60px;position: relative;cursor: pointer;">
                        <span class="circle"></span>
                    </td>
                    <td style="width: 980px;">
                        <img style="float: right;margin-top: 8px;" src="public/images/post_48_icon.png">
                        <div style="float: right;margin-right: 10px;">
                            <p style="font-size: 12pt;margin: 1px 0;">
                                IconPath
                                <?= $row['title']; ?>
                            </p>
                            <p style="font-size: 10pt;margin: 1px 0;color: #9799ad;">

                                <?= $row['description']; ?>
                            </p>
                        </div>
                    </td>
                    <td>
                        <p style="margin: 1px 0;font-size: 10pt;text-align: center;">
                            هزینه ارسال
                        </p>
                        <p style="margin: 1px 0;font-size: 12pt;color: green;text-align: center;">
                            <span id="post_price<?= $row['id']; ?>"></span>
                            تومان
                        </p>
                    </td>
                </tr>
            </table>

        <?php } ?>


        <script>

            function deleteAddress(id){

                var url='showcart2/deleteaddress/'+id;
                var data={};
                $.post(url,data,function (msg) {

                    window.location='showcart2/index';

                })
            }


            function getPostPrice() {

                var url = 'showcart2/getpostprice';
                var tableActive = $('.table_address.active');
                
                var cityId = tableActive.attr('data-city');
                var addressId = tableActive.attr('data-id');

                var data = {'cityId': cityId,'addressId':addressId};
                $.post(url, data, function (msg) {
                    var pishtaz = msg['pishtaz'];
                    var sefareshi = msg['sefareshi'];
                    $('#post_price1').text(pishtaz);
                    $('#post_price2').text(sefareshi);
                    console.log(msg);

                }, 'json')


            }
            getPostPrice();
            
            
            function sessionPostType() {
                var postTypeId=$('.table_post.active').attr('data-post-type');

                var url = 'showcart2/sessionposttype';

                var data = {'postTypeId':postTypeId};
                $.post(url, data, function (msg) {
                   //alert(msg);
                })
            }


            $('.select_address').click(function () {
                $('.table_address').removeClass('active');
                $(this).parents('table').addClass('active');
                getPostPrice();
            });

            $('.select_post').click(function () {
                $('.table_post').removeClass('active');
                $(this).parents('table').addClass('active');
                sessionPostType();
            })

        </script>


        <div style="margin-top: 15px;float: right;width: 100%;">
            <a href="showcart3" class="btn_green" style="float: left;">
                ذخیره و مرحله بعد
            </a>
        </div>

    </div>


</div>

<script>

    var editAddressId = '';

    function editAddress(addressId) {

        editAddressId = addressId;

        var url = 'showcart2/editaddress/' + addressId;
        var data = {};
        $.post(url, data, function (msg) {
            console.log(msg);

            $('input[name=family]').val(msg['family']);
            $('input[name=mobile]').val(msg['mobile']);
            $('input[name=tel]').val(msg['tel']);
            $('textarea[name=address]').val(msg['address']);
            $('input[name=codeposti]').val(msg['codeposti']);
            var state = msg['ostan'];
            var city = msg['city'];

            $('.state option').each(function (index) {

                var value_ostan = $(this).val();
                if (value_ostan == state) {
                    $(this).attr('selected', 'selected');
                    ldMenu(value_ostan, 'city');
                    $('.selectpicker').selectpicker('refresh');
                }

            });

            $('.city option').each(function (index) {
                var city_value = $(this).val();
                if (city_value == city) {

                    $(this).attr('selected', 'selected');
                    $('.selectpicker').selectpicker('refresh');
                }
            });

            var city = msg['city'];
            var mahale = msg['mahale'];

            $('#add_address').fadeIn(200);
            $('#dark').fadeIn(200);

        }, 'json');

    }

</script>


<?php
require('addaddress.php');
?>









