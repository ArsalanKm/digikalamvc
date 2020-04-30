<style>
    .filter_top {
        padding: 0;
        float: right;
        width: 100%;
        margin-top: 15px;
    }

    .filter_top > li {
        width: 140px;
        height: 24px;
        float: right;
        font-size: 9.5pt;
        background: #eee;
        border-radius: 3px;
        border: 1px solid #ccc;
        margin-left: 10px;
        padding-right: 4px;
        cursor: pointer;

    }

    .filter_top li img {
        float: left;
        margin-top: 5px;
        margin-left: 8px;
    }

    .filter_top li {
        position: relative;
        font-size: 9.6pt;

    }

    .filter_top li .options {
        display: none;
        width: 155px;
        height: 205px;
        background: #fff;
        box-shadow: -4px 4px 3px rgba(0, 0, 0, .2);
        border-right: 1px solid #eee;
        position: absolute;
        top: 24px;
        right: -1px;
        line-height: 19px;
        overflow-y: auto;
        overflow-x: hidden;
        z-index: 2;

    }

    .filter_top li .options li {

        padding-right: 12px;
        cursor: pointer;
    }

    .filter_top .options .square {
        width: 10px;
        height: 10px;
        display: inline-block;
        background: url("public/images/spritefiltercontrols.png") no-repeat -58px -154px;
        position: relative;
        top: 2px;
        margin-left: 3px;

    }

    .square_hover {
        background: url("public/images/spritefiltercontrols.png") no-repeat -58px -205px !important;
    }

    .square_selected {
        background: rgba(0, 0, 0, 0) url("public/images/spritefiltercontrols.png") no-repeat scroll -58px -256px !important;
    }

    #filters_selected i {
        background: rgba(0, 0, 0, 0) url("public/images/spritefiltercontrols.png") no-repeat -57px -382px !important;
        display: inline-block;
        height: 14px;
        margin-left: 4px;
        margin-right: 4px;
        width: 9px;
        cursor: pointer;

    }

    .filters_selected_span {
        background: #eee;
        font-size: 9.6pt;
        font-family: yekan;
        margin-left: 10px;
        border-radius: 2px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, .15);
    }
</style>

<div id="filters_selected" style="width: 100%;">


</div>

<ul class="filter_top">

    <?php
    $attr = $data['attr'];
    foreach ($attr as $row) {
        ?>

        <li class="yekan">
               <span class="title">
<?= $row['title'] ?>
               </span>
            <img src="public/images/sideArrow.gif">
            <div class="options">

                <ul style="padding-right: 0;padding-top: 10px;">


                    <li data-id="0" class="yekan">
                        <span class="square"></span>
                        نمایش همه
                    </li>

                    <div class="horizental_row"></div>

                    <?php
                    $values = $row['values'];
                    foreach ($values as $val) {
                        ?>

                        <li data-id="<?= $val['id'] ?>" data-idattr="<?= $row['id'] ?>" class="yekan">
                            <span class="square"></span>
                            <?= $val['val'] ?>
                        </li>

                    <?php } ?>

                </ul>

            </div>
        </li>

    <?php } ?>

</ul>

<div class="horizental_row">

</div>

<script>

    var filters = $('.filter_top > li');

    filters.hover(function () {

        $('.options', this).slideDown(200);


    }, function () {
        $('.options', this).slideUp(200);
    });


    var Items = $('.filter_top .options li ');

    Items.hover(function () {

        $('.square', this).addClass('square_hover');

    }, function () {

        $('.square', this).removeClass('square_hover');

    });

    Items.click(function () {

        var title = $(this).parents('li').find('.title').text();
        var value = $(this).text();
        var id = $(this).attr('data-id');
        var idAttr = $(this).attr('data-idattr');

        var filter_selected = $('#filters_selected');

        var filter_selected_span = filter_selected.find('span[data-id=' + id + ']');
        var len = filter_selected_span.length;
        if (len > 0) {

            filter_selected_span.remove();

        } else {

            var span = '<span data-id="' + id + '" class="filters_selected_span">' + title + ':' + value + '<i class="remove_filter" onclick="removeSelected(this)"></i><input type="hidden" name="attr-' + idAttr + '[]" value="' + id + '"></span>';
            filter_selected.append(span);
        }

        $('.square', this).toggleClass('square_selected');

        doSearch();


    });


    function removeSelected(tag) {

        var span_tag = $(tag).parents('span');
        span_tag.remove();
        var id = span_tag.attr('data-id');

        $('.options li[data-id=' + id + ']').find('.square').removeClass('square_selected');

        doSearch();
    }

</script>