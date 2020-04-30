<style>
    .sliderscroll {
        height: 310px;
        width: 1200px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
        margin-top: 20px;
        float: right;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;

    }

    .sliderscroll h3 {
        background: #f7f9fa;
        height: 35px;
        padding-right: 10px;
        padding-top: 7px;
        font-family: yekan;
        font-size: 10.5pt;
        margin: 0;
        font-weight: normal;
    }

    .sliderscroll_content {
        height: 268px;
    }

    .sliderscroll_prev, .sliderscroll_next {
        width: 55px;
        height: 100%;
        float: right;
    }

    .sliderscroll_main {
        width: 1090px;
        height: 100%;
        float: right;
        overflow: hidden;
    }

    .sliderscroll_prev .prev {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -852px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer;
    }

    .sliderscroll_next .next {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -812px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer;
    }

    .sliderscroll .sliderscroll_main ul {
        padding: 0;
        height: 100%;

    }

    .sliderscroll .sliderscroll_main ul li {
        padding: 0;
        width: 218px;
        height: 100%;
        float: right;
    }

    .sliderscroll .sliderscroll_main ul li a {
        display: block;
        height: 100%;
        text-align: center;
    }

    .sliderscroll .price {
        color: green;
        font-size: 13pt;
    }

    .sliderscroll p {
        text-align: center;
        margin-top: 1px;
        margin-bottom: 1px;
    }

</style>


<div class="sliderscroll">

    <h3>
        فقط در دیجی کالا
    </h3>

    <div class="sliderscroll_content">

        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this);"></span>
        </div>
        <div class="sliderscroll_main">
            <ul>

                <?php

                $onlyclicksite=$data['onlyclicksite'];
                foreach ($onlyclicksite as $row){
                ?>

                <li>
                    <a>

                        <img style="width: 150px;" src="public/images/products/<?= $row['id']; ?>/product_220.jpg">

                        <img src="public/images/exclusive-blue.png">

                        <p class="yekan fontsm">
<?= $row['title']; ?>
                        </p>

                        <p class="yekan price">
                            <?= $row['price']; ?>
                        </p>

                    </a>
                </li>

                <?php } ?>

            </ul>

        </div>

        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this);"></span>
        </div>

    </div>

</div>


<script>

    function sliderscroll(direction, tag) {

        var span_tag = $(tag);
        var sliderScrollTag = span_tag.parents('.sliderscroll');
        var sliderScrollUl = sliderScrollTag.find('.sliderscroll_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var sliderScrollItemsNumbers = sliderScrollItems.length;
        var slideScrollNumbers = Math.ceil(sliderScrollItemsNumbers / 5);
        var maxNegativeMargin = -(slideScrollNumbers - 1) * 1090;
        sliderScrollUl.css('width', sliderScrollItemsNumbers * 218);

        var marginRightnew;
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);

        if (direction == 'left') {
            marginRightnew = marginRightOld - 1090;
        }
        if (direction == 'right') {
            marginRightnew = marginRightOld + 1090;
        }

        if (marginRightnew < maxNegativeMargin) {
            marginRightnew = 0;
        }
        if (marginRightnew > 0) {
            marginRightnew = maxNegativeMargin;
        }

        sliderScrollUl.animate({'marginRight': marginRightnew}, 1000);

    }

    $('.next').click(function () {
        sliderscroll('left');
    });

    $('.prev').click(function () {
        sliderscroll('right');
    });


</script>