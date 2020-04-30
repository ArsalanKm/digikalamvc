<script src="public/js/scroll/jquery.mCustomScrollbar.js"></script>
<link href="public/js/scroll/jquery.mCustomScrollbar.css" rel="stylesheet">
<script src="public/3d/jsc3d.js"></script>
<script src="public/3d/jsc3d.touch.js"></script>
<script src="public/3d/jsc3d.webgl.js"></script>


<style>
    #product_gallery {
        width: 900px;
        height: 600px;
        position: fixed;
        background: #fff;
        right: 0;
        left: 0;
        margin: auto;
        top: 10px;
        z-index: 6;
        display: none;
    }

    #dark {
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0, 0, 0, .3);
        top: 0;
        left: 0;
        z-index: 5;
        display: none;

    }

    #product_gallery h4 {
        font-family: yekan;
        font-size: 13.5pt;
        padding: 8px;
        background: #eee;
        margin: 0;
        position: relative;
    }

    #product_gallery h4 .close {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat -134px -123px;
        position: absolute;
        left: 8px;
        top: 8px;
        border: 1px solid #ccc;
        border-radius: 100%;
        cursor: pointer;
    }

    #product_gallery .right {
        width: 700px;
        float: right;
        height: 548px;
    }

    #product_gallery .right .item {
        height: 100%;
    }

    #product_gallery .right img {
        max-width: 100%;
        max-height: 100%;
    }

    #product_gallery .left {
        border-right: 1px solid #ccc;
        float: left;
        height: 548px;
        width: 197px;
        overflow-y: auto;
    }

    #product_gallery .left ul {
        padding: 0;
        width: 100%;

    }

    #product_gallery .left li {
        height: 130px;
        border-bottom: 1px solid #ccc;
        text-align: center;
        cursor: pointer;
        opacity: .6;
    }

    #product_gallery .left li.active {

        opacity: 1 !important;
    }

    #product_gallery .left li img {
        margin: 0 auto;
        margin-top: 7px;
        max-width: 100%;
        max-height: 100%;
    }

    #product_gallery .right .item {
        display: none;
    }

    .icon3d {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat -363px -117px;
        display: block;
        position: absolute;
        left: 4px;
        bottom: 4px;

    }

</style>

<div id="product_gallery">
    <h4>
        <?= $productInfo['title']; ?>
        <span class="close">

</span>
    </h4>

    <div class="right">

        <canvas id="cv" width="420" height="320" style="margin: auto;right:133px;position:relative;"></canvas>

        <img class="mainimage" src="">
    </div>

    <div class="left">
        <ul>


            <?php

            $gallery = $data['gallery'];
            foreach ($gallery as $row) {
                ?>

                <?php if ($row['threed'] == 1) { ?>
                    <li data-main-image="" style="position: relative;">
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img']; ?>">
                        <span class="icon3d"></span>
                    </li>
                <?php } else { ?>

                    <li data-main-image="public/images/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img']; ?>">
                        <img src="public/images/products/<?= $row['idproduct'] ?>/gallery/small/<?= $row['img']; ?>">
                    </li>

                <?php } ?>

            <?php } ?>


        </ul>
    </div>

</div>

<div id="dark">

</div>


<script>
    var canvasTag = document.getElementById('cv');
    var viewer = new JSC3D.Viewer(canvasTag, {
        SceneUrl: 'public/images/products/<?= $productInfo['id'] ?>/3d/bmw.obj',
        InitRotationX: -100,
        InitRotationY: -100,
        InitRotationZ: 0,
        RenderMode: 'texturesmooth'
    });
    viewer.init();
    viewer.update();
</script>

<script>

    var productGallery = $('#product_gallery');
    var productGalleryItems = productGallery.find('.item');

    function showGallery(imageUrl, index) {


        productGalleryThumbnails.removeClass('active');
        productGalleryThumbnails.eq(index).addClass('active');
        if (imageUrl.length > 0) {
            productGallery.find('.mainimage').attr('src', imageUrl);
            $('#cv').fadeOut(0);
            $('.mainimage').fadeIn(100);
        } else {
            $('.mainimage').fadeOut(0);
            $('#cv').fadeIn(100);

        }

    }

    var productGalleryThumbnails = productGallery.find('.left ul li');

    productGalleryThumbnails.click(function () {

        var index = $(this).index();
        var mainImageUrl = $(this).attr('data-main-image');
        showGallery(mainImageUrl, index);

    });

    productGallery.find('.close').click(function () {
        productGallery.fadeOut(200);
        $('#dark').fadeOut(200);
    });

    $('.gallery ul li').click(function () {
        $('#dark').fadeIn(200);
        productGallery.fadeIn(200);
        var index = $(this).index();

        if (index < 0) {
            index = 0;
        }
        var mainImageUrl = $(this).attr('data-main-image');
        showGallery(mainImageUrl, index);

    });


    $("#product_gallery .left").mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: false,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "3d-dark",

        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null

    });

</script>