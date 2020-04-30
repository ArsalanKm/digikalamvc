<div id="main" style="width: 1200px;margin:10px auto;">

    <div id="banner_top" style="width: 100%;height: 138px;">
        <img style="box-shadow: 0 4px 5px #eee;border-radius: 4px;width: 100%;" src="public/images/banner.jpg">
    </div>
    <?php
    require('sidebar_right.php');
    ?>

    <div id="content" style="width: 890px;float: left;margin-top: 10px;">

        <?php

        require('slider1.php');
        require('slider2.php');
        require('onlyclicksite.php');
        require('direct_access.php');
        require('most_viewed.php');
        require('most_saled.php');
        require('last_products.php');

        ?>

    </div>

</div>




<script>


    function sliderscroll(direction, tag) {

        var span_tag = $(tag);
        var sliderScrollTag = span_tag.parents('.sliderscroll');
        var sliderScrollUl = sliderScrollTag.find('.sliderscroll_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var sliderScrollItemsNumbers = sliderScrollItems.length;
        var slideScrollNumbers = Math.ceil(sliderScrollItemsNumbers / 4);
        var maxNegativeMargin = -(slideScrollNumbers - 1) * 780;
        sliderScrollUl.css('width', sliderScrollItemsNumbers * 195);

        var marginRightnew;
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);

        if (direction == 'left') {
            marginRightnew = marginRightOld - 780;
        }
        if (direction == 'right') {
            marginRightnew = marginRightOld + 780;
        }

        if (marginRightnew < maxNegativeMargin) {
            marginRightnew = 0;
        }
        if (marginRightnew > 0) {
            marginRightnew = maxNegativeMargin;
        }

        sliderScrollUl.animate({'marginRight': marginRightnew}, 1000);

    }


</script>

