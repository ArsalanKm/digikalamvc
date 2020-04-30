<?php
require('views/admin/layout.php');


?>
<style>
    .w400 {
        width: 600px;
    }

    .span_title {
        width: 200px;
    }

    input[type=text] {
        width: 200px;
        height: 23px;
    }
    .row{
        margin-bottom: 7px;
    }

</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت اسلایدشو
        </a>


    </p>

    <form id="addslider" action="adminslider/index" enctype="multipart/form-data" method="post"
          style="margin-bottom: 20px;font-size: 10pt;float: right;width: 100%;">

        <div class="row">
            <span class="span_title" style="float: right;">
                عنوان:
                </span>

            <input type="text" name="title">


        </div>
        <div class="row">
            <span class="span_title" style="float: right;">
آدرس لینک:
            </span>

            <input type="text" name="link">


        </div>

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
        function submitForm2() {
            $('#addslider').submit();
        }
        function submitForm3() {
            $('#gallerylist').submit();
        }
    </script>

    <a class="btn_red_small" onclick="submitForm3();">
        حذف
    </a>


    <form id="gallerylist" action="adminslider/delete" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    عنوان
                </td>

                <td>
                    تصویر
                </td>
                <td>
                    انتخاب
                </td>
            </tr>

            <?php
            $i = 1;
            $slider = $data['slider'];

            foreach ($slider as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <?= $row['title']; ?>
                    </td>
                    <td>
                        <img style="width: 300px" src="<?= $row['img'] ?>">
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











