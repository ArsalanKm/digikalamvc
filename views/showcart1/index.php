
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
            <li><span class="circle"></span><span class="line"></span><span
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
        .content .right {
            width: 540px;
            float: right;
        }

        .content .right i {
            width: 48px;
            height: 54px;
            display: block;
            margin: auto;
            background: url(public/images/slices.png) no-repeat -795px -22px;
        }

        .content .left {
            width: 540px;
            float: right;
            margin-right: 20px;
        }

        .content .left i {
            width: 48px;
            height: 54px;
            display: block;
            margin: auto;
            background: url(public/images/slices.png) no-repeat -795px -90px;
        }
        .content p{
            text-align: center;
        }


        .btn_green {
            background: #36be2b none repeat scroll 0 0;
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
        }


        .btn_blue{
            background: #6c59f3 none repeat scroll 0 0;
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
        }


    </style>

    <div class="content">

        <div class="right">
            <i></i>
            <p style="font-size: 12pt;">
                عضو دیجی کالا هستید؟
            </p>
            <p style="font-size: 10.5pt;margin-top: 2px;">
                جهت تکمیل خرید وارد شوید
            </p>
            <p>
                <a href="login" class="btn_green">
                    ورود به کلیک سایت
                </a>
            </p>

        </div>
        <div class="left">
            <i></i>
            <p style="font-size: 12pt;">
                هنوز عضو نشده اید؟
            </p>
            <p style="font-size: 10.5pt;margin-top: 2px;">
                جهت خرید باید ثبت نام کنید
            </p>
            <p>
                <a href="register" class="btn_blue">
ثبت نام در کلیک سایت
                </a>
            </p>
        </div>

    </div>


</div>
























