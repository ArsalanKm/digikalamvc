<?php
require('views/admin/layout.php');

$editInfo = $data['editInfo'];
$edit = '';
if (isset($editInfo['title'])) {
    $edit = 1;
}

$categoryInfo = $data['categoryInfo'];

?>
<div class="left">

    <p class="title">
        <?php if ($edit == '') { ?>
            ایجاد ویژگی جدید

        <?php } else { ?>
            ویرایش ویژگی
        <?php } ?>


        (
        <a style="color:red;" href="admincategory/showattr/<?= $categoryInfo['id'] ?>">

            دسته
            <?= $categoryInfo['title'] ?>


        </a>

        <?php if (isset($attrInfo['id'])) { ?>
            <span style="color:red;">
                            -
ویژگی:
                <?= $attrInfo['title'] ?>
        </span>

        <?php } ?>

        )

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

    <form action="admincategory/addattr/<?= $categoryInfo['id']; ?>/<?= $data['parentId'] ?>/<?= $editInfo['id'] ?>"
          method="post">

        <div class="row">

        <span class="span_title">
عنوان ویژگی:
        </span>
            <input type="text" name="title" value="<?php if ($edit == '') {
            } else {
                echo $editInfo['title'];
            } ?>">

        </div>
        <div class="row">

        <span class="span_title">
ویژگی والد:
        </span>
            <select name="parent" autocomplete="off">

                <option>
                    انتخاب کنید
                </option>
                <?php
                $attr = $data['attr'];
                $parentId = $data['parentId'];
                $selectedId = $parentId;

                foreach ($attr as $row) {
                    if ($row['id'] == $selectedId) {
                        $x = 'selected';
                    } else {
                        $x = '';
                    }
                    ?>

                    <option value="<?= $row['id']; ?>" <?= $x ?>>
                        <?= $row['title'] ?>
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











