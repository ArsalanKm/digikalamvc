<style>

    #questions {
        font-family: yekan;
    }

    #questions h4 {
        font-size: 12.8pt;
    }

    #question_matn {
        border: 1px solid #ccc;
        border-radius: 4px;
        height: 190px;
        width: 98%;
    }

    .row {
        float: right;
        width: 100%;
    }

    .question .question_header {
        height: 35px;
        background: #ccc;

    }

    .question .question_header i {
        float: right;
        margin-right: 7px;
        background: url(public/images/slices.png) no-repeat -284px -126px;
        width: 24px;
        height: 24px;
        display: block;
        margin-top: 6px;

    }

    .question .question_header .title {
        float: right;
        font-size: 10pt;
        margin-right: 6px;
        margin-top: 3px;

    }

    .question .question_header .name {
        float: left;
        font-size: 10pt;
        margin-right: 6px;
        margin-top: 3px;

    }

    .question .question_header .date {
        float: left;
        font-size: 10pt;
        margin-left: 6px;
        margin-top: 3px;

    }

    .question .question_content {

        background: #eee;
        padding: 10px;

    }

    #questions_container {
        width: 98%;
    }

    .question_content p {
        font-size: 11.5pt;
    }

    #questions .question {
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.15);
        border-radius: 3px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .answer {
        padding: 10px;
        background: #fff;
        font-size: 11pt;
    }

</style>


<h4>
    پرسش خود را مطرح نمایید
</h4>


<textarea id="question_matn">

                </textarea>

<div class="row">

    <div class="email" style="text-align: left;">
                    <span class="btn btn_green" style="float: left;margin-left: 20px;">
ثبت پرسش
                    </span>
    </div>
</div>


<div class="horizental_row"></div>


<div id="questions_container" class="row">

    <?php

    $questions = $data[0];
    $answers = $data[1];
    foreach ($questions as $row) {

        ?>


        <div class="question">
            <div class="question_header">

                <i></i>
                        <span class="title">
                            پرسش
                        </span>

                        <span class="date">
<?= $row['tarikh']; ?>
                        </span>

                        <span class="name">

     کلیک سایت
                        -
                        </span>


            </div>

            <div class="question_content">

                <p>
                    <?= $row['matn']; ?>
                </p>

            </div>

            <div class="answer">
                <p style="margin-top: 2px;">
                    پاسخ:
                </p>

                <?= $answers[$row['id']]['matn']; ?>

            </div>

        </div>


    <?php } ?>

</div>


