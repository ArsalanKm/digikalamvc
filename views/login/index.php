<style>
    .header {
        height: 160px;
        background: #fafcfc;
        text-align: center;
        padding-top: 15px;
    }

    .header i {
        width: 70px;
        height: 52px;
        background: url(public/images/slices.png) no-repeat -870px -89px;
        margin: auto;
        display: block;
    }

    .header h2 {
        font-size: 14pt;
        font-family: yekan;
        text-align: center;
    }

    .header .left, .header .right {
        width: 50%;
        float: right;
    }

    .header .left {
        line-height: 52px;
        padding-top: 49px;
        width: 40%;
    }

    .header .right {
        padding-right: 40px;
        padding-top: 32px;
    }

    .header input[type=text], .header input[type=password] {
        width: 250px;
        height: 30px;
        border: 1px solid #eee;
    }

    .header label {
        display: inline-block;
        font-family: yekan;
        font-size: 10.5pt;
        width: 150px;
    }

    .header .right > div {
        margin-top: 25px;
        font-family: yekan;
        font-size: 10.3pt;
    }

    .header .btn {
        background: #208de6 none repeat scroll 0 0;
        display: block;
        float: left;
        height: 38px;
        margin-left: 28px;
        margin-top: 2px;
        width: 110px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
        text-align: center;
        color: #fff;
        font-family: yekan;
        line-height: 32px;
        font-size: 10pt;
    }

    .check_label {
        border: 1px solid #eee;
        border-radius: 1px;
        display: block;
        height: 14px;
        position: absolute;
        right: 3px;
        top: 5px;
        width: 14px !important;
    }

    .check_label.checked {
        background: url(public/images/slices.png) #595ce1 no-repeat -193px -82px;
        border: none;
    }

    .check_div {
        position: relative;
    }

    .check_input {
        display: inline-block;
        height: 16px;
        margin: 0;
        opacity: 0;
        position: relative;
        right: 1px;
        top: 2px;
        width: 16px;
        z-index: 2;
        cursor: pointer;
        margin-left: 30px;
    }


</style>

<div id="main" style="width: 1200px;margin:10px auto;height: 500px;background: #fff;box-shadow: 0 1px 3px #eee;">

    <div class="header">

        <i></i>
        <h2>
            ورود به سایت
        </h2>
        <div class="right">

            <form action="login/checkuser" method="post">

                <div>
                    <label>

                        پست الکترونیک
                    </label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>

                        رمز عبور
                    </label>
                    <input type="password" name="password">
                </div>


                <div>

                <span style="cursor: pointer;" class="btn" onclick="submitForm();">
ورود
                </span>
                </div>

            </form>

        </div>

        <script>
            function submitForm() {
                $('form').submit();
            }
        </script>


        <style>
            .header .left ul {
                padding: 0;
            }

            .header .left li {
                font-family: yekan;
                font-size: 10.6pt;
            }

            .header .left li i {
                background: url(public/images/slices.png);
                display: inline-block;
                height: 27px;
                margin-left: 21px;
                position: relative;
                top: 8px;
                width: 27px;
            }
        </style>

        <div class="left">

            <ul>
                <li>
                    <i style="background-position: -980px -330px;"></i>
                    سریع تر و ساده تر خرید کنید
                </li>
                <li>
                    <i style="background-position: -980px -286px;"></i>
                    به سادگی سوابق خرید و فعالیت های خود را مدیریت کنید
                </li>
                <li>
                    <i style="background-position: -980px -243px;"></i>
                    لیست علاقمندی های خود را بسازید و تغییرات آنها را دنبال کنید
                </li>
            </ul>

        </div>

    </div>


</div>

