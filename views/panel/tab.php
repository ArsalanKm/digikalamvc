<?php

$activeTab=$data['activeTab'];

?>

<ul id="tab">
    <li class="<?php if($activeTab=='message'){echo 'active';} ?>">
        پیغام های من
    </li>
    <li>
        سفارشات من
    </li>
    <li>
        لیست مورد علاقه
    </li>
    <li>
        نقدهای من
    </li>
    <li>
        نظرات من
    </li>
    <li class="<?php if($activeTab=='digibon'){echo 'active';} ?>" >
        دیجی بن های من
    </li>
</ul>


<div id="tabchilds">

    <?php
    require('tab1.php');
    require('tab2.php');
    require('tab3.php');
    require('tab4.php');
    require('tab5.php');
    require('tab6.php');
    ?>


</div>


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

    #tab li.active {

        background: #fff;
        border-top: 2px solid blue;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.2);

    }

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
        /*display: block;*/
    }

    #tabchilds section > table {
        width: 98%;
    }

    #tabchilds section > table td {
        text-align: center;
        padding: 4px;
        border-left: 1px solid #ccc;
        border-bottom: 1px solid #000;
    }

    #tabchilds section > table tr {
        background: #eee;
        color: #000;
        font-size: 10pt;
        font-family: yekan;

    }

    #tabchilds section > table tr:first-child {
        background: #3c3c3c;
        color: #fff;
        font-size: 10.7pt;
        font-family: yekan;
    }

    #tabchilds section > table .subtable {
        box-shadow: 0 0 5px #ccc;
        background: #fff;
        padding: 10px;
    }

    #tabchilds .myorders > table .subtable > table {

        width: 100%;
    }

    #tabchilds .myorders > table .subtable > table tr {

        background: #fff !important;
        color: #000;
        font-size: 11pt;

    }

    #tabchilds .myorders > table .subtable > table tr td:first-child {

        border-right: 1px solid #ccc;

    }

    #tabchilds .myorders > table .subtable > table tr:first-child {

        background: #eee !important;
        color: #000;
        font-size: 11pt;

    }

    h4.title {
        font-family: yekan;
        font-size: 11.4pt;
        margin: 4px 0;
        background: #eee;
        font-weight: normal;
        padding-right: 10px;
    }

    table .details {
        display: none;
    }

    .showdetails {
        cursor: pointer;
    }

    .myorders .subtable .more {

    }

    .myorders .subtable .more table {
        width: 100%;
    }

    .myorders .subtable .more tr {
        background: #fff !important;
        color: #000 !important;
        font-size: 10pt !important;
    }

    .myorders .subtable .more tr td {

        width: 33%;
    }

    .myorders .subtable .more tr td:last-child {

        border-left: none !important;
    }


</style>