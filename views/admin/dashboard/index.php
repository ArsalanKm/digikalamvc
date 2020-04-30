<?php

$activeMenu = 'dashboard';

require('views/admin/layout.php');

$orderStat = $data['orderStat'];

$keys = array_keys($orderStat);


$values=array_values($orderStat);
$values=implode(',',$values);

?>


<div class="left">

    <p class="title">
        <a>
            داشبورد
        </a>


    </p>

    <style>
        #container * {
            direction: ltr;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('#container').highcharts({
                title: {
                    text: 'نمودار آمار فروش در 7 روز گذشته',
                    x: -20 //center
                },
                subtitle: {
                    text: 'فروشگاه کلیک سایت',
                    x: -20
                },
                xAxis: {
                    categories: [<?php foreach ($keys as $date){echo "'$date',";} ?>]
                },
                yAxis: {
                    title: {
                        text: 'تعداد سفارش'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#f00'
                    }]
                },
                tooltip: {
                    valueSuffix: ''
                },

                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },

                series: [{
                    name: 'تعداد فروش',
                    data: [<?= $values ?>]
                }]
            });
        });
    </script>
    </head>
    <body>


    <script src="public/highcharts/highcharts.js"></script>
    <script src="public/highcharts/exporting.js"></script>

    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


</div>


</div>











