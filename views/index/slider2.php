<style>
    #slider2 {
        width: 890px;
        height: 304px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
        margin-top: 8px;
        position: relative;
    }

    #slider2_content {
        width: 705px;
        float: right;
        height: 100%;
        background: url(public/images/slider2_bg.jpg) no-repeat;
    }

    #slider2_navigator {
        width: 184px;
        border-right: 1px solid #ccc;
        height: 100%;
        float: left;
        background: #eee;
    }

    #slider2_content a {
        display: block;
        height: 100%;
    }

    #slider2_content a #slider2_content_left img {
        width: 220px;
        margin-right: 40px;

    }

    #slider2_navigator ul {
        padding: 0;
    }

    #slider2_navigator ul li {
        height: 38px;
    }

    #slider2_navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        font-family: yekan;
        font-size: 10pt;
        line-height: 37px;
        cursor: pointer;
    }

    .slider2_content_right {
        width: 400px;
        height: 100%;
        float: right;
    }

    .slider2_content_left {
        width: 305px;
        height: 100%;
        float: left;
    }

    .slider2_content_right .title {
        color: red;
        font-family: yekan;
        font-size: 14pt;
        padding-right: 30px;
        padding-top: 10px;
    }

    .slider2_content_right .price_info {
        height: 35px;
        margin-right: 30px;
    }

    .price_info_old {
        width: 75px;
        height: 100%;
        background: #ccc;
        float: right;
        position: relative;
        color: #fff;
        text-align: center;
    }

    .price_info_old::after {
        content: " ";
        position: absolute;
        left: -11px;
        top: 8px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #cccccc transparent transparent;
        z-index: 2;

    }

    .price_info_old::before {

        border-bottom: 1px solid #000;
        content: " ";
        height: 0;
        position: absolute;
        right: 1px;
        top: 17px;
        transform: rotate(-30deg);
        width: 95%;

    }

    .price_info_new {
        width: 155px;
        height: 100%;
        background: red;
        float: right;
        margin-right: 2px;
        position: relative;
        color: #fff;
        text-align: center;
    }

    .price_info_new::before {
        content: " ";
        position: absolute;
        right: 0;
        top: 8px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 8px 12px 8px 0;
        border-color: transparent #ffffff transparent transparent;

    }

    .flipTimer {
        position: absolute;
        top: 190px;
        right: -130px;
        transform: scale(.3);
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    .slider2_finished {
        width: 705px;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        background: rgba(0, 0, 0, .01);
        color: red;
        font-size: 35pt;
        line-height: 235px;
        text-align: center;
        display: none;
        z-index: 2;

    }

    #slider2_navigator .active {
        background: #ff252e;
        color: #fff;
        position: relative;
    }

    #slider2_navigator .active::after {

        content: " ";
        position: absolute;
        right: -17px;
        top: 0;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 19px 0 19px 17px;
        border-color: transparent transparent transparent #ff252c;

    }


</style>

<div id="slider2">

    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>

    <div class="slider2_finished yekan">

        تمام شد!
    </div>

    <div id="slider2_content">

        <?php

        $slider2 = $data[1];
        $date_end = $data[2];
        foreach ($slider2 as $row) {

            ?>

            <a class="item" href="<?= URL ?>product/index/<?= $row['id']; ?>">
                <div class="slider2_content_right">

                    <p class="title">
                        پیشنهاد شگفت انگیز
                    </p>
                    <div class="price_info">

                        <div class="price_info_old yekan">
                            <?= $row['price'] ?>
                        </div>
                        <div class="price_info_new yekan">
                            <?= $row['price_total']; ?>
                           تومان
                        </div>

                        <p class="yekan fontsm" style="float: right;width: 100%;margin: 2px;">
                            توان: 2 و نیم وات
                        </p>
                        <p class="yekan fontsm" style="float: right;width: 100%;margin: 2px;">
                            مقاوم در برابر ضربه
                        </p>

                    </div>

                </div>
                <div class="slider2_content_left">

                    <p class="yekan" style="font-size: 15pt;text-align: center;">
                        <?= $row['title']; ?>
                    </p>

                    <img src="public/images/products/<?= $row['id']; ?>/product_220.jpg">

                </div>
            </a>


        <?php } ?>


    </div>
    <div id="slider2_navigator">

        <ul>
            <?php

            $slider2 = $data[1];
            foreach ($slider2 as $row) {

                ?>
                <li>
                    <a>
                        <?= $row['title']; ?>
                    </a>
                </li>
            <?php } ?>

        </ul>

    </div>


</div>


<script>


    $('.flipTimer').flipTimer({

        direction: 'down',
        date: '<?php echo $date_end; ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });


    var sliderTag2 = $('#slider2');
    var sliderItems2 = sliderTag2.find('.item');
    var numItems2 = sliderItems2.length;
    var nextSlide2 = 1;
    var timeOut2 = 5000;
    var sliderNavigators2 = sliderTag2.find("#slider2_navigator ul li");

    function slider2() {

        if (nextSlide2 > numItems2) {
            nextSlide2 = 1;
        }

        if (nextSlide2 < 1) {
            nextSlide2 = numItems2;
        }

        sliderItems2.fadeOut(0);
        sliderItems2.eq(nextSlide2 - 1).fadeIn(100);
        sliderNavigators2.removeClass('active');
        sliderNavigators2.eq(nextSlide2 - 1).addClass('active');
        nextSlide2++;

    }

    slider2();
    var sliderInterval2 = setInterval(slider2, timeOut);

    sliderTag2.mouseleave(function () {
        clearInterval(sliderInterval2);
        sliderInterval2 = setInterval(slider2, timeOut2);
    });


    function goToSlide2(index) {
        nextSlide2 = index;
        slider2();
    }

    $('#slider2 #slider2_navigator li').click(function () {

        clearInterval(sliderInterval2);
        var index = $(this).index();
        goToSlide2(index + 1);
    });

    /*slider2*/

</script>