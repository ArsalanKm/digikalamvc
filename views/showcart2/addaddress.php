<script src="<?= URL ?>public/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/js//frotel/ostan.js"></script>
<script src="<?= URL ?>public/js//frotel/city.js"></script>
<script src="<?= URL ?>public/js/bootstrap-select.js"></script>
<link href="<?= URL ?>public/js/bootstrap-select.css" rel="stylesheet">
<link href="<?= URL ?>public/js/bootstrap.css" rel="stylesheet">
<script src="<?= URL ?>public/js/mahale.js"></script>

<style>
    #add_address {
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

    #add_address h4 {
        font-family: yekan;
        font-size: 13.5pt;
        padding: 8px;
        background: #eee;
        margin: 0;
        position: relative;
    }

    #add_address h4 .close {
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

    .row {
        float: right;
        font-family: yekan;
        padding: 12px 19px;
        width: 95%;

    }

    .row .right {
        float: right;
        width: 225px;
    }

    .row .right .title {
        font-size: 10.5pt;
    }

    .row .left {
        float: right;
    }

    .row .left input {
        border: 1px solid #eee;
        height: 28px;
        position: relative;
        top: 3px;
        width: 260px;
    }

    .row .left textarea {
        border: 1px solid #eee;
        height: 120px;
        position: relative;
        top: 3px;
        width: 260px;
    }

    .btn_green {
        background: #36be2b none repeat scroll 0 0;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        display: block;
        font-family: yekan;
        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
        margin: auto;
    }


</style>


<form id="addaddress" action="showcart2/addaddress" method="post">

    <div id="add_address">
        <h4>
            افزودن آدرس جدید
            <span class="close"></span>
        </h4>

        <div class="row">
            <div class="right">
            <span class="title">
                نام و نام خانوادگی تحویل گیرنده:
            </span>
            </div>
            <div class="left">
                <input name="family">
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
شماره همراه:
            </span>
            </div>
            <div class="left">
                <input name="mobile">
            </div>
        </div>
        <div class="row">
            <div class="right">
            <span class="title">
شماره ثابت:
            </span>
            </div>
            <div class="left">
                <input name="tel">
            </div>
        </div>
        <div class="row">
            <div class="right">
            <span class="title">
استان/شهر:
            </span>
            </div>
            <div class="left">

                <style>
                    .filter-option .pull-left {
                        text-align: right !important;
                    }
                </style>

                <select id="ostan" name="state"  class="selectpicker state " data-live-search="true">

                    <option value="">
                        انتخاب استان
                    </option>


                </select>

            <span class="shahr">
                <select id="city" name="city"  class="selectpicker city">
                    <option value="">
                        انتخاب شهر
                    </option>
                </select>
            </span>


                <script>
                    loadOstan('ostan');

                    $("#ostan").change(function(){
                        var i=$(this).find('option:selected').val();
                        ldMenu(i,'city');
                        $('.selectpicker').selectpicker('refresh');
                    })

                </script>


            </div>
        </div>
        <div class="row">
            <div class="right">
            <span class="title">
محله:
            </span>
            </div>
            <div class="left">
<span class="mahale">
                <select name="mahale" >
                    <option value="">
                        محله خود را انتخاب کنید
                    </option>
                </select>
            </span>

            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
آدرس پستی:
            </span>
            </div>
            <div class="left">
                <textarea name="address"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
کد پستی:
            </span>
            </div>
            <div class="left">
                <input name="codeposti">
            </div>
        </div>

        <div class="row">
            <div class="right">
            <span class="title">
            </span>
            </div>
            <div class="left" style="text-align: left;width: 100%;">
           <span onclick="submitForm();" class="btn_green" style="float: left;cursor: pointer;">
               ذخیره اطلاعات و بازگشت
           </span>
            </div>
        </div>


    </div>

</form>

<div id="dark">

</div>

<script>

    function submitForm() {

        var url = 'showcart2/addaddress/'+editAddressId;
        var data = $('#addaddress').serializeArray();
        var ostan_name=$('#ostan option:selected').text();
        var city_name=$('#city option:selected').text();

        data.push({'name':'ostan_name','value':ostan_name});
        data.push({'name':'city_name','value':city_name});
        
        $.post(url, data, function (msg) {

            window.location='showcart2';
            
        })


    }

    $('.close').click(function () {
        $('#add_address').fadeOut(200);
        $('#dark').fadeOut(200);
    });


    function showWindow() {

        editAddressId='';
        $('#add_address').fadeIn(200);
        $('#dark').fadeIn(200);
        $('#addaddress').trigger('reset');
        $('.selectpicker').selectpicker('refresh');
    }


    $('.selectpicker').selectpicker();
</script>
















