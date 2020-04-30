<style>
    #tab {
        width: 1200px;
        float: right;
        margin-top: 20px;
        background: #f5f6f7;
        padding: 0;
        border-top: 3px solid black;
    }

    #tab li {

        float: right;
        padding: 15px;
        font-size: 11.5pt;
        font-family: yekan;
        border-left: 1px solid #eee;
        cursor: pointer;
        position: relative;
        padding-right: 37px;

    }

    #tab li::before {

        background: url(public/images/slices.png) no-repeat;
        width: 30px;
        height: 26px;
        content: " ";
        display: block;
        position: absolute;
        right: 3px;
        top: 17px;

    }

    #tab .naghd::before {
        background-position: -105px -266px;
    }

    #tab .fanni::before {
        background-position: -315px -266px;
    }

    #tab .nazar::before {
        background-position: -261px -266px;
    }

    #tab .soal::before {
        background-position: -210px -266px;
    }

    #tab .naghd.active::before {
        background-position: -105px -308px;
    }

    #tab .fanni.active::before {
        background-position: -315px -308px;
    }

    #tab .nazar.active::before {
        background-position: -261px -308px;
    }

    #tab .soal.active::before {
        background-position: -210px -308px;
    }

    #tab li.active {
        color: white;
        background: #3c3c3c;
        border-top: 2px solid blue;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);

    }
</style>

<ul id="tab">
    <li>
        پیغام های من
    </li>
    <li>
        سفارشات من
    </li>
    <li class="active">
        لیست مورد علاقه
    </li>
    <li>
        نقد های من
    </li>
    <li>
        نظرات من
    </li>
    <li>
        دیجی بن های من
    </li>
    <li>
        کارت هدیه های من
    </li>
    <li>
        اطلاع رسانی
    </li>
</ul>

<style>
    #tabchilds {
        width: 1200px;
        float: right;
        background: #fff;

    }

    #tabchilds section {
        width: 100%;
        display: none;
        padding: 10px;
        padding-bottom: 20px;
        font-family: yekan;
        font-size: 10pt;
        float: right;
    }

    #tabchilds section:first-child {
        display: block;
    }

    #tabchilds .item {

        padding: 0 10px;
    }

    #tabchilds .item h4 {

        font-family: yekan;
        font-size: 11.5pt;
        margin: 0;
        position: relative;
        padding: 5px 25px 5px 0;
        line-height: 34px;
        cursor: pointer;
    }

    #tabchilds .item h4::after {

        width: 100%;
        height: 1px;
        background: #eee;
        position: absolute;
        top: 33px;
        left: 0;
        content: " ";
        display: block;
    }

    #tabchilds .item:last-child h4::after {

        top: 37px;

    }

    #tabchilds .item h4 span {
        z-index: 1;
        position: relative;
        background: #fff;
    }

    #tabchilds .item h4 i {

        background: url(images/slices.png) no-repeat -259px -606px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -27px;

    }

    #tabchilds .item h4.active i {

        background: url(public/images/slices.png) no-repeat -207px -606px;

    }

    #tabchilds .item:first-child h4 i {

        background: url(public/images/slices.png) no-repeat -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -26px;
        top: -4px;
    }

    #tabchilds .item:first-child h4.active i {

        background: url(public/images/slices.png) no-repeat -98px -615px;

    }

    #tabchilds .item:last-child h4 span {

        position: relative;
        top: 10px;
    }

    #tabchilds .item:last-child h4 i {

        background: rgba(0, 0, 0, 0) url("public/images/slices.png") no-repeat scroll -313px -615px;
        display: block;
        height: 44px;
        position: absolute;
        right: -27px;
        top: 22px;
        width: 31px;

    }

    #tabchilds .item:last-child h4.active i {

        background: url(public/images/slices.png) no-repeat -207px -606px;

    }

    .itemcontainer {
        margin-right: 20px;
        border-right: 3px solid #f0f1f2;
    }

    .itemcontainer .item .description {
        display: none;
    }

</style>
<style>
    #tabchilds section > table {
        width: 100%;
        position: relative;

        right: -11px;
    }

    #tabchilds section > table tr {
    }

    #tabchilds section > table tr td {
        background: #eeeeee;
        font-family: yekan;
        font-size: 10pt;
        text-align: center;
        border-left: 1px solid #cccccc;
        border-bottom: 1px solid #3c3c3c;

    }

    #tabchilds section > table tr:first-child td {
        background: #3c3c3c
    }

    #tabchilds section > table tr:first-child td {
        margin: 0;
        text-align: center;
        background: #3c3c3c;
        color: white;
        font-family: yekan;
        font-size: 10.7pt;

    }

    #tabchilds .myorders > table .subtable {
        height: 300px;
        background: white;
        box-shadow: 0 0 5px #cccccc;
        padding: 10px;
    }

    #tabchilds .myorders > table .subtable > table {
        width: 100%;
    }

    #tabchilds .myorders > table .subtable > table tr {
        background: white;
    }

    #tabchilds .myorders > table .subtable > table tr:first-child {
        border-right: 1px solid #cccccc;
    }

    #tabchilds .myorders > table .subtable > table tr:first-child {
        background: #eeeeee !important;
        color: black !important;
        font-size: 11pt;
        font-family: yekan;
    }

    h4.title {
        font-family: yekan;
        font-size: 9pt;
        background: #eeeeee;
        font-weight: normal;
        margin: 5px 0 0;
    }

    .details {
        display: none
    }

