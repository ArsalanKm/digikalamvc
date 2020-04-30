<?php

$activeMenu = 'order';

require('views/admin/layout.php');

$users = $data['users'];


?>
<style>
    .w400 {
        width: 600px;
    }

    .selectTag {
        float: left;
        margin-left: 10px;
        font-family: yekan;
        font-size: 10 . pt;
        padding: 1px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت اعضا
        </a>


    </p>


    <a class="btn_red_small" onclick="submitFormMulti();">
        اجرای عملیات
    </a>

    <select class="selectTag" name="action">
        <option value="1">
            تغییر به مدیر
        </option>
        <option value="2">
            تغییر به کارمند
        </option>
        <option value="3">
            تغییر به کاربر عادی
        </option>
        <option value="4">
            حذف
        </option>
    </select>

    <script>
        function submitFormMulti() {

            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'adminuser/changelevel1';
            }
            if (actionSelected == 2) {
                action = 'adminuser/changelevel2';
            }
            if (actionSelected == 3) {
                action = 'adminuser/changelevel3';
            }
            if (actionSelected == 4) {
                action = 'adminuser/delete';
            }

            var form = $('form');
            form.attr('action', action);
            form.submit();

        }
    </script>


    <form action="" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    تاریخ عضویت

                </td>
                <td>
                    نام و نام خانوادگی
                </td>

                <td>
                    موبایل
                </td>
                <td>
                    سطح دسترسی
                </td>

                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            $i = 1;
            foreach ($users as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $row['tarikh']; ?>
                    </td>

                    <td>
                        <?= $row['family']; ?>
                    </td>
                    <td>
                        <?= $row['mobile']; ?>

                    </td>

                    <td>
                        <?= $row['levelTitle'] ?>

                    </td>

                    <td>

                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>


                <?php
                $i++;
            } ?>

        </table>

    </form>

</div>


</div>











