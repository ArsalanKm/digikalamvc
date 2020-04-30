<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    .box {
        font-family: yekan;
    }

    .box .header {
        height: 40px;
        background: #3c3c3c;
        color: #fff;
        font-size: 11pt;
        padding-right: 10px;
        line-height: 35px;

    }

    .box .content {
        background: #fff;
    }

    .box .content table {
        width: 100%;
    }

    .box .content table td {
        padding: 5px;
    }

    .box .content table td .title {
        font-size: 10.5pt;
        color: darkblue;
    }

    .box .content table td .value {
        font-size: 10pt;
    }

</style>

<div id="main"
     style="width: 1200px;margin:10px auto;padding:10px;background:#fff;border-radius:5px;box-shadow:0 0 4px #fff;">


    <?php
    require('user_profile.php');
    require('gozaresh.php');
    require('tab.php');
    ?>


</div>

<script>

    function showDetailsTr(tag) {

        var imgtag = $(tag);
        var src = imgtag.attr('src');

        if (src == 'public/images/orderdetailsclose.png') {
            imgtag.attr('src', 'public/images/orderdetailsopen.png');
        } else {
            imgtag.attr('src', 'public/images/orderdetailsclose.png');
        }
        var parentTr = imgtag.parents('tr');
        parentTr.next().fadeToggle(100);

    }

    $('#tab li').click(function () {

        $('#tab li').removeClass('active');
        $(this).addClass('active');
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('#tabchilds section').eq(index).fadeIn(200);


    });

</script>
























