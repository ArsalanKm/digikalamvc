
<style>

    #sidbar_right {
        width: 290px;
        float: right;
    }

    #digikala_tv li {
        margin-bottom: 8px;
    }

    #digikala_tv li a {
        position: relative;
        display: block;
    }

    #digikala_tv li a .image {
        width: 100%;
        height: 160px;
        border-radius: 4px;
    }

    #digikala_tv li a::before {
        content: " ";
        width: 100%;
        height: 160px;
        background: rgba(0, 0, 0, .3);
        display: block;
        position: absolute;
        border-radius: 4px;

    }

    #digikala_tv li .circle {
        transition: all 1s ease;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: block;
        position: absolute;
        top: 48px;
        left: 0;
        right: 0;
        margin: auto;
        background: rgba(255, 255, 255, .3);
        text-align: center;
    }

    #digikala_tv li:hover .circle {
        background: rgba(255, 255, 255, .5) !important;
    }

    #digikala_tv li .play_icon {
        margin: auto;
        margin-top: 23px;
    }

    #sidebar_right_ul li img {
        width: 290px;
        height: 265px;
    }

    #sidebar_right_ul li {
        box-shadow: 0 1px 2px rgba(0, 0, 0, .3);
        border-radius: 4px;
        overflow: hidden;
        height: 265px;
        margin-bottom: 4px;
    }

    #last_news_sidebar {
        width: 290px;
        background: #fff;
        margin-top: 10px;
    }

    #last_news_sidebar {
        border-radius: 4px;
        margin-top: 10px;
        overflow: hidden;
    }

    #last_news_sidebar h3 {
        background: #f7f9fa;
        height: 40px;
        color: #829498;
        padding-right: 10px;
        line-height: 36px;
        margin: 0;
    }

    #last_news_sidebar ul li a {
        padding: 8px;
        display: block;
        float: right;
    }

    #last_news_sidebar .col-right {
        float: right;
    }

    #last_news_sidebar .col-right img {
        border-radius: 50%;
    }

    #last_news_sidebar .col-left {
        float: right;
        padding-right: 13px;
        width: 190px;
    }

    #last_news_sidebar p {
        margin: 0;
    }


</style>


<div id="sidbar_right">

    <img src="public/images/Euro2016-290.52.jpg" style="margin: 10px 0;border-radius: 4px;">

    <ul id="digikala_tv" style="padding: 0;">
        <li>
            <a>
                <img class="image" src="public/images/TV_100_Innovative_Products.jpg">
                    <span class="circle">
                        <img src="public/images/play.png" class="play_icon">
                    </span>
            </a>
        </li>
        <li>
            <a>
                <img class="image" src="public/images/Motorola_Moto_360_1_Min_Intro.jpg">
                    <span class="circle">
                        <img src="public/images/play.png" class="play_icon">
                    </span>
            </a>
        </li>
    </ul>

    <ul id="sidebar_right_ul" style="padding: 0;">
        <li>
            <a>
                <img src="public/images/li1.jpg">

            </a>
        </li>
        <li>
            <a>
                <img src="public/images/li2.jpg">

            </a>
        </li>
        <li>
            <a>
                <img src="public/images/li3.jpg">

            </a>
        </li>
    </ul>

    <div id="last_news_sidebar">

        <h3 class="yekan fontsm">تازه ترین خبرها</h3>

        <ul style="padding: 0;">
            <li>
                <a>
                    <div class="col-right">
                        <img src="public/images/SanDisk_Headquarters_Milpitas-60x60.jpg" width="70" height="70">
                    </div>
                    <div class="col-left">
                        <p class="yekan fontsm">
                            کارت حافظه های 256 گیگابایتی سن دیسک معرفی شدند.
                        </p>
                        <p class="yekan" style="font-size: 9pt;color: #829498;">
                            پنج شنبه 10 تیر 95
                        </p>

                    </div>

                </a>
            </li>

            <li>
                <a>
                    <div class="col-right">
                        <img src="public/images/iPhone7-headphone-3-60x60.jpg" width="70" height="70">
                    </div>
                    <div class="col-left">
                        <p class="yekan fontsm">
                            اولین تصاویر از هدفون آیفون 7 لو رفت
                        </p>
                        <p class="yekan" style="font-size: 9pt;color: #829498;">
                            پنج شنبه 10 تیر 95
                        </p>

                    </div>

                </a>
            </li>
        </ul>

    </div>




<style>
    #brands_sidebar a {
        display: block;
        width: 134px;
        height: 95px;
        background: #fff;
        float: right;
        margin-left: 10px;
        margin-bottom: 4px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .3);
        vertical-align: middle;
        line-height: 110px;
    }

    #brands_sidebar a img {
        width: 100%;
    }

    #brands_sidebar a:nth-child(even) {
        float: left;
        margin-left: 0;
    }

</style>

<div id="brands_sidebar" style="margin-top: 10px;">
    <a>
        <img src="public/images/x.vision.png">
    </a>
    <a>
        <img src="public/images/lenovo.png">
    </a>
    <a>
        <img src="public/images/nivea.png">
    </a>
    <a>
        <img src="public/images/adata.png">
    </a>
    <a>
        <img src="public/images/d-link.png">
    </a>
    <a>
        <img src="public/images/oral-b.png">
    </a>
    <a>
        <img src="public/images/panasonic.png">
    </a>
    <a>
        <img src="public/images/asus.png">
    </a>

</div>

    </div>