<style>

    #search {
        position: relative;
        float: right;
        width: 100%;
    }

    #search input {
        width: 330px;
        height: 17px;
        border: 1px solid #eee;
    }

    #search .exist {
        margin-right: 31px;
        position: relative;
        top: 6px;
        cursor: pointer;
    }

    #search .exist_back {
        background: rgba(0, 0, 0, 0) url("public/images/btnchecked.png") no-repeat scroll 0 0;
        display: inline-block;
        height: 21px;
        width: 40px;
    }

    #search .exist.active .exist_back {
        background-position: -40px 0 !important;

    }

    #search .exist.active .exist_yesno {
        background-position: 0 0 !important;

    }

    #search .exist_yesno {
        background: rgba(0, 0, 0, 0) url("public/images/yesno.png") no-repeat scroll 0 -21px;
        height: 21px;
        left: 4px;
        position: absolute;
        top: -6px;
        width: 30px;
    }

    .display_type {
        float: left;
    }

    .type1, .type2 {
        width: 24px;
        height: 24px;
        display: block;
        float: left;
        background: url(public/images/displaytype.png) no-repeat;
        cursor: pointer;
    }

    .type1.active {
        background-position: -24px 0;
    }

    .type2.active {
        background-position: 0 -24px;
    }

    .type1 {
        background-position: -24px -24px;
    }

    #keyword_search {
        position: absolute;
        right: 317px;
        top: 7px;
        cursor: pointer;
    }

</style>

<div id="search">


    <input id="keyword" type="text">

    <img id="keyword_search" onclick="doSearch()" src="public/images/search2.png">


    <span class="exist">
            <span class="exist_back"></span>
            <span class="exist_yesno"></span>
             </span>

    <span class="yekan" style="font-size: 9.8pt;margin-right: 7px;">
                فقط نمایش کالاهای موجود
            </span>

    <span class="display_type">
                <span class="yekan" style="font-size: 9.8pt;margin-left: 7px;">
                    نوع نمایش
                </span>

                 <span class="type2"></span>
                <span class="type1"></span>


            </span>


</div>

<style>
    #sort {
        float: right;
        width: 100%;
        margin-top: 13px;
    }

</style>

<div id="sort">
            <span class="yekan" style="font-size: 9.8pt;">
                مرتب سازی بر اساس
            </span>
    <select name="orderType1" onchange="doSearch();">
        <option value="1">قیمت</option>
        <option value="2">پربازدیدترین</option>
        <option value="3">جدیدترین</option>
        <option value="4">پیشنهادویژه</option>
        <option value="5">پرفروش ترین</option>

    </select>
    <select name="orderType2" onchange="doSearch();">
        <option value="1">صعودی</option>
        <option value="2"> نزولی</option>
    </select>
    <span class="yekan" style="font-size: 9.8pt;">
تعداد نمایش
             </span>
    <select id="limit" onchange="doSearch()">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>

</div>

<script>
    $('.exist').click(function () {

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.exist_yesno', this).animate({'left': '14px'}, 400);
        } else {
            $('.exist_yesno', this).animate({'left': '4px'}, 400);
        }

        doSearch();


    });

    $('.type1').click(function () {
        $('#products').addClass('display1');
        $(this).addClass('active');
        $('.type2').removeClass('active');
    });

    $('.type2').click(function () {
        $('#products').removeClass('display1');
        $(this).addClass('active');
        $('.type1').removeClass('active');
    });
</script>