<style>


    #sidebar {
        width: 250px;
        border: 1px solid #ccc;
        float: right;
    }

    #sidebar h3 {
        height: 30px;
        background: #777780;
        color: #fff;
        padding-right: 5px;
        padding-top: 5px;
        margin: 0;
        font-size: 10.5pt;
        line-height: 25px;
    }

    #sidebar h3 .arrow {
        background: rgba(0, 0, 0, 0) url("public/images/subcatarrow.gif") no-repeat scroll 0 0;
        display: block;
        float: left;
        height: 11px;
        margin-left: 8px;
        margin-top: 8px;
        width: 20px;
    }

    #sidebar ul {
        font-family: yekan;
        font-size: 10pt;
        padding-right: 20px;
    }

</style>

<div id="sidebar">
    <h3 class="yekan">
        گوشی موبایل
        <span class="arrow"></span>
    </h3>

    <ul>
        <li>
            کالای دیجیتال
            <ul>
                <li>
                    موبایل
                    <ul>
                        <li>
                            گوشی موبایل
                        </li>
                    </ul>

                </li>
            </ul>
        </li>
    </ul>

    <div class="horizental_row"></div>

    <style>
        .filter_ul {
            padding-right: 5px;
        }

        .filter_ul li {
            font-family: yekan;
            font-size: 10pt;
            position: relative;
        }

        .filter_ul .title {
            font-size: 10.5pt;

        }

        .check_input {
            display: inline-block;
            height: 16px;
            margin: 0;
            opacity: 0;
            position: relative;
            right: 1px;
            top: 2px;
            width: 16px;
            z-index: 2;
            cursor: pointer;
            margin-left: 8px;
        }

        .check_label {
            background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat scroll -1px -1px;
            border-radius: 1px;
            display: block;
            height: 17px;
            position: absolute;
            right: 3px;
            top: 5px;
            width: 17px !important;

        }

        .check_label.checked {
            background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat scroll -1px -32px;
            border: none;
        }

        .product_color {
            display: inline-block;
            height: 12px;
            margin-left: 5px;
            position: relative;
            top: 2px;
            width: 4px;
        }

    </style>

    <?php

    $filterRight = $data['attrRight'];
    foreach ($filterRight as $attr){

    ?>
    <ul class="filter_ul">

        <li class="title"><?= $attr['title'] ?></li>
        <?php
        $attrValues = $attr['values'];
        foreach ($attrValues as $val) {
            ?>
            <li>
                <label class="check_label"></label>
                <input name="attr-<?= $attr['id'] ?>[]" value="<?= $val['id'] ?>" class="check_input" type="checkbox">
<?= $val['val'] ?>
            </li>
        <?php } ?>
    </ul>

    <div class="horizental_row"></div>

    <?php } ?>



    <ul class="filter_ul">
        <li class="title">بر اساس رنگ</li>
        <?php
        $colors=$data['colors'];
        foreach ($colors as $row){

        ?>

        <li>
            <label class="check_label"></label>
            <input name="colorSelected[]" value="<?= $row['id'] ?>" class="check_input" type="checkbox">
            <span class="product_color" style="background-color: <?= $row['hex'] ?>;"></span>
<?= $row['title'] ?>
        </li>

        <?php } ?>

    </ul>


    <script>
        $('.check_input').click(function () {
            if ($(this).is(':checked')) {
                $(this).parents('li').find('.check_label').addClass('checked');
            } else {
                $(this).parents('li').find('.check_label').removeClass('checked');
            }
            doSearch();
        })
    </script>


</div>