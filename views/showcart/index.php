<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    .head {

    }

    .head h4 {
        font-size: 12.5pt;
        font-family: yekan;
        margin-top: 5px;
        padding-right: 10px;
        float: right;
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
    }

    .head .btn_green {
        float: left;
        margin-left: 5px;
        margin-top: 8px;
    }

    .content table {
        width: 100%;
        font-family: yekan;
        font-size: 11pt;
        float: right;
        margin-top: 10px;
    }

    .content table td {
        border-left: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding: 3px;
    }

    .content table tr td:not(:first-child) {
        text-align: center;
    }

    .content table tr td:first-child {
        border-right: 1px solid #eee;
    }

    .content table tr:first-child {
        background: #f7f9fa;
    }

    .content table tr:first-child td {
        text-align: center;
        padding: 10px;
        border-top: 1px solid #eee;
    }

    .content table .right {
        float: right;
    }

    .content table .left {
        float: right;
        margin-right: 8px;
    }

    .content table .left p {
        margin: 2px 0;
    }

    .content table .right img {
        max-width: 135px;
        max-height: 135px;
    }

</style>

<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">


    <div class="head">
        <h4>
            سبد خرید شما در دیجی کالا
        </h4>
        <a class="btn_green" href="showcart1">
خرید خود را نهایی کنید
        </a>
    </div>


    <style>
        .selectlist {
            width: 100px;
            height: 37px;
            border: 1px solid #ccc;
            background: #eee;
            position: relative;
            text-align: center;
            cursor: pointer;
            margin: auto;
        }

        .selectlist::after {
            content: " ";
            width: 22px;
            height: 17px;
            display: block;
            position: absolute;
            left: 3px;
            top: 13px;
            background: url(public/images/slices.png) no-repeat -31px -461px;
        }

        .selectlist span {
            font-size: 9.7pt;
            line-height: 36px;
        }

        .selectlist ul {
            padding: 0;
            box-shadow: 0 2px 2px #cacaca;
            display: none;
            background: #fff;
            position: relative;
            z-index: 2;

        }

        .selectlist ul li {
            font-family: yekan;
            font-size: 10pt;
            padding: 2px 5px;

        }

        .selectlist ul li:hover {
            background: #f9f9ff;

        }

        .content table .price {
            font-size: 12pt;
        }

        .content table .tuman {
            font-size: 10pt;
        }

        .content table .remove_td {
            background: #ff829f;
        }

        .content table .remove_icon {
            width: 15px;
            height: 15px;
            display: block;
            background: url(public/images/slices.png) no-repeat scroll -813px -510px;
            margin: auto;
        }

        .remove_td {
            cursor: pointer;
        }

    </style>

    <div class="content">
        <table cellspacing="0">
            <thead>
            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td style="border-left: 0;">قیمت کل</td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <?php
            $basket = $data['basket'];
            foreach ($basket as $row) {
                ?>

                <tr>
                    <td>
                        <div class="right">
                            <img src="public/images/products/<?= $row['id'] ?>/product_220.jpg">
                        </div>
                        <div class="left">
                            <p>
                                <?= $row['title']; ?>
                            </p>
                            <p>
<?= $row['colorTitle'] ?>
                            </p>
                            <p>
                                <?= $row['garanteeTitle'] ?>
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="selectlist">

                    <span class="yekan zamanattitle">
<?= $row['tedad'] ?>

                    </span>

                            <ul>
                                <?php for ($i = 1; $i < 31; $i++) { ?>

                                    <li onclick="updateBasket(<?= $i ?>,<?= $row['basketRow'] ?>)"><?= $i ?></li>
                                    
                                <?php } ?>
                            </ul>

                        </div>

                    </td>
                    <td>
                    <span class="price">
                        <?= $row['price']; ?>
                    </span>
                        <span class="tuman">تومان</span>
                    </td>
                    <td>
                    <span class="price">
                        <?= $row['price'] * $row['tedad']; ?>
                    </span>
                        <span class="tuman">تومان</span>
                    </td>
                    <td style="cursor: pointer;" class="remove_td" onclick="removeBasket(<?= $row['basketRow'] ?>)">
                        <i class="remove_icon"></i>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>

    <style>
        #final_price {
            width: 600px;
            float: left;
            font-family: yekan;
            margin-top: 50px;
            border: 1px solid greenyellow;
            padding: 10px;
        }

        #totlal_price {

            border-bottom: 1px solid greenyellow;
            float: right;
            padding: 6px 2px;
            width: 100%;
        }

        .totlal_price1 {
            float: right;
            color: #66585b;
            font-size: 10pt;
        }

        .totlal_price2 {
            float: right;
            color: #66585b;
            font-size: 12pt;
            margin-right: 395px;
        }

        .totlal_price3 {

            float: right;
            color: #66585b;
            font-size: 9pt;
            margin-right: 10px;
            margin-top: 3px;
        }

        #pardakht_price {

            float: right;
            padding: 6px 2px;
            width: 100%;

        }
    </style>

    <div id="final_price">
        <div id="totlal_price">
            <span class="totlal_price1">
                جمع کل خرید شما :
            </span>
            <span class="totlal_price2">
                <?= $data['priceTotalall']; ?>
            </span>
            <span class="totlal_price3">
                تومان
            </span>
        </div>
        <div id="pardakht_price">

            <span class="totlal_price1">
