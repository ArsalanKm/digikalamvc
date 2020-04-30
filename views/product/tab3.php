<style>
    #comments_result {
        width: 510px;
        float: right;
    }

    #comment_send {
        float: right;
        margin-right: 10px;
        width: 630px;
    }

    .navbar .row {
        width: 100%;
        float: right;
    }

    .navbar .row .title {
        font-size: 10.3pt;
        float: right;
        width: 155px;
        display: block;
    }

    .navbar ul {
        padding: 0;
        height: 10px;
        float: right;
        margin-right: 10px;
        margin-top: 10px;

    }

    .navbar ul li {
        width: 64px;
        height: 100%;
        float: right;
        background: #eee;
        border-left: 1px solid #fff;

    }

    .navbar ul li span {
        display: block;
        height: 100%;
        background: green;
    }

    .navbar ul li span.full {
        width: 100%;
    }
</style>


<div id="comments_result" class="navbar">

    <?php

    $comment_params = $data[0];
    $comment_param_scores = $data[2];
   

    ?>

    <p style="font-size: 13.5pt;font-family: yekan;">
        امتیاز کاربران به:
                    <span style="font-size: 11pt;font-family: yekan;">
                        گوشی سامسونگ مدل xyz
                    </span>
    </p>
    <?php
    foreach ($comment_params as $row) {

        $score = $comment_param_scores[$row['id']];
        $part1 = floor($score);
        $part2 = $score - $part1;
        $num_li = $part1;


        ?>

        <div class="row">
                    <span class="title">
<?= $row['title']; ?>
                    </span>
            <ul>
                <?php for ($i = 0; $i < $part1; $i++) { ?>
                    <li>
                        <span class="full"></span>
                    </li>
                <?php } ?>

                <?php if ($part1 < 5) {
                    $num_li++;
                    ?>
                    <li>
                        <span style="width: <?php echo $part2 * 100; ?>%;"></span>
                    </li>

                <?php } ?>

                <?php
                $num_li_remain = 5 - $num_li;
                for ($i = 0; $i < $num_li_remain; $i++) {

                    ?>
                    <li>

                    </li>
                <?php } ?>

            </ul>

        </div>

    <?php } ?>


</div>
<div id="comment_send">

    <p style="font-size: 13.5pt;">
        شما هم می توانید نظر خود را ارسال نمایید
    </p>

    <p style="font-size: 11pt;">
        برای ثبت نظرات، نقد و بررسی شما لازم است ابتدا وارد حساب کاربری خود شوید. اگر این محصول را قبلا از
        دیجی کالا خریده باشید، نظر شما به عنوان مالک محصول ثبت خواهد شد.
    </p>

    <div class="email" style="text-align: left;">

                    <a href="addcomment/index/<?= $data[3] ?>" class="btn btn_green">
ارسال نظر
                    </a>


    </div>

</div>


<style>
    #comments {
        float: right;
        width: 98%;
    }

    #comments .comment {
        float: right;
        width: 100%;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.15);
        border-radius: 2px;
        overflow: hidden;
        margin-bottom: 8px;

    }

    #comments .comment .comment_header {
        height: 57px;
        background: #eee;
        font-family: yekan;
        padding: 0 15px;
    }

    #comments .comment .comment_header .right {

        float: right;
    }

    #comments .comment .comment_header .left {

        float: left;
    }

    #comments .comment .comment_header .right span {
        display: block;
    }

    #comments .comment .comment_header .left span {
        float: left;
        display: block;
        margin-right: 8px;
        font-size: 10.6pt;
        margin-top: 13px;
    }

    #comments .comment .comment_header .left .like {
        width: 65px;
        height: 25px;
        background: #fff;
    }

    #comments .comment .comment_header .left .like span {
        margin: 0;
        margin-left: 10px;
    }

    #comments .comment .comment_header .left .like i {
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        margin-right: 3px;
        margin-top: 4px;
        background: url(public/images/slices.png) no-repeat -305px -190px;
    }

    #comments .comment .comment_header .left .dislike {
        width: 65px;
        height: 25px;
        background: #fff;
    }

    #comments .comment .comment_header .left .dislike span {
        margin: 0;
        margin-left: 10px;
    }

    #comments .comment .comment_header .left .dislike i {
        width: 20px;
        height: 20px;
        display: block;
        float: right;
        margin-right: 3px;
        margin-top: 4px;
        background: url(public/images/slices.png) no-repeat -267px -193px;
    }

</style>


<style>

    #comments .comment .comment_content .left {

        width: 745px;
        float: left;
    }

    #comments .comment .comment_content .left .top {
        font-size: 13.3pt;
    }

    #comments .comment .comment_content .left .center {
        float: right;
        width: 100%;
    }

    #comments .comment .comment_content .left .bottom {
        font-size: 11pt;
    }

    .ghovat {
        width: 280px;
        float: right;
        font-size: 10.5pt;
    }

    .zaaf {
        width: 280px;
        float: right;
        margin-right: 15px;
        font-size: 10.5pt;
    }

    #comments .comment .comment_content {
        float: right;
        padding: 10px;
        width: 98%;
    }

    #comments .comment .comment_content .right {
        float: right;
        width: 400px;
    }
</style>


<div id="comments">
    <p style="font-size: 13pt;">
        نظرات کاربران
    </p>

    <div class="horizental_row"></div>

    <?php

    $comments = $data[1];
    foreach ($comments as $row) {

        ?>

        <div id="comment<?php echo $row['id'] ?>" class="comment">
            <div class="comment_header">
                <div class="right">
                            <span class="name" style="font-size: 12.8pt;">
                                کلیک سایت
                            </span><span class="date" style="font-size: 9pt;">
<?= $row['tarikh']; ?>
                        </span>
                </div>
                <div class="left">
                            <span class="dislike">
  <i></i>
                                <span>
                                    <?= $row['dislikecount']; ?>
                                </span>
                            </span>
                            <span class="like">

                                <i></i>
                                <span>
                                    <?= $row['likecount']; ?>
                                </span>
                            </span>
                            <span>
                                آیا این نظر مفید بود؟
                            </span>
                </div>
            </div>


            <div class="comment_content">
                <div class="right">

                    <div class="navbar">

                        <?php
                        $scores = unserialize($row['param']);
                        array(1 => 3, 2 => 1, 3 => 4);

                        foreach ($comment_params as $param) {

                            $param_id = $param['id'];

                            $score = $scores[$param_id];

                            ?>

                            <div class="row">
                    <span class="title">
<?= $param['title']; ?>
                    </span>
                                <ul>
                                    <?php
                                    for ($i = 0;
                                         $i < $score;
                                         $i++) {
                                        ?>
                                        <li>
                                            <span class="full"></span>
                                        </li>
                                    <?php } ?>
                                    <?php
                                    for ($i = 0;
                                         $i < 5 - $score;
                                         $i++) {
                                        ?>
                                        <li>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>


                        <?php } ?>


                    </div>

                </div>


                <div class="left">

                    <div class="top">
                        <?= $row['title']; ?>
                    </div>

                    <div class="center">
                        <div class="ghovat">
                            <p style="color: green;">
                                نقاط قوت
                            </p>
                            <p>
                                <?= $row['posotive']; ?>
                            </p>
                        </div>
                        <div class="zaaf">
                            <p style="color: red;">
                                نقاط ضعف
                            </p>
                            <p>
                                <?= $row['negative']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="bottom">
                        <?= $row['matn']; ?>
                    </div>

                </div>
            </div>
        </div>


    <?php } ?>

</div>

