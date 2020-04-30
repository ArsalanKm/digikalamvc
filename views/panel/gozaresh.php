<?php
$Stat=$data['Stat'];
?>

<div class="box">
    <div class="header">
        گزارش عملکرد
    </div>
    <div class="content">
        <table>
            <tr>
                <td>
                    <span class="title">
تعداد کل سفارشات:
                    </span>
                    <span class="value">
                      <?= $Stat['order_number'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
تعداد کل دیجی بن دریافتی:
                      </span>
                    <span class="value">
                        کلیک سایت
                    </span>
                </td>

                <td>
                      <span class="title">
تعداد نظرات ارسال شده:
                      </span>
                    <span class="value">
<?= $Stat['comment_number']; ?>

                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="title">

تعداد سفارشات در انتظار تایید:
                    </span>
                    <span class="value">
<?= $Stat['order_taeed_number']; ?>
                    </span>
                </td>

                <td>
                      <span class="title">
دیجی بن مصرفی:
                      </span>
                    <span class="value">
                        کلیک سایت
                    </span>
                </td>

                <td>
                      <span class="title">
تعداد نقدهای ارسال شده:
                      </span>
                    <span class="value">
-
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">

سفارشات در حال پردازش:
                    </span>
                    <span class="value">
<?= $Stat['order_pardazesh_number']; ?>
                    </span>
                </td>

                <td>
                      <span class="title">
دیجی بن های باطل شده:
                      </span>
                    <span class="value">
                        کلیک سایت
                    </span>
                </td>

                <td>
                      <span class="title">
پیغام های خوانده نشده:
                      </span>
                    <span class="value">
<?= $Stat['message_number'] ?>
                    </span>
                </td>
            </tr>


        </table>
    </div>
</div>