مبلغ قابل پرداخت:
            </span>
            <span class="totlal_price2">
                 <?= $data['priceTotalall']; ?>
            </span>
            <span class="totlal_price3">
                تومان
            </span>
        </div>


    </div>


    <div style="float: left;width: 100%;margin-top: 50px;">
        <a href="showcart1" class="btn_green" style="float: left;">
خرید خود را نهایی کنید
        </a>
    </div>

</div>


<script>


    function updateBasket(tedad,basketRow) {

        var url='showcart/updatebasket/';
        var data={'basketRow':basketRow,'tedad':tedad};
        $.post(url,data,function (msg) {

            var basket = msg[0];
            var priceTotalall = msg[1];
            createBasketList(basket,priceTotalall);
            
        },'json')
    }


    function createBasketList(basket,priceTotalall) {


        $('table tbody tr').remove();

        $.each(basket, function (index, value) {

            var id=value['id'];
            var title=value['title'];
            var tedad=value['tedad'];
            var price=value['price'];
            var basketRow=value['basketRow'];
            var color=value['colorTitle'];
            var garantee=value['garanteeTitle'];

            var trTag = '<tr><td><div class="right"><img src="public/images/products/' +id+ '/product_220.jpg"></div><div class="left"><p>' + title + '</p><p>'+color+'</p><p>'+garantee+'</p></div></td><td><div class="selectlist"><span class="yekan zamanattitle">' + tedad + '</span><ul><?php for ($i = 1; $i < 31; $i++) { ?><li onclick="updateBasket(<?= $i ?>,'+basketRow+')"><?= $i ?></li><?php } ?></ul></div></td><td><span class="price">' + price + '</span><span class="tuman">تومان</span></td><td><span class="price">' + price*tedad + '</span><span class="tuman">تومان</span></td><td class="remove_td" onclick="removeBasket(' + basketRow + ')"><i class="remove_icon"></i></td></tr>';

            $('table tbody').append(trTag);

        });

        $('.totlal_price2').text(priceTotalall);


        $('.selectlist').click(function () {
            var ulTag = $('ul', this);
            ulTag.slideToggle(200);
        });

    }

    function removeBasket(productId) {

        var url = 'showcart/deletebasket/' + productId;
        var data = {};
        $.post(url, data, function (msg) {

            var basket = msg[0];
            var priceTotalall = msg[1];
            createBasketList(basket,priceTotalall);

        }, 'json');

    }

    $('.selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });



</script>




















