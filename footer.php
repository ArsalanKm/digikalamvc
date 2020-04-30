<?php

$option=Model::getoption();


?>
<style>
    footer {
        height: 300px;
        float: right;
        margin-top: 40px;
        width: 100%;
    }

    #footer_top {
        background: #6d717a none repeat scroll 0 0;
        height: 45px;
    }

    #footer_bottom {
        height: 255px;
        background: #f7f8fa none repeat scroll 0 0;
    }

    footer .main {
        width: 1200px;
        height: 100%;
        margin: auto;
    }

    #footer_top span {
        color: #fff;
    }

    #footer_top i {
        background: url(public/images/slices.png);
        display: inline-block;
        float: left;
        height: 17px;
        margin-right: 14px;
        margin-top: 10px;
        width: 17px;
    }

    #footer_top ul {
        padding: 0;
        float: left;
        height: 100%;
    }

    #footer_top li {
        float: right;
        height: 100%;
        margin-left: 15px;
    }

    #footer_top li a {
        color: #fff;
        line-height: 42px;
    }
</style>

<footer>

    <div id="footer_top">
        <div class="main">

            <span class="yekan fontlg">
                 ۷ روز هفته، ۲۴ ساعته پاسخگوی شما هستیم.
            </span>

            <ul>
                <li>
                    <a class="yekan">

                        <?= $option['tel']; ?>
                        <i style="background-position: -397px -420px; "></i>

                    </a>
                </li>
                <li>
                    <a class="yekan">
                        سوالات متداول
                        <i style="background-position: -358px -420px; "></i>

                    </a>
                </li>
                <li>
                    <a class="yekan">
                        <?= $option['email']; ?>
                        <i style="background-position: -321px -420px; "></i>

                    </a>
                </li>
            </ul>

        </div>
    </div>

    <style>
        #footer_bottom .right {
            width: 220px;
            height: 100%;
            float: right;
        }

        #footer_bottom .center {
            width: 220px;
            height: 100%;
            float: right;
        }

        #footer_bottom .left {
            width: 590px;
            height: 100%;
            float: left;
        }

        #footer_bottom ul li {
            font-family: yekan;
            font-size: 11.3pt;
            line-height: 58px;
        }

        #footer_bottom .title2 {
            font-size: 14pt;
        }

        #footer_bottom .email input {
            width: 430px;
            height: 38px;
            border: 1px solid #ccc;
            font-family: yekan;
        }

        #footer_bottom .email .btn {
            background: #208de6 none repeat scroll 0 0;
            display: block;
            float: left;
            height: 38px;
            margin-left: 28px;
            margin-top: 2px;
            width: 110px;
            box-shadow: 0 2px 3px rgba(0,0,0,.2);
            text-align: center;
            color:#fff;
            font-family: yekan;
            line-height: 32px;
            font-size: 10pt;
        }

        footer .social{float: left;margin-top: 26px;width: 100%;}
        footer .social img {float: left;margin-left: 4px;}
        .social_button{width: 28px;height: 28px;display: block;float: right;background: url(public/images/slices.png);margin-right: 4px;}
    </style>

    <div id="footer_bottom">

        <div class="main">

            <div class="right">

                <ul>
                    <li><a class="title2">راهنمای خرید از دیجی‌کالا</a></li>
                    <li><a> ثبت سفارش</a></li>
                    <li><a>رویه های ارسال سفارش</a></li>
                    <li><a>شیوه های پرداخت</a></li>


                </ul>

            </div>
            <div class="center">
                <ul>
                    <li><a class="title2">راهنمای خرید مشتریان</a></li>
                    <li><a> ثبت سفارش</a></li>
                    <li><a>رویه های ارسال سفارش</a></li>
                    <li><a>شیوه های پرداخت</a></li>


                </ul>
            </div>
            <div class="left">
                <p class="title2 yekan">
                    اولین نفری که مطلع می شود، باشید!
                </p>

                <div class="email">
                    <input type="text">
                    <span class="btn">
                        تایید ایمیل
                    </span>
                </div>

                <div class="social">

                    <a>
                        <img src="public/images/ios_app_bg.png">
                    </a>
                    <a>
                        <img src="public/images/android_app_bg.png">
                    </a>

                    <span class="social_button" style="background-position:-577px -621px; "></span>
                    <span class="social_button" style="background-position:-453px -621px; "></span>
                    <span class="social_button" style="background-position:-494px -621px; "></span>

                </div>

            </div>

        </div>

    </div>

</footer>


<script>


    var timer = {};

    $('#menu_top li').hover(function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeIn(0);
            tag.addClass('active-menu');
            $(' > .submenu3', tag).fadeIn(0);

        }, 500);

    }, function () {

        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {

            $(' > ul', tag).fadeOut(0);
            tag.removeClass('active-menu');
            $(' > .submenu3', tag).fadeOut(0);
        }, 600);

    })

</script>


</body>
</html>