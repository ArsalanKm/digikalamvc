<style>
    #tab {
        width: 1200px;
        float: right;
        margin-top: 20px;
        background: #f5f6f7;
        padding: 0;
    }

    #tab li {

        float: right;
        padding: 15px;
        font-size: 11.5pt;
        font-family: yekan;
        border-left: 1px solid #eee;
        cursor: pointer;
        position: relative;
        padding-right: 37px;

    }

    #tab li::before {

        background: url(public/images/slices.png) no-repeat;
        width: 30px;
        height: 26px;
        content: " ";
        display: block;
        position: absolute;
        right: 3px;
        top: 17px;

    }

    #tab .naghd::before {
        background-position: -105px -266px;
    }

    #tab .fanni::before {
        background-position: -315px -266px;
    }

    #tab .nazar::before {
        background-position: -261px -266px;
    }

    #tab .soal::before {
        background-position: -210px -266px;
    }

    #tab .naghd.active::before {
        background-position: -105px -308px;
    }

    #tab .fanni.active::before {
        background-position: -315px -308px;
    }

    #tab .nazar.active::before {
        background-position: -261px -308px;
    }

    #tab .soal.active::before {
        background-position: -210px -308px;
    }

    #tab li.active {

        background: #fff;
        border-top: 2px solid blue;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);

    }
</style>

<ul id="tab">
    <li class="naghd active">
        نقد و بررسی تخصصی
    </li>
    <li class="fanni">
        مشخصات فنی
    </li>
    <li class="nazar">
        نظرات کاربران
    </li>
    <li class="soal">
        پرسش و پاسخ
    </li>
</ul>

<style>
    #tabchilds {
        width: 1200px;
        float: right;
        background: #fff;

    }

    #tabchilds section {
        width: 100%;
        display: none;
        padding: 10px;
        padding-bottom: 20px;
        font-family: yekan;
        font-size: 12pt;
        float: right;
    }

    #tabchilds section:first-child {
        display: block;
    }

    #tabchilds .item {

        padding: 0 10px;
    }

    #tabchilds .item h4 {

        font-family: yekan;
        font-size: 13.5pt;
        margin: 0;
        position: relative;
        padding: 5px 25px 5px 0;
        line-height: 40px;
        cursor: pointer;
    }

    #tabchilds .item h4::after {

        width: 100%;
        height: 1px;
        background: #eee;
        position: absolute;
        top: 28px;
        left: 0;
        content: " ";
        display: block;
    }

    #tabchilds .item:last-child h4::after {

        top: 37px;

    }

    #tabchilds .item h4 span {
        z-index: 1;
        position: relative;
        background: #fff;
    }

    #tabchilds .item h4 i {

        background: url(public/images/slices.png) no-repeat -259px -606px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -27px;

    }

    #tabchilds .item h4.active i {

        background: url(public/images/slices.png) no-repeat -207px -606px;

    }

    #tabchilds .item:first-child h4 i {

        background: url(public/images/slices.png) no-repeat -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -26px;
        top: -4px;
    }

    #tabchilds .item:first-child h4.active i {

        background: url(public/images/slices.png) no-repeat -98px -615px;

    }

    #tabchilds .item:last-child h4 span {

        position: relative;
        top: 10px;
    }

    #tabchilds .item:last-child h4 i {

        background: rgba(0, 0, 0, 0) url("public/images/slices.png") no-repeat scroll -313px -615px;
        display: block;
        height: 44px;
        position: absolute;
        right: -27px;
        top: 22px;
        width: 31px;

    }

    #tabchilds .item:last-child h4.active i {

        background: url(public/images/slices.png) no-repeat -207px -606px;

    }

    .itemcontainer {
        margin-right: 20px;
        border-right: 3px solid #f0f1f2;
    }

    .itemcontainer .item .description {
        display: none;
    }

</style>

<div id="tabchilds">


    <section>
    </section>

    <section class="section_fanni">
    </section>

    <section>
    </section>

    <section id="questions">
    </section>

    <?php
    /*require ('tab1.php');
    require ('tab2.php');
    require ('tab3.php');
    require ('tab4.php');*/
    ?>

</div>


<script>

    $('#tab li').click(function () {

        changeTab($(this));

    });

    function changeTab (tag) {

        $('#tab li').removeClass('active');
        tag.addClass('active');
        $('#tabchilds section').fadeOut(0);

        var index = tag.index();
        var section_selected = $('#tabchilds section').eq(index);

        var url = '<?= URL ?>product/tab/<?= $productInfo['id'] ?>/<?= $productInfo['cat'] ?>';
        var data = {'number': index};
        $.post(url, data, function (msg) {
            section_selected.html(msg);
        });
        section_selected.fadeIn(200);

    }

    $('.<?= $data['activeTab'] ?>').trigger('click');


  
</script>















