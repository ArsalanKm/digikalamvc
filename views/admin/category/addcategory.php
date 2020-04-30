<?php
require('views/admin/layout.php');

$edit=$data['edit'];
$categoryInfo=$data['categoryInfo'];


?>
<div class="left">

    <p class="title">
        <?php if($edit==''){ ?>
        ایجاد دسته جدید

        <?php }else{ ?>
        ویرایش دسته
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
        </style>

    <form action="admincategory/addcategory/<?= $categoryInfo['id']; ?>/<?= $edit; ?>" method="post">

        <div class="row">

        <span class="span_title">
عنوان دسته:
        </span>
            <input type="text" name="title" value="<?php if($edit==''){}else{echo $categoryInfo['title'];} ?>">

        </div>
        <div class="row">

        <span class="span_title">
دسته والد:
        </span>
            <select name="parent" autocomplete="off">

                <option>
                    انتخاب کنید
                </option>
                <?php
                $category = $data['category'];
                $parentId = $data['parentId'];
                if($edit=='') {
                    $selectedId = $parentId;
                }else{
                    $selectedId=$categoryInfo['parent'];
                }

                foreach ($category as $row) {
                    if ($row['id'] == $selectedId) {
                        $x = 'selected';
                    } else {
                        $x = '';
                    }
                    ?>

                    <option value="<?= $row['id']; ?>"  <?= $x ?>>
                        <?= $row['title']?>
                    </option>

                <?php } ?>
            </select>

        </div>

        <a class="btn_green_small" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>


</div>











