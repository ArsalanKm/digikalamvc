<?php
require('views/admin/layout.php');

$gallery= $data['gallery'];
$productInfo=$data['productInfo'];


?>
<style>
    .w400 {
        width: 600px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
مدیریت گالری تصاویر
        </a>


    </p>

    <form id="addgallery" action="adminproduct/gallery/<?= $productInfo['id'] ?>" enctype="multipart/form-data" method="post" style="margin-bottom: 20px;font-size: 10pt;float: right;width: 100%;">

        <div class="row">
            <span class="span_title" style="float: right;">
                انتخاب تصویر:
            </span>
            <input type="file" name="image" style="float: right;">

            <a class="btn_green_small" onclick="submitForm2()" style="float: right;">
                افزودن
            </a>
        </div>

    </form>


    <script>
        function submitForm2(){
            $('#addgallery').submit();
        }
        function submitForm3(){
            $('#gallerylist').submit();
        }
    </script>

    <a class="btn_red_small" onclick="submitForm3();">
        حذف
    </a>

    
    <form id="gallerylist" action="adminproduct/deletegallery/<?= $productInfo['id'] ?>" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    تصویر
                </td>
                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            $i=1;
            foreach ($gallery as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img'] ?>">
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











