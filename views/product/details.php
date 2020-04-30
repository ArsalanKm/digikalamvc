<script src="public/js/jquery.elevatezoom.js"></script>

<style>
    #details {
        float: right;
        margin-top: 5px;
        width: 100%;
    }

    #details .right {
        width: 450px;
        float: right;
    }

    #details .share {
        float: right;
        width: 100%;
        padding: 20px 0;
    }

    #details .share i {
        background: url(public/images/slices.png) no-repeat;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px;
    }

    #details .gallery {
        float: right;
        width: 100%;
        text-align: center;
    }

    #details .gallery ul {
        float: right;
        width: 100%;
        padding: 0;
        margin-top: 20px;
    }

    #details .gallery ul li {
        border: 1px solid #eee;
        float: right;
        height: 71px;
        margin-right: 6px;
        padding-top: 10px;
        text-align: center;
        width: 80px;
        cursor: pointer;

    }

    .senoghte {
        background: url(public/images/slices.png) no-repeat -562px -28px;
        width: 35px;
        height: 17px;
        display: block;
        margin-top: 21px;
        margin-right: 20px
    }
</style>


<div id="details" style="background: #fff;box-shadow: 0 1px 3px #eee;">
    <div class="right">
        <div class="share">
            <i class="social" style="background-position: -213px -187px;"></i>
            <i class="addtofavorit" style="background-position: -160px -187px;"></i>
        </div>

        <div class="gallery">

            <img id="zoomproduct" src="public/images/products/<?= $productInfo['id'] ?>/product_350.jpg"
                 data-zoom-image="public/images/products/<?= $productInfo['id'] ?>/product.jpg">

            <script>

                $('#zoomproduct').elevateZoom({
                    'zoomWindowOffetx': -800,
                    'scrollZoom': true,
                    'easing': true,
                    'easingDuration': 5000,
                    'zoomWindowWidth': 400,
                    'lensFadeIn': true,
                    'zoomWindowFadeIn': true,
                    'tint': true,
                    'lensShape': 'round',
                    'tintColour': 'yellow'
                });

            </script>


            <ul>

                <li data-main-image="images/products/gallery/main/gallery1.jpg">
                    <span class="senoghte"></span>
                </li>


                <?php
                $gallery = $data['gallery'];
                foreach ($gallery as $row) {
                    if ($row['threed'] == 0) {
                        ?>


                        <li data-main-image="public/images/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img']; ?>">
                            <img
                                src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img']; ?>"
                                style="width: 60px;">
                        </li>
                    <?php }
                } ?>


            </ul>

        </div>

    </div>
    <style>
        #details .left {
            width: 700px;
            float: left;
            padding: 20px 0;
        }

        #details .left .title {
            font-family: yekan;
            font-size: 15pt;
            background: #eee;
            border-radius: 4px;
            padding: 8px;
        }

        .gray {
            background: rgba(0, 0, 0, 0) url(public/images/stars.png) repeat scroll 0 -9px;
            height: 9px;
            margin: 0 auto;
            position: relative;
            width: 55px;
        }

        .red {
            background: rgba(0, 0, 0, 0) url(public/images/stars.png) repeat scroll 0 0;
            height: 9px;
            left: 0;
            position: absolute;
            top: 0;
            width: 50%;
        }

        .stars {
            float: left;
            margin-left: 15px;
        }

        .rate {
            float: left;
            font-size: 9.5pt;
            font-family: yekan;
            margin-top: 3px;
        }

        #details .left .right {
            width: 415px;
            float: right;
        }

        #details .left .right h4 {
            font-size: 9.8pt;
            font-family: yekan;
        }

        #details .left .left {
            width: 300px;
            float: left;
        }

        #details .colors {
            float: right;
            margin-bottom: 13px;
            padding: 0;
            width: 100%;
        }

        #details .colors li {
            width: 46px;
            height: 28px;
            float: right;
            margin-left: 6px;
            border: 1px solid #ccc;
            background: #eee;
            font-size: 9pt;
            font-family: yekan;
            padding-right: 32px;
            position: relative;
            cursor: pointer;

        }

        #details .colors li .circle {

            border-radius: 50%;
            display: block;
            height: 17px;
            position: absolute;
            right: 6px;
            top: 5px;
            width: 17px;
        }

        #details .colors li .circle.active::after {

            content: " ";
            width: 10px;
            height: 10px;
            position: absolute;
            right: 4px;
            top: 4px;
            display: block;
            background: url(public/images/slices.png) no-repeat -169px -83px;

        }

    </style>

    <div class="left">
        <div class="title">
            <?= $productInfo['title']; ?>
            <div class="stars textcenter">
                <div class="gray">
                    <div class="red"></div>
                </div>
                    <span class="rate">
                    4
                    رای
                    از
                    85
                    رای
                </span>
            </div>


        </div>
        <div class="right">

            <h4>انتخاب رنگ</h4>


            <ul class="colors">
                <?php
                $all_colors = $productInfo['all_colors'];

                foreach ($all_colors as $color) {
                    ?>
                    <li>
                        <span data-id="<?= $color['id']; ?>" class="circle" style="background: <?= $color['hex']; ?>;"></span>
                        <?= $color['title']; ?>
                    </li>
                <?php } ?>

            </ul>


            <style>
                #selectlist {
                    width: 390px;
                    height: 37px;
                    border: 1px solid #ccc;
                    background: #eee;
                    position: relative;
                    text-align: center;
                    cursor: pointer;
                }

                #selectlist::before {
                    content: " ";
                    width: 23px;
                    height: 23px;
                    display: block;
                    position: absolute;
                    right: 3px;
                    top: 9px;
                    background: url(public/images/slices.png) no-repeat -138px -79px;
                }

                #selectlist::after {
                    content: " ";
                    width: 22px;
                    height: 17px;
                    display: block;
                    position: absolute;
                    left: 3px;
                    top: 13px;
                    background: url(public/images/slices.png) no-repeat -31px -461px;
                }

                #selectlist span {
                    font-size: 9.7pt;
                    line-height: 36px;
                }

                #selectlist ul {
                    padding: 0;
                    box-shadow: 0 2px 2px #cacaca;
                    display: none;
                    background: #fff;

                }

                #selectlist ul li {
                    font-family: yekan;
                    font-size: 10pt;
                    padding: 2px 5px;

                }

                #selectlist ul li:hover {
                    background: #f9f9ff;

                }


            </style>

            <h4>انتخاب گارانتی</h4>

            <div id="selectlist">

                    <span class="yekan zamanattitle">
