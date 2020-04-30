<?php
require('views/admin/layout.php');

$attr = $data['attr'];
$productInfo = $data['productInfo'];


?>
<div class="left">

    <p class="title">

        ویژگی های محصول:

        <span style="color: red;">
            (
            <?= $productInfo['title']; ?>
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

            select {
                font-family: yekan;
                height: 32px;
                line-height: 30px;
                padding: 2px;
                width: 200px;

            }

            option {
                padding: 2px;
                font-family: yekan;
                font-size: 10pt;
            }

            textarea {
                width: 500px;
                border: 1px solid #ccc;
                height: 250px;
                vertical-align: top;
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

            .span_item img {
                left: 0;
                position: absolute;
                top: 1px;
                width: 15px;
                cursor: pointer;
            }
        </style>

    <form action="" method="post">

        <input type="hidden" name="submited">

        <?php

        foreach ($attr as $row) {
            ?>

            <div class="row">

        <span class="span_title">
<?= $row['title']; ?>
        </span>

                <!--<input type="text" name="x<? /*= $row['id'] */ ?>" value="<? /*= $row['value'] */ ?>">-->

                <select name="x<?= $row['id']  ?>"  autocomplete="off">
                    <?php
                    $values = $row['values'];
                    foreach ($values as $val) {

                        if ($row['idval'] == $val['id']) {
                            $selected = 'selected';
                        } else {
                            $selected = '';
                        }
                        ?>

                        <option value="<?= $val['id']; ?>" <?php if ($selected == 'selected') {
                            echo 'selected="selected" ';
                        } ?>>
                            <?= $val['val']; ?>
                        </option>

                    <?php } ?>
                </select>

                <a style="font-size: 10pt;color: blue;" href="admincategory/attrval/<?= $row['id'] ?>" class="span_title">
                    مشاهده مقادیر پیش فرض
                </a>

                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">

            </div>


        <?php } ?>


        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>












