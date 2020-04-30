<?php
$activeMenu='product';
require('views/admin/layout.php');

$products = $data['product'];


?>
<style>
    .w400 {
        width: 600px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت محصولات
        </a>


    </p>


    <a class="btn_green_small" href="adminproduct/addproduct">
        افزودن
    </a>

    <a class="btn_red_small" onclick="submitForm();">
        حذف
    </a>

    <form action="adminproduct/deleteproduct" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    کد
                </td>
                <td style="width: 350px;">
                    عنوان
                </td>
                <td>
                    قیمت
                </td>
                <td>
                    تخفیف
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    گالری
                </td>
                <td>
                    نقد
                </td>
                <td>
                    ویژگی ها
                </td>

                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            foreach ($products as $row) {

                ?>
                <tr>
                    <td>
                        <?= $row['id']; ?>
                    </td>
                    <td>
                        <?= $row['title']; ?>
                    </td>
                    <td>
                        <?= $row['price']; ?>
                    </td>
                    <td>
                        <?= $row['discount']; ?>
                    </td>

                    <td>
                        <a href="adminproduct/addproduct/<?= $row['id']; ?>">
                            <img src="public/images/edit_icon.ico" class="view">
                        </a>
                    </td>
                    <td>
                        <a href="adminproduct/gallery/<?= $row['id']; ?>">
                            گالری
                        </a>
                    </td>

                    <td>
                        <a href="adminproduct/naghd/<?= $row['id']; ?>">
                            نقد و بررسی
                        </a>
                    </td>
                    <td>
                        <a href="adminproduct/attr/<?= $row['id']; ?>">
                            ویژگی ها
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











