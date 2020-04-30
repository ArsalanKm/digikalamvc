<script src="public/ckeditor/ckeditor.js"></script>

<?php
require('views/admin/layout.php');

$productInfo = $data['productInfo'];
$naghdInfo=$data['naghdInfo'];

$edit = 0;
if(isset($naghdInfo['title'])){
    $edit=1;
}

?>
<div class="left">

    <p class="title">
        <?php if ($edit == 0) { ?>
افزودن نقد و بررسی
        <?php } else { ?>
ویرایش نقد و بررسی
        <?php } ?>

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

    <form action="adminproduct/addnaghd/<?= @$productInfo['id']; ?>/<?= @$naghdInfo['id']; ?>" method="post">

        <div class="row">

        <span class="span_title">
عنوان نقد و بررسی:
        </span>
            <input type="text" name="title" value="<?= $naghdInfo['title']; ?>">


        </div>


        <div class="row">

        <span class="span_title">
توضیحات:
        </span>
            <textarea class="editor1" id="editor1" name="description"><?= $naghdInfo['description']; ?></textarea>

        </div>

        <script>

            CKEDITOR.replace('editor1', {});

        </script>


        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>












