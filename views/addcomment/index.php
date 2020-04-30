<script src="public/slider/jquery-ui.min.js"></script>
<script src="public/slider/slider.js"></script>
<link href="public/slider/style.css" rel="stylesheet">

<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
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
        cursor: pointer;
    }

    #main > form > .right {
        width: 350px;
        float: right;

    }

    #main > form > .left {
        width: 815px;
        float: left;
    }

    h4 {
        font-size: 13pt;
        color: #6c4042;
        font-family: yekan;
    }

    .left .right {
        width: 350px;
        float: right;
    }

    .left .left {
        width: 350px;
        float: right;
        margin-right: 20px;
    }

    .row2 {
        width: 100%;
        float: right;
        margin-bottom: 40px;
    }

    p {
        font-family: yekan;

    }

    .row2 p {
        font-size: 10.5pt;
    }


</style>

<div id="main" style="width: 1200px;margin:10px auto;padding: 5px;background: #fff;">
    <?php
    $productInfo = $data['productInfo'];

    ?>

    <form method="post" action="addcomment/savecomment/<?= $productInfo['id'] ?>">

        <div class="right">
            <img src="public/images/products/<?= $productInfo['id'] ?>/product_350.jpg">
        </div>

        <div class="left">
            <h4>
                امتیاز شما به این محصول
            </h4>

            <?php

            $commentInfo = $data['commentInfo'];
            $comment_result = unserialize($commentInfo['param']);


            $params = $data['params'];
            $number = sizeof($params);
            $right = ceil($number / 2);
            $left = $number - $right;

            $params_right = array_slice($params, 0, $right);
            $params_left = array_slice($params, $right, $left);


            ?>

            <div class="right">

                <?php
                foreach ($params_right as $row) {
                    ?>
                    <div class="row2">
                        <p>
                            <?= $row['title'] ?>
                        </p>
                        <input data-val="<?= $comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>
                <?php } ?>


            </div>

            <div class="left">

                <?php
                foreach ($params_left as $row) {
                    ?>
                    <div class="row2">
                        <p>
                            <?= $row['title'] ?>
                        </p>
                        <input data-val="<?= $comment_result[$row['id']] ?>" name="param<?= $row['id'] ?>"
                               value="<?= $comment_result[$row['id']] ?>" type="hidden" class="flat-slider">
                    </div>
                <?php } ?>

            </div>

        </div>

        <style>

            input {
                width: 300px;
                height: 23px;
                border: 1px solid #ccc;
                font-family: yekan;
                font-size: 10.5pt;
            }

            .comment {
                float: right;
                width: 100%;
                padding: 0 20px;
            }

            .comment .row2 {
                margin-top: 15px;
            }

            .comment textarea {
                width: 400px;
                height: 200px;
                border: 1px solid #ccc;
            }

        </style>


        <div class="comment">

            <h4>
                دیگران را با نوشتن نقد، بررسی و نظرات خود، برای انتخاب این محصول راهنمایی کنید.
            </h4>

            <div class="row2">
                <input name="title" value="<?= $commentInfo['title'] ?>" placeholder="عنوان نقد و بررسی">
            </div>
            <div class="row2">
                <input name="posotive" value="<?= $commentInfo['posotive'] ?>" placeholder="نقاط قوت">
            </div>
            <div class="row2">
                <input name="negative" value="<?= $commentInfo['negative'] ?>" placeholder="نقاط ضعف">
            </div>

            <div class="row2">
                <textarea name="comment"><?= $commentInfo['matn'] ?></textarea>
            </div>
            <div class="row2">
            <span class="btn_green" onclick="submitForm()">
                ثبت نظر
            </span>
            </div>

        </div>

    </form>

</div>

<script>

    function submitForm() {
        $('form').submit();
    }

    $('.flat-slider').flatslider({
        min: 1,
        max: 5,
        step: 1,
        value: 3,
        range: 'min'
    });
</script>






































