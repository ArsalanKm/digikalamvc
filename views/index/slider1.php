<style>
    #slider {
        height: 310px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(255, 255, 255, .3);
        background: #fff;
    }

    #slider_img {
        height: 260px;
    }

    #slider_img img {
        height: 260px;
        width: 100%;
    }

    #slider_img a {
        display: none;
    }

    #slider_navigator {
        height: 50px;
        background: rgba(0, 0, 0, .5);
    }

    #slider #prev {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        top: 130px;
        right: 15px;
        background: url(public/images/arrow_slider.png) no-repeat;
        background-position: 0 -33px;
        cursor: pointer;
        z-index: 2;
    }

    #slider #next {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        top: 130px;
        left: 15px;
        background: url(public/images/arrow_slider.png) no-repeat;
        cursor: pointer;
        z-index: 2;
    }

    #slider #slider_navigator ul {
        height: 100%;
        padding: 0;
    }

    #slider #slider_navigator ul li {
        width: 178px;
        height: 100%;
        float: right;
    }

    #slider #slider_navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 45px;
        color: #fff;
        cursor: pointer;
    }

    #slider #slider_navigator .active > a {

        background: #fff;
        color: #000;
        position: relative;
    }

    #slider #slider_navigator .active > a::after {

        content: " ";
        position: absolute;
        top: -13px;
        right: 0;
        left: 0;
        margin: 0 auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12.5px 13px 12.5px;
        border-color: transparent transparent #ffffff transparent;
    }


</style>


<div id="slider" style="position: relative;">

            <span id="prev">

            </span>

             <span id="next">

            </span>

    <div id="slider_img">

        <?php

        $slider1=$data[0];
        foreach ($slider1 as $slider) {

            ?>
            <a href="<?= $slider['link']; ?>" class="item">
                <img src="<?= $slider['img']; ?>">

            </a>


            <?php
        }
        ?>

    </div>

    <div id="slider_navigator">
        <ul>

            <?php

            foreach ($slider1 as $slider) {

                ?>

                <li>

                    <a class="yekan fontsm">

                        <?= $slider['title'] ?>
                    </a>

                </li>


                <?php
            }
            ?>


        </ul>

    </div>

</div>


<script>

    $('.next').click(function () {
        sliderscroll('left');
    });

    $('.prev').click(function () {
        sliderscroll('right');
    });


    var sliderTag = $('#slider');
    var sliderItems = sliderTag.find('.item');
    var numItems = sliderItems.length;
    var nextSlide = 1;
    var timeOut = 5000;
    var sliderNavigators = sliderTag.find("#slider_navigator ul li");

    function slider() {

        if (nextSlide > numItems) {
            nextSlide = 1;
        }

        if (nextSlide < 1) {
            nextSlide = numItems;
        }

        sliderItems.fadeOut(0);
        sliderItems.eq(nextSlide - 1).fadeIn(100);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide - 1).addClass('active');
        nextSlide++;

    }

    slider();
    var sliderInterval = setInterval(slider, timeOut);

    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timeOut);
    });


    function goTonext() {
        slider();
    }

    $('#slider #next').click(function () {
        clearInterval(sliderInterval);
        goTonext();

    });

    function goToprev() {
        nextSlide = nextSlide - 2;
        slider();
    }

    $('#slider #prev').click(function () {
        clearInterval(sliderInterval);
        goToprev();

    });


    function goToSlide(index) {
        nextSlide = index;
        slider();
    }

    $('#slider #slider_navigator li').hover(function () {

        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlide(index + 1);
    }, function () {


    });

    $('button').click(function () {
        slider();
    });


    /*main_slider*/
</script>