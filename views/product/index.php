<div id="main" style="width: 1200px;margin:10px auto;">

    <style>
        #main::after {
            content: " ";
            clear: both;
            display: block;
        }
        #main{
            font-family: yekan;;
        }
    </style>


    <?php
    $productInfo=$data['productInfo'];

    if($productInfo['special']==1) {
        require('offer.php');
    }
    require('details.php');
    require('introduction.php');
    require('onlyclicksite.php');
    require('tabs.php');

    ?>

</div>


<?php require('gallery.php'); ?>






