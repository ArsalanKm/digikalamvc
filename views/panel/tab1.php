<section style="<?php if($activeTab=='message'){echo 'display:block;';} ?>">

    <table cellspacing="0">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>عنوان</td>
            <td>متن</td>
            <td>وضعیت</td>

        </tr>

        <?php
        $message = $data['message'];
        $i = 1;
        foreach ($message as $row) {

            ?>

            <tr>
                <td><?= $i ?></td>
                <td><?= $row['id']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['matn']; ?></td>
                <td>
                    <?php
                    if ($row['status'] == 0) {
                        echo 'خوانده نشده';
                    } else {
                        echo 'خوانده شده';
                    }
                    ?>
                </td>

            </tr>

            <?php
            $i++;
        } ?>

    </table>

</section>














