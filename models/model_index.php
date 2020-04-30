<?php

class model_index extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getSlider1()
    {

        $sql = "select * from tbl_slider1";
        $result = $this->doSelect($sql);
        return $result;

    }


    function getSlider2()
    {

        $sql = "select * from tbl_product WHERE special=?";
        $values = array(1);
        $result = $this->doSelect($sql, $values);

        foreach ($result as $key => $row) {
            $price_total = $this->calculateDiscount($row['price'], $row['discount']);
            $price_total=$price_total[1];
            $result[$key]['price_total'] = $price_total;
        }

        @$first_row = $result[0];
        $time_special = $first_row['time_special'];

        $options = self::getoption();
        $duration_special = $options['special_time'];

        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);

        return array($result, $date);
    }


    function onlyclicksite()
    {
        $sql = "select * from tbl_product where onlyclicksite=1";
        $result = $this->doSelect($sql);
        return $result;
    }

    function mostviewd()
    {

        $sql = "select * from tbl_option where setting='limit_slider' ";
        $result = $this->doSelect($sql, array(), 1);
        $limit = $result['value'];

        $sql = 'select * from tbl_product order by viewd desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function lastproduct()
    {

        $option=self::getoption();
        $limit=$option['limit_slider'];

        $sql = 'select * from tbl_product order by id desc limit ' . $limit . ' ';
        $result = $this->doSelect($sql);
        return $result;
    }

}


?>











