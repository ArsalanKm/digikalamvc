<style>
    .section_fanni {

    }

    .section_fanni h4 {
        font-size: 13.5pt;
        font-family: yekan;

    }

    .section_fanni .row {
        width: 100%;
        float: right;
        margin-bottom: 10px;
    }

    .section_fanni .row .right {
        width: 255px;
        float: right;
        background: #efefef;
        font-family: yekan;
        font-size: 10pt;
        padding: 5px;
        margin-left: 20px;
        border-radius: 4px;
    }

    .section_fanni .row .left {
        width: 880px;
        float: right;
        background: #f7f9fa;
        padding: 5px;
        font-family: yekan;
        font-size: 10pt;
        border-radius: 4px;

    }
</style>


<?php

$fanni = $data[0];

foreach ($fanni as $attr_parent) {
    $children = $attr_parent['children'];
    ?>


    <h4>
        <?= $attr_parent['title'] ?>
    </h4>

    <?php foreach ($children as $child) { ?>
        <div class="row">
            <div class="right">
                <?= $child['title'] ?>
            </div>
            <div class="left">
                <?php

                if($child['valTitle']==''){
                    echo '-';
                }
                else{
                    echo $child['valTitle'];
                }

                ?>

            </div>
        </div>

    <?php } ?>


<?php } ?>


