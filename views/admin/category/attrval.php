<?php
require('views/admin/layout.php');

$attrval = $data['attrval'];
$attrInfo=$data['attrInfo'];

?>
<div class="left">

    <p class="title">

        مقادیر پیش فرض ویژگی
        <span style="color: red;">
            (
<?= $attrInfo['title'] ?>
            )
        </span>

        <style>
            .row {
                width: 100%;
                float: right;
                margin-top: 5px;
            }

            .span_title {
                display: inline-block;
                width: 150px;
                font-size: 10pt;
            }

            input {
                width: 400px;
                height: 24px;
                border: 1px solid #eee;
            }

            .span_item {
                background: #bc0084 none repeat scroll 0 0;
                color: #fff;
                display: inline-block;
                font-size: 10pt;
                height: 27px;
                padding: 2px 14px;
                position: relative;
                text-align: center;
                margin-right: 5px;
            }


        </style>

    <form action="admincategory/attrval/<?= $attrInfo['id'] ?>" method="post">

        <input type="hidden" name="submited">


        <?php

        foreach ($attrval as $val) {

            ?>

            <div class="row">

        <span class="span_title">
مقدار ویژگی:
        </span>
                <input name="attrval-<?= $val['id'] ?>" type="text" value="<?= $val['val'] ?>">


            </div>
        <?php } ?>

        <?php

        $size = sizeof($attrval);

        for ($i = 1; $i <= 10 - $size; $i++) {

            ?>

            <div class="row">

        <span class="span_title">
مقدار ویژگی:
        </span>
                <input name="attrvalnew[]" type="text" value="">


            </div>
        <?php } ?>


        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>












