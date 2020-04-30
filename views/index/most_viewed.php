<div class="sliderscroll" style="margin-top: 12px;float: right;">

    <h3>
        پربازدیدترین ها
    </h3>

    <div class="sliderscroll_content">

        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this);"></span>
        </div>
        <div class="sliderscroll_main">
            <ul>
                <?php
                $result=$data[4];
                foreach ($result as $row){
                ?>

                <li>
                    <a href="<?= URL ?>product/index/<?= $row['id']; ?>">

                        <img style="width: 150px;" src="public/images/products/<?= $row['id']; ?>/product_220.jpg">

                        <img src="public/images/exclusive-blue.png">

                        <p class="yekan fontsm">
<?= $row['title']; ?>
                        </p>

                        <p class="yekan price">
                            <?= $row['price']; ?>
                        </p>

                    </a>
                </li>
                <?php }
                ?>

            </ul>

        </div>

        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this);"></span>
        </div>

    </div>

</div>

