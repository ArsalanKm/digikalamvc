<?php

class  model_adminstat extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function compareDates($date1, $date2)
    {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);
        $date1 = $date1->format('Y-m-d');
        $date2 = $date2->format('Y-m-d');
        if ($date1 > $date2) {
            return 1;
        }
        if ($date1 == $date2) {
            return 2;
        }
        if ($date1 < $date2) {
            return 3;
        }
    }

    function order($data)
    {
        $startDate = $data['year1'] . '/' . $data['month1'] . '/' . $data['day1'];
        $endDate = $data['year2'] . '/' . $data['month2'] . '/' . $data['day2'];

        $sql = "select * from tbl_order";
        $result = $this->doSelect($sql);
        $resultTotal = array();
        $ordersPaied = 0;
        $amountTotal=0;
        foreach ($result as $row) {

            $tarikh = $row['tarikh'];
            $compare1 = $this->compareDates($tarikh, $startDate);
            $compare2 = $this->compareDates($tarikh, $endDate);

            if (($compare1 == 1 or $compare1 == 2) and ($compare2 == 2 or $compare2 == 3)) {
                array_push($resultTotal, $row);
                if ($row['pay'] == 1) {
                    $ordersPaied = $ordersPaied + 1;
                }
                $amountTotal=$amountTotal+$row['amount'];
            }

        }

        return array('result'=>$resultTotal,'amount'=>$amountTotal,'order_paied'=>$ordersPaied,'startDate'=>$startDate,'endDate'=>$endDate);




    }


}

?>

















