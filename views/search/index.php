<style>
    #content {
        width: 880px;
        float: left;
    }

    .horizental_row {
        background: #ccc;
        float: right;
        height: 1px;
        margin: 15px;
        width: 86%;
    }

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

</style>

<div id="main" style="width: 1150px;margin:10px auto;background: #fff;box-shadow: 0 1px 3px #eee;padding: 25px;">

    <form id="form_search" action="search/doSearch" method="post">

        <?php
        require('sidebar.php');

        ?>


        <div id="content">


            <?php
            require('navigator.php');
            require('filter_top.php');
            require('search.php');
            require('products.php');

            ?>


        </div>

    </form>

    <script>

        var current_page = 1;


        function doSearch(page) {

            if (typeof (page) != 'undefined') {
                current_page = page;
            } else {
                current_page = 1;
            }

            if (current_page < 1) {
                current_page = 1;
            }

            var last_page = '';

            last_page = $('#pagination ul li:last').text();
            if (current_page > last_page) {
                current_page = last_page;
            }

            var data = $('#form_search').serializeArray();
            var exist = 0;
            if ($('.exist').hasClass('active') == true) {
                exist = 1;
            }
            data.push({'name': 'exist', 'value': exist});
            var keyword = $('#keyword').val();
            data.push({'name': 'keyword', 'value': keyword});


            data.push({'name': 'current_page', 'value': current_page});

            var limit = $('#limit option:selected').val();
            data.push({'name': 'limit', 'value': limit});

            var url = 'search/doSearch';
            $.post(url, data, function (msg) {


                $('#products ul').html('');
                $.each(msg[0], function (index, val) {

                    var item = '<li><a><div class="right"><div class="textcenter" style="margin-top: 4px;"><img src="public/images/products/' + val['id'] + '/product_220.jpg"> </div> <div class="colors textcenter"> <span class="color" style="background: silver;"></span> <span class="color" style="background: gold;"></span> <span class="color" style="background: #fff;"></span> </div> <div class="stars textcenter"> <div class="gray"> <div class="red"></div> </div> </div> </div> <div class="left"> <div class="title yekan"> ' + val['title'] + ' </div><div class="description"> </div> <div class="price yekan">' + val['price'] + ' تومان <p class="yekan price_red"></p><p class="yekan price_green">2000 تومان</p><span class="addtocart"></span></div></div></a></li>';

                    $('#products ul').append(item);


                })

                console.log(msg[1]);
                var page_number = msg[1];

                var active = '';
                $('#pagination ul').html('');

                var i = '';
                var start = current_page - 5;
                if (start < 1) {
                    start = 1;
                }
                var end = current_page + 5;
                if (end > page_number) {
                    end = page_number;
                }

                for (i = start; i <= end; i++) {
                    if (i == current_page) {
                        active = 'active';
                    } else {
                        active = '';
                    }
                    $('#pagination ul').append('<li onclick="pagination(this,' + i + ')" class="' + active + '">' + i + '</li>');
                }


            }, 'json')


        }


        doSearch();
    </script>


</div>