انتخاب کنید
                    </span>

                <ul>
                    <?php
                    $all_garantee = $productInfo['all_garantee'];

                    foreach ($all_garantee as $garantee) {
                        ?>
                        <li data-id="<?= $garantee['id']; ?>"><?= $garantee['title']; ?></li>
                    <?php } ?>


                </ul>

            </div>

            <style>
                #price {
                    float: right;
                    width: 100%;
                    margin-top: 40px;
                }

                #price .discount {
                    display: block;
                    float: left;
                    font-family: yekan;
                    font-size: 9pt;
                    height: 22px;
                    margin-left: 100px;
                    margin-top: 5px;
                    width: 135px;
                }

                .discount_right {
                    width: 50px;
                    height: 100%;
                    float: right;
                    display: block;
                    background: red;
                    color: #fff;
                    text-align: center;
                }

                .discount_left {
                    width: 85px;
                    height: 100%;
                    float: right;
                    display: block;
                    background: #ff5484;
                    color: #fff;
                    text-align: center;
                }
            </style>


            <div id="price">

                    <span class="yekan" style="font-size: 9pt;">
                        قیمت:
                    </span>
                    <span class="yekan" style="font-size:11pt;text-decoration: line-through;">
<?= $productInfo['price']; ?>
                    </span>
                     <span class="yekan" style="font-size: 9pt;">