</style>
<style>
    .order-steps {
        float: right;
        padding-top: 20px;
        padding-right: 90px;
        padding-left: 10px;
        text-align: center;
        position: absolute;
    }

    .order-steps .dashed {
        float: right;
        position: absolute;
        right: 126px;
        top: 63px;
        margin-left: 5px;
        display: block;
    }

    .order-steps .dashed span {
        width: 11px;
        height: 3px;
        display: block;
        float: right;
        background: blue;
        margin-left: 3px;
    }

    .order-steps ul {
        padding: 0;
        float: right;
        width: 1200px;
        height: 200px;
    }

    .order-steps ul li {
        position: relative;
        float: right;
        width: 180px;
        height: 50px;
    }

    .order-steps ul li .circle {
        width: 16px;
        height: 16px;
        display: block;
        border: 3px solid #cccccc;
        position: absolute;
        border-radius: 50%;
        right: 121px;
        top: 34px;
        right: 99px;
        top: 31px;
    }

    .order-steps ul li .title {
        position: absolute;
        border-radius: 50%;
        font-size: 10pt;
        color: #3c3c3c;
        top: 65px;
        right: 102px;
        height: 63px;
        display: block;
        width: 78px;
        top: 45px;
        right: 87px;

    }

    .order-steps ul li .line {
        position: absolute;
        width: 162px;
        height: 2px;
        display: block;
        background: #cccccc;
        right: 142px;
        top: 44px;
        right: 117px;
        top: 42px;
    }

    .order-steps .dashed2 {
        float: right;
        position: absolute;
        top: 64px;
        left: 307px;
        margin-left: -4px;
    }

    .order-steps .dashed2 span {
        width: 11px;
        height: 3px;
        display: block;
        float: right;
        background: blue;
        margin-left: 3px;
    }

    .order-steps ul li.active .circle {
        border: 3px solid #274bff;
        border-radius: 100%;
        position: absolute;
        background: #274bff url("public/images/slices.png") no-repeat -810px -476px;
    }

    .order-steps ul li.active .line {
        position: absolute;
        background: #274bff;

    }

    .order-steps ul li.active .title {
        color: #274bff;

    }
</style>
<div id="tabchilds">

<?php
require ('tab1.php');
require ('tab2.php');
require ('tab3.php');
require ('tab4.php');
require ('tab5.php');
require ('tab6.php');

?>


    <style>
        .favorites ul {
            padding: 10px;
            background: #eeeeee;
            border: 1px dashed #cccccc;
            width: 96%;
            float: right;
            padding-bottom: 22px;
        }

        .favorites ul li {
            width: 280px;
            height: 50px;
            float: right;
            margin-right: 5px;
            cursor: pointer;

        }

        .favorites ul li a {
            display: block;
            height: 100%;
            position: relative;
        }

        .favorites ul li.active a {
            background: white;
            border: 1px solid #cccccc;

        }

        .favorites ul li a:hover {
            background: #ffffff;
            border: 1px solid #cccccc;

        }

        .favorites ul li a span {
            font-family: yekan;
            font-size: 10.5pt;

        }

        .favorites ul li a .edit {

            position: absolute;
            top: 6px;
            right: 261px;
            display: none;

        }
    </style>


    <style>
        #adddigibone {
            padding: 10px;
            background: #eeeeee;
            border: 1px solid #eeeeee;
            position: relative;
            padding-bottom: 30px;

            right: -10px;
        }

        #adddigibone input {
            width: 300px;
            height: 24px;
            border: 1px solid #cccccc;
        }

        #adddigibone span {
            color: white;
            background: #1666e3;
            border-radius: 4px;
            overflow: hidden;
        }

        #x .details .sub {
            box-shadow: 0 0 5px #cccccc;
            padding: 10px;

        }

        #x .details .sub .dettable {
            width: 100%;
        }

        #x .details .sub .dettable tr:first-child td {
            background: gray !important;
            color: #ffffff !important;
        }
    </style>



</div>
<script>
    $('.favorites ul li a ').hover(function () {
        $('.edit', this).fadeIn(200);
    }, function () {
        $('.edit', this).fadeOut(200);
    })
    $('.favorites ul li').click(function () {
        $('.favorites ul li').removeClass('active');
        $(this).toggleClass('active');
    })
</script>
<script>
    function showDetailsTr(tag) {
        var imgtag = $(tag);
        var parentTr = imgtag.parents('tr');
        var src = imgtag.attr('src');
        parentTr.next().fadeToggle(0);
        if (src == 'images/orderdetailsclose.png') {
            imgtag.attr('src', 'public/images/orderdetailsopen.png')
        } else {
            imgtag.attr('src', "public/images/orderdetailsclose.png")
        }
        imgtag.toggleClass('open');

    }
</script>
<script>

    $('#tab li').click(function () {
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
//
        $('#tabchilds section').eq(index).fadeIn(200)
        $('#tab li').removeClass('active');
        $(this).addClass('active');

    });
    $('.itemcontainer .item h4').click(function () {
        var item = $(this).parents('.item');
        $('.description', item).slideToggle(200);
        $(this).toggleClass('active');

    })

</script>
<script>

    $('#selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('#selectlist ul li').click(function () {

        garantee_selected = $(this).attr('data-id');

        var txt = $(this).text();
        $('#selectlist .zamanattitle').text(txt);
    });


    $('.colors li').click(function () {

        $('.circle').removeClass('active');
        $('.circle', this).addClass('active');

    });
</script>
