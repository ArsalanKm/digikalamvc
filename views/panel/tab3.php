<style>
    .favorits ul {
        padding: 10px;
        width: 96%;
        background: #eee;
        border: 1px dashed #ccc;
        float: right;
        padding-bottom: 22px;
    }

    .favorits ul li {
        width: 280px;
        height: 36px;
        margin-right: 20px;
        float: right;

    }

    .favorits ul li a {
        display: block;
        height: 100%;
        position: relative;
        padding: 5px;
        cursor: pointer;

    }

    .favorits ul li.active a {

        background: #fff;
        border: 1px solid #ccc;

    }

    .favorits ul li a:hover {

        background: #fff;
        border: 1px solid #ccc;

    }

    .favorits ul li a .folder {

        vertical-align: middle;

    }

    .favorits ul li a span {

        font-family: yekan;
        font-size: 10.3pt;
        margin-right: 7px;

    }

    .favorits ul li a .edit {

        position: absolute;
        top: 2px;
        left: 2px;
        display: none;

    }

    .favorits .btn_save {
        background: #0f0 none repeat scroll 0 0;
        border-radius: 2px;
        bottom: 1px;
        color: #fff;
        cursor: pointer;
        display: block;
        font-family: yekan;
        font-size: 9pt;
        left: 1px;
        padding: 0 3px;
        position: absolute;
        text-align: center;
        display: none;
    }

    .delete {
        cursor: pointer;
    }

</style>

<section class="favorits" >

    <ul>
        <li onclick="getFavorit(0,this)">
            <a>
                <img class="folder" src="public/images/folder_documents_all.png">
                <span>
                            همه پوشه ها
                        </span>

            </a>
        </li>
        <?php
        $folder = $data['folder'];
        foreach ($folder as $row) {

            ?>
            <li onclick="getFavorit(<?= $row['id'] ?>,this)">
                <a>
                    <img class="folder" src="public/images/folder_documents_all.png">
                    <span class="title">

<?= $row['title'] ?>
                    </span>
                    <img onclick="startEdit(this)" class="edit" src="public/images/icon_edit_16.png">

                    <span class="btn_save" onclick="saveEdit(<?= $row['id'] ?>,this)">ذخیره</span>

                </a>
            </li>

        <?php } ?>
    </ul>

    <style>
        .favorits .item {
            border: 1px dotted;
            float: right;
            margin-top: 10px;
            padding: 7px;
            width: 96%;
        }

        .favorits .item .right {
            float: right;
        }

        .favorits .item .right img {
            width: 110px;
            height: 110px;
            border: 1px solid #eee;
            border-radius: 4px;

        }

        .favorits .item .left {
            float: right;
            margin-right: 5px;
            padding-right: 26px;
            width: 1000px;
        }

        .favorits .item .left h4 {
            font-size: 12.8pt;
            margin: 0;
            position: relative;
        }

        .favorits .item .left h4 .edit {
            left: 28px;
            position: absolute;
            top: 3px;
        }

        .favorits .item .left .delete {
            position: absolute;
            left: 4px;
            top: 5px;
        }

        .favorits .item .left .description {
            font-size: 11pt;
            font-family: yekan;
        }
    </style>

    <div class="Items"></div>


</section>


<script>


    $('.favorits li .edit').click(function (e) {
        e.stopPropagation();
    });

    $('.favorits li .btn_save').click(function (e) {
        e.stopPropagation();
    });

    function startEdit(tag) {

        var imgTag = $(tag);
        var liTag = imgTag.parents('li');
        liTag.addClass('active');
        var spanTitle = liTag.find('.title');
        var title = spanTitle.text();
        liTag.find('.btn_save').fadeIn(200);

        var inputTag = '<input type="text" value="' + title + '">';
        spanTitle.html(inputTag);

        $('.favorits li input').click(function (e) {
            e.stopPropagation();
        });


    }


    function saveEdit(folderId, tag) {

        var spanTag = $(tag);
        var liTag = spanTag.parents('li');

        var inputTag = liTag.find('.title input');
        var newName = inputTag.val();

        var url = 'panel/saveEdit';
        var data = {'folderId': folderId, 'newName': newName};
        $.post(url, data, function (msg) {

            liTag.find('.title').html(newName);
            liTag.find('.btn_save').fadeOut(200);

        })

    }


    function deleteFavorit(favoritId, tag) {


        var item = $(tag).parents('.item');
        var url = 'panel/deleteFavorit';
        var data = {'favoritId': favoritId};
        $.post(url, data, function (msg) {
            item.remove();
        })
    }


    function getFavorit(folderId, tag) {

        var liTag = $(tag);
        $('.favorits li').removeClass('active');
        liTag.addClass('active');

        var url = 'panel/getfavorit';
        var data = {'folderId': folderId};
        $('.Items').html('');

        $.post(url, data, function (msg) {

            $.each(msg, function (index, val) {

                var item = '<div class="item"><div class="right"><img src="public/images/products/' + val['idproduct'] + '/product_220.jpg "></div><div class="left"><h4>' + val['productTitle'] + '<img class="delete" onclick="deleteFavorit(' + val['id'] + ',this)" src="public/images/Delete.gif"></h4></div></div>';

                $('.Items').append(item);

                console.log(msg);


            })

        }, 'json');
    }


    $('.favorits ul li a').hover(function () {
        $('.edit', this).fadeIn(200);


    }, function () {
        $('.edit', this).fadeOut(200);
    });


</script>







