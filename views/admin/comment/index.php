<?php

$activeMenu = 'order';

require('views/admin/layout.php');

$comments = $data['comment'];


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
            مدیریت نظرات
        </a>


    </p>


    <a class="btn_red_small" onclick="submitFormMulti();">
        اجرای عملیات
    </a>

    <select class="selectTag" name="action">
        <option value="1">
            تایید
        </option>
        <option value="2">
            عدم تایید
        </option>
        <option value="3">
            حذف
        </option>
    </select>

    <script>
        function submitFormMulti() {

            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected == 1) {
                action = 'admincomment/confirm';
            }
            if (actionSelected == 2) {
                action = 'admincomment/unconfirm';
            }
            if (actionSelected == 3) {
                action = 'admincomment/delete';
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
                    تاریخ
                </td>

                <td style="width: 350px;">
                    عنوان
                </td>
                <td>
                    قوت
                </td>
                <td>
                    ضعف
                </td>
                <td>
                    متن نظر
                </td>

                <td>
                    وضعیت
                </td>

                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            $i = 1;
            foreach ($comments as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $row['tarikh']; ?>
                    </td>
                    <td>
                        <input name="title<?= $row['id'] ?>" value="<?= $row['title']; ?>">

                    </td>
                    <td>
                        <input name="posotive<?= $row['id'] ?>" value="<?= $row['posotive']; ?>">

                    </td>
                    <td>
                        <input name="negative<?= $row['id'] ?>" value="<?= $row['negative']; ?>">

                    </td>
                    <td>
                        <textarea name="matn<?= $row['id'] ?>"><?= $row['matn']; ?></textarea>
                    </td>

                    <td>
                        <?php
                        if ($row['confirm'] == 1) {
                            echo 'تایید شده';
                        } else {
                            echo 'تایید نشده';
                        }
                        ?>


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











