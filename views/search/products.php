<style>
    #pagination {
        float: right;
        width: 100%;
    }

    #pagination .prev {
        font-family: yekan;
        font-size: 9.3pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #eee;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        border-radius: 3px;
        text-align: center;
        background: linear-gradient(center top, #fff 0%, #efefef 100%);
        background: -moz-linear-gradient(center top, #fff 0%, #efefef 100%);
        cursor: pointer;

    }

    #pagination .next {
        font-family: yekan;
        font-size: 9.3pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #eee;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        border-radius: 3px;
        text-align: center;
        background: linear-gradient(center top, #fff 0%, #efefef 100%);
        background: -moz-linear-gradient(center top, #fff 0%, #efefef 100%);
        cursor: pointer;
    }

    #pagination ul {
        padding: 0;
        float: left;
    }

    #pagination ul li {
        float: right;
        font-family: yekan;
        font-size: 9.3pt;
        background: linear-gradient(center top, #fff 0%, #efefef 100%);
        background: -moz-linear-gradient(center top, #fff 0%, #efefef 100%);
        width: 25px;
        height: 23px;
        border: 1px solid #eee;
        border-radius: 2px;
        margin-left: 2px;
        margin-right: 2px;
        text-align: center;
        cursor: pointer;
    }

    #pagination ul li.active {
        background: red;
        color: #fff;
    }
</style>

<div id="pagination">

            <span class="next" onclick="doSearch(current_page+1)">
صفحه بعد
            </span>

    <ul>
<li>1</li>
    </ul>

    <span class="prev" onclick="doSearch(current_page-1)">
                صفحه قبل
     </span>


</div>


<style>
    #products {
        float: right;
        margin-top: 30px;
        width: 100%;
    }

    #products ul {
        padding: 0;
        width: 100%;
    }

    #products ul li {
        width: 208px;
        height: 330px;
        border: 1px solid #eee;
        margin-right: 10px;
        float: right;
        margin-bottom: 8px;
    }

    #products ul li a {
        display: block;
        height: 100%;
    }

    #products .colors {

    }

    #products .colors .color {
        width: 12px;
        height: 12px;
        display: inline-block;
        border: 1px solid #eee;
    }

    .textcenter {
        text-align: center;
    }

    .gray {
        background: rgba(0, 0, 0, 0) url("public/images/stars.png") repeat scroll 0 -9px;
        height: 9px;
        margin: 0 auto;
        position: relative;
        width: 55px;
    }

    .red {
        background: rgba(0, 0, 0, 0) url("public/images/stars.png") repeat scroll 0 0;
        height: 9px;
        left: 0;
        position: absolute;
        top: 0;
        width: 50%;
    }

    #products .title {
        font-size: 10pt;
        text-align: left;
        padding: 0 6px;
    }

    .price_red {
        color: red;
        font-size: 10pt;
        text-decoration: line-through;
        margin: 0;
    }

    .price_green {
        color: green;
        font-size: 10pt;
        margin: 0;
    }

    .price {
        padding: 0 6px;
        position: relative;
    }

    .addtocart {
        width: 30px;
        height: 30px;
        display: block;
        background: url(public/images/addtocart-min.png) no-repeat;
        position: absolute;
        left: 2px;
        top: 22px;
    }

    #products .description {
        height: 208px;
        display: none;
        font-family: yekan;
        font-size: 10pt;
    }

    .display1 li {
        width: 100% !important;
    }

    .display1 .right {
        float: right;
        width: 217px;
    }

    .display1 .left {
        float: left;
        width: 660px;
    }

    .display1 .title {
        text-align: right !important;
        font-size: 14pt !important;
    }

    .display1 .description {
        display: block !important;
    }

    #products li img {
        width: 100%;
        max-height: 215px;
    }

</style>

<div id="products">
    <ul>


    </ul>
</div>


<script>
    function pagination(tag, page) {

        var liTag = $(tag);
        $('#pagination ul li').removeClass('active');
        liTag.addClass('active');

        doSearch(page);

    }
</script>

























