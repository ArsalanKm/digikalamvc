

    <div class="itemcontainer">

        <?php
        $naghd=$data[0];
        //print_r($naghd);

        foreach ($naghd as $row){
        ?>

        <div class="item">
            <h4>
                <i></i>
                        <span>
<?= $row['title']; ?>
                    </span>
            </h4>

            <div class="description">
                <?= $row['description']; ?>
            </div>

        </div>

        <?php } ?>


    </div>

    <script>
        $('.itemcontainer .item h4').click(function () {

            var item = $(this).parents('.item');
            $(this).toggleClass('active');
            $('.description', item).slideToggle(200);


        });
    </script>
