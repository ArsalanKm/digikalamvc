<?php
$userInfo = $data['userInfo'];
?>

<div class="box">
    <div class="header">
        اطلاعات کاربر
    </div>
    <div class="content">
        <table>
            <tr>
                <td>
                    <span class="title">
                        نام و نام خانوادگی:
                    </span>
                    <span class="value">
<?= $userInfo['family'] ?>

                    </span>
                </td>

                <td>
                      <span class="title">
آدرس ایمیل:
                    </span>
                    <span class="value">
<?= $userInfo['email'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
کد ملی:
                      </span>
                    <span class="value">
<?= $userInfo['code_meli'] ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="title">

شماره تلفن ثابت:
                    </span>
                    <span class="value">
<?= $userInfo['tel'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
شماره همراه:
                      </span>
                    <span class="value">
<?= $userInfo['mobile'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
تاریخ تولد:
                      </span>
                    <span class="value">
<?= $userInfo['tavalod'] ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="title">

محل سکونت:
                    </span>
                    <span class="value">
<?= $userInfo['address'] ?>
                    </span>
                </td>

                <td>
                      <span class="title">
جنسیت:
                      </span>
                    <span class="value">
                        <?php
                        $jensiat = $userInfo['jensiat'];
                        if ($jensiat == 1) {
                            echo 'مرد';
                        } else {
                            echo 'زن';
                        }

                        ?>
                    </span>
                </td>

                <td>
                      <span class="title">
دریافت خبرنامه:
                      </span>
                    <span class="value">
  <?php
  $khabarname = $userInfo['khabarname'];
  if ($khabarname == 1) {
      echo 'بله';
  } else {
      echo 'خیر';
  }

  ?>
                    </span>
                </td>
            </tr>

            <tr>
                <td colspan="3" style="text-align: left;">
                    <a href="panel/profile">
                        <img src="public/images/Edit.png">
                    </a>

                    <a href="panel/changepass">
                        <img src="public/images/ChangePassword.png">
                    </a>
                </td>
            </tr>

        </table>
    </div>
</div>