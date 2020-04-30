<style>
    #offer {
        height: 60px;
        background: #fff5f5 url("public/images/amazing-offer.png") no-repeat scroll 97% center;
        position: relative;

    }

    .flipTimer {
        position: absolute;
        top: -19px;
        left: -161px;
        transform: scale(.3);
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important;
    }

    #offer .discount {
        display: block;
        height: 28px;
        left: 200px;
        position: absolute;
        top: 16px;
        width: 180px;
        border-radius: 3px;
        overflow: hidden;
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

    #offer .discount .right {
        width: 105px;
        height: 100%;
        background: red;
        float: right;
        display: block;
    }

    #offer .discount .left {
        width: 75px;
        height: 100%;
        background: #e54949;
        float: right;
        display: block;
    }

    #offer .discount .right .number {
        color: #fff;
        font-size: 16pt;
        line-height: 20px;
        padding-right: 10px;
    }

    #offer .discount .right .tuman {
        color: #fff;
        display: inline-block;
        font-size: 9pt;
        height: 14px;
        line-height: 9px;
        margin-right: 7px;
        position: relative;
        top: -3px;
        width: 40px;
    }

    #offer .left span {
        color: #fff;
        font-size: 10pt;
        left: -5px;
        padding-right: 11px;
        position: relative;
        top: -3px;
    }

</style>


<div id="offer">

<span class="discount">
<span class="right yekan">

<span class="number"><?= $productInfo['price_discount']; ?></span>

                         <span class="tuman">
تومان
            </span>

              </span>
                <span class="left yekan">
<span>
 تخفیف
</span>
   </span>
     </span>

    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>

</div>

<script>
    $('.flipTimer').flipTimer({

        direction: 'down',
        date: '<?= $productInfo['date_special']; ?>',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $(".slider2_finished").fadeIn(200);
        }
    });
</script>