<script src="public/ckeditor/ckeditor.js"></script>

<?php
require('views/admin/layout.php');

$productInfo = $data['productInfo'];

$edit = 0;

if (isset($productInfo['title'])) {
    $edit = 1;
}


?>
<div class="left">

    <p class="title">
        <?php if ($edit == 0) { ?>
            ایجاد محصول جدید
        <?php } else { ?>
            ویرایش محصول
        <?php } ?>

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
                width: 200px;
                height: 24px;
                border: 1px solid #eee;
            }

            select {
                font-family: yekan;
                height: 32px;
                line-height: 30px;
                padding: 2px;

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

    <form action="adminproduct/addproduct/<?= @$productInfo['id']; ?>" method="post" enctype="multipart/form-data">

        <div class="row">

        <span class="span_title">
عنوان محصول:
        </span>
            <input type="text" name="title" value="<?= @$productInfo['title']; ?>">

        </div>
        <div class="row">

        <span class="span_title">
دسته والد:
        </span>

            <?php

            $category = $data['category'];
            $categoryId = @$productInfo['cat'];


            ?>
            <select name="categoryId" autocomplete="off">

                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($category as $row) {

                    if ($row['id'] == $categoryId) {
                        $selected = 'selected';
                    } else {
                        $selected = '';
                    }

                    ?>

                    <option value="<?= $row['id']; ?>" <?= $selected; ?>>
                        <?= $row['title'] ?>
                    </option>

                <?php } ?>
            </select>

        </div>

        <div class="row">

        <span class="span_title">
قیمت:
        </span>
            <input type="text" name="price" value="<?= @$productInfo['price']; ?>">

        </div>
        <div class="row">

        <span class="span_title">
تصویر:
        </span>
            <input type="file" name="image" value="">

            <?php if (isset($productInfo['title'])) { ?>
                <div style="width: 220px;height: 220px;display: inline-block;float: left;
                    background:url(public/images/products/<?= $productInfo['id'] ?>/product_220.jpg)"></div>
            <?php } ?>

        </div>
        <div class="row">

        <span class="span_title">
معرفی اجمالی:
        </span>
            <textarea class="editor1" id="editor1" name="introduction"><?= @$productInfo['introduction']; ?></textarea>

        </div>

        <script>

            CKEDITOR.replace('editor1', {});

        </script>


        <div class="row">

        <span class="span_title">
تعداد موجود:
        </span>
            <input type="text" name="tedad_mojood" value="<?= @$productInfo['tedad_mojood']; ?>">

        </div>

        <div class="row">

        <span class="span_title">
میزان تخفیف(%):
        </span>
            <input type="text" name="discount" value="<?= @$productInfo['discount']; ?>">

        </div>


        <div class="row">

        <span class="span_title">
انتخاب رنگ:
        </span>

            <?php

            $color = $data['color'];


            ?>
            <select autocomplete="off">

                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($color as $row) {

                    ?>
                    <option data-title="<?php echo $row['title']; ?>"
                            onclick=addColor(this,"<?php echo $row['id']; ?>","<?php echo $row['hex']; ?>")
                            value="<?= $row['id']; ?>">
                        <?= $row['title'] ?>
                    </option>

                <?php } ?>


            </select>


            <?php
            $colorsInfo = $productInfo['colorsInfo'];
            $colorsInfo = array_filter($colorsInfo);
            foreach ($colorsInfo as $row) {
                ?>
                <span style="background:<?= $row['hex']; ?>" class="span_item"><input type="hidden"
                                                                                      value="<?= $row['id']; ?>"
                                                                                      name="color[]"><?= $row['title']; ?>
                    <img src="public/images/close-icon.gif" onclick="removeItem(this);"></span>

            <?php } ?>


        </div>


        <div class="row">

        <span class="span_title">
انتخاب گارانتی
        :
        </span>

            <?php

            $garantee = $data['garantee'];

            ?>
            <select autocomplete="off">

                <option>
                    انتخاب کنید
                </option>
                <?php
                foreach ($garantee as $row) {

                    ?>
                    <option data-title="<?php echo $row['title']; ?>"
                            onclick=addGarantee(this,'<?php echo $row['id']; ?>')
                            value="<?= $row['id']; ?>">
                        <?= $row['title'] ?>
                    </option>

                <?php } ?>
            </select>

            <?php
            $garanteesInfo = $productInfo['garanteesInfo'];
            //print_r($colorsInfo);
            $garanteesInfo = array_filter($garanteesInfo);
            foreach ($garanteesInfo as $row) {
                ?>

                <span class="span_item"><input type="hidden" value="<?= $row['id'] ?>"
                                               name="garantee[]"><?= $row['title'] ?><img
                        src="public/images/close-icon.gif" onclick="removeItem(this);"></span>

            <?php } ?>


        </div>


        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>


<script>
    function addColor(tag, colorId, colorCode) {

        var optionTag = $(tag);
        var colorName = optionTag.attr('data-title');
        var spanTag = '<span style="background:' + colorCode + '" class="span_item"><input type="hidden" value="' + colorId + '" name="color[]">' + colorName + '<img src="public/images/close-icon.gif" onclick="removeItem(this);"></span>';
        var divRow = optionTag.parents('.row');
        divRow.append(spanTag);

    }

    function addGarantee(tag, garanteeId) {

        var optionTag = $(tag);
        var garanteeName = optionTag.attr('data-title');
        var spanTag = '<span  class="span_item"><input type="hidden" value="' + garanteeId + '" name="garantee[]">' + garanteeName + '<img src="public/images/close-icon.gif" onclick="removeItem(this);"></span>';
        var divRow = optionTag.parents('.row');
        divRow.append(spanTag);

    }

    function removeItem(tag) {
        var removeTag = $(tag);
        var spanItem = removeTag.parents('.span_item');
        spanItem.remove();

    }
</script>











