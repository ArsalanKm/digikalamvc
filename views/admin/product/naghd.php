<?php
require('views/admin/layout.php');

$naghd = $data['naghd'];
$productInfo = $data['productInfo'];



?>
<style>
    .w400 {
        width: 600px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
مدیریت نقد وبررسی
        </a>
        <span style="color: red;">
            (
            <?= $productInfo['title']; ?>
            )
        </span>


    </p>



    <a class="btn_green_small" href="adminproduct/addnaghd/<?= $productInfo['id']; ?>">
افزودن
    </a>

    <a class="btn_red_small" onclick="submitForm();">
        حذف
    </a>


    <form action="adminproduct/deletenaghd/<?= $productInfo['id']; ?>" method="post">

        <table class="list" cellspacing="0">

            <tr>

                <td>
                    عنوان
                </td>

                <td>
                    ویرایش
                </td>


                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            foreach ($naghd as $row) {

                ?>
                <tr>

                    <td class="w400">
                        <?= $row['title']; ?>
                    </td>

                    <td>
                        <a href="adminproduct/addnaghd/<?= $row['idproduct']?>/<?= $row['id']?>">
                            <img src="public/images/edit_icon.ico" class="view">
                        </a>
                    </td>

                    <td>

                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>


            <?php } ?>

        </table>

    </form>

</div>


</div>