تومان
                     </span>

                    <span class="discount">
                    <span class="discount_right">
                        تخفیف
                    </span>
                    <span class="discount_left">
                        <?= $productInfo['price_discount']; ?>
                        تومان
                    </span>
                    </span>


            </div>

            <style>
                #priceforyou {
                    float: right;
                    width: 100%;
                    margin-top: 30px;

                }

                #compare {
                    float: right;
                    width: 100%;
                    margin-top: 30px;
                }

                .compare_btn {
                    width: 155px;
                    height: 40px;
                    background: #ccc;
                    border-radius: 4px;
                    float: right;
                    display: block;
                    font-size: 12.4pt;
                    color: #fff;
                    text-align: center;
                    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                }

                .addtocart_btn {
                    width: 210px;
                    height: 40px;
                    background: green;
                    border-radius: 4px;
                    float: right;
                    display: block;
                    margin-right: 7px;
                    font-size: 12.4pt;
                    color: #fff;
                    overflow: hidden;
                    text-align: center;
                    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.15);
                }

                .addtocart_btn i {
                    background: #2ed017 url("public/images/slices.png") no-repeat scroll -153px -412px;
                    display: block;
                    float: right;
                    height: 100%;
                    width: 40px;
                }

            </style>
            <div id="priceforyou">
                    <span class="yekan" style="font-size: 12.5pt;">
                        قیمت برای شما:
                    </span>
                    <span class="yekan" style="font-size: 13.5pt;color:#0f0;">
  <?= $productInfo['price_total']; ?>
                    </span>
                    <span class="yekan" style="font-size: 9pt;">
تومان
                    </span>
            </div>

            <div id="compare">
                    <!--<span class="yekan compare_btn">
                        مقایسه کن
                    </span>-->
                    <span style="cursor: pointer;" class="yekan addtocart_btn" onclick="addToBasket('<?= $productInfo['id'] ?>')">
                        <i></i>
                        افزودن به سبد
                    </span>

            </div>

            <script>

                var garantee_selected='';

                function addToBasket(productId) {

                    var color=$('.colors').find('.circle.active').attr('data-id');
                    console.log(garantee_selected);
                    var url = '<?= URL ?>product/addtobasket/<?= $productInfo['id'] ?>/'+color+'/'+garantee_selected;
                    var data = {};

                    $.post(url, data, function (msg) {

                        alert('با موفقیت افزوده شد');
                        $('#basketTotal').html(msg);
                    });

                }
            </script>


        </div>

        <div class="left">

        </div>


        <div class="horizental_row"></div>


        <style>


            .horizental_row {
                background: #ccc;
                float: right;
                height: 1px;
                margin: 15px;
                width: 86%;
            }

            #sercices-feature {
                width: 695px;
                background: #fff;
                height: 76px;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.19);
                border-radius: 4px;
                margin: 7px 0;
                overflow: hidden;
            }

            #sercices-feature ul {
                padding: 0;
                height: 100%;
            }

            #sercices-feature ul li {
                width: 139px;
                float: right;
                height: 100%;
            }

            #sercices-feature ul li a {
                display: block;
                font-size: 10pt;
                height: 100%;
                line-height: 72px;
                padding: 0 10px;
            }

            #sercices-feature ul li a i {
                display: inline-block;
                float: right;
                height: 24px;
                margin-left: 8px;
                margin-top: 22px;
                width: 24px;
                background: url(public/images/slices.png) no-repeat;
            }
        </style>

        <div id="sercices-feature">
            <ul>
                <li>
                    <a class="yekan">

                        <i style="background-position: -210px -473px;"></i>

                        7 روز ضمانت بازگشت

                    </a>
                </li>
                <li>
                    <a class="yekan">

                        <i style="background-position: -263px -473px;"></i>

                        پرداخت در محل
                    </a>
                </li>
                <li>
                    <a class="yekan">

                        <i style="background-position: -158px -473px;"></i>

                        ضمانت اصل بودن کالا
                    </a>
                </li>
                <li>
                    <a class="yekan">

                        <i style="background-position: -320px -473px;width: 30px;"></i>

                        تحویل اکسپرس
                    </a>
                </li>

                <li>
                    <a class="yekan">

                        <i style="background-position: -103px -473px;"></i>

                        تضمین بهترین قیمت
                    </a>
                </li>

            </ul>
        </div>


    </div>
</div>


<script>

    $('#selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

    $('#selectlist ul li').click(function () {

        garantee_selected=$(this).attr('data-id');

        var txt = $(this).text();
        $('#selectlist .zamanattitle').text(txt);
    });


    $('.colors li').click(function () {

        $('.circle').removeClass('active');
        $('.circle', this).addClass('active');

    });
</script>