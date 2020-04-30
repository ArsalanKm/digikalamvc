<?php

class model_product extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function productInfo($id)
    {

        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        $price = $result['price'];
        $discount = $result['discount'];
        $price_calculate = $this->calculateDiscount($price, $discount);
        $result['price_discount'] = $price_calculate[0];
        $result['price_total'] = $price_calculate[1];

        $first_row = $result;
        $time_special = $first_row['time_special'];

        $options = self::getoption();
        $duration_special = $options['special_time'];
        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);
        $result['date_special'] = $date;

        $colors = $result['colors'];
        $colors = explode(',', $colors);
        $colors = array_filter($colors);
        $all_colors = array();
        foreach ($colors as $color) {
            $colorInfo = $this->colorInfo($color);
            array_push($all_colors, $colorInfo);

        }
        $result['all_colors'] = $all_colors;

        $garantee = $result['garantee'];
        $garantee = explode(',', $garantee);
        $garantee = array_filter($garantee);
        $all_garantee = array();
        foreach ($garantee as $id) {
            $garanteeInfo = $this->garanteeInfo($id);
            array_push($all_garantee, $garanteeInfo);

        }
        $result['all_garantee'] = $all_garantee;


        return $result;

    }

    function colorInfo($id)
    {
        $sql = "select * from tbl_color where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }

    function garanteeInfo($id)
    {
        $sql = "select * from tbl_garantee where id=?";
        $result = $this->doSelect($sql, array($id), 1);
        return $result;

    }

    function onlyclicksite()
    {
        $sql = "select * from tbl_product where onlyclicksite=1";
        $result = $this->doSelect($sql);
        return $result;
    }


    function naghd($id)
    {
        $sql = 'select * from tbl_naghd where idproduct=?';
        $result = $this->doSelect($sql, array($id));
        return $result;
    }

    function fanni($idcategory, $idproduct)
    {

        $sql = "select * from tbl_attr where idcategory=? and parent=0";
        $params = array($idcategory);

        $result = $this->doSelect($sql, $params);

        foreach ($result as $key => $row) {
            $sql2 = "select a.title,b.idval,c.val as valTitle
            from tbl_attr a
            LEFT JOIN tbl_product_attr b ON a.id=b.idattr  and b.idproduct=?
            LEFT JOIN tbl_attr_val c ON b.idval=c.id
            WHERE a.parent=? ";
            $params = array($idproduct, $row['id']);
            $result2 = $this->doSelect($sql2, $params);
            $result[$key]['children'] = $result2;

        }

        return $result;

    }


    function comment_param($idcategory, $idproduct)
    {

        $sql = "select * from tbl_comment_param where idcategory=?";
        $x = array($idcategory);
        $result = $this->doSelect($sql, $x);

        $sql = "select * from tbl_comment where idproduct=?";
        $res = $this->doSelect($sql, array($idproduct));
        $scores_total = array();

        foreach ($res as $row) {
            $params_score = $row['param'];
            $params_score = unserialize($params_score);

            foreach ($params_score as $key => $val) {
                $param_id = $key;
                $score = $val;
                if (!isset($scores_total[$param_id])) {
                    $scores_total[$param_id] = 0;
                }
                $scores_total[$param_id] = $scores_total[$param_id] + $score;

            }


        }

        $total_comments = sizeof($res);

        foreach ($scores_total as $key => $val) {

            $val = $val / $total_comments;
            $scores_total[$key] = $val;

        }


        return array($result, $scores_total);
    }


    function getComment($idproduct)
    {
        $sql = "select * from tbl_comment where idproduct=?";
        $data = array($idproduct);
        $result = $this->doSelect($sql, $data);
        return $result;
    }

    function getQuestions($idproduct)
    {

        $sql = "select * from tbl_question where idproduct=? and parent=0";

        $questions = $this->doSelect($sql, array($idproduct));

        $sql = "select * from tbl_question where parent!=0";
        $all_answers = $this->doSelect($sql);
        $all_answers_new = array();

        foreach ($all_answers as $answer) {
            $parent = $question_id = $answer['parent'];
            $all_answers_new[$question_id] = $answer;
        }

        return array($questions, $all_answers_new);

    }


    function getGallery($idproduct)
    {
        $sql = "select * from tbl_gallery where idproduct=? order by threed desc";
        $result = $this->doSelect($sql, array($idproduct));
        return $result;
    }

    function addToBasket($productId, $color, $garantee)
    {

        $cookie = self::getBasketCookie();

        $sql = "select * from tbl_basket where  cookie=? and idproduct=? and color=? and garantee=? ";
        $params = array($cookie, $productId, $color, $garantee);
        $result = $this->doSelect($sql, $params);

        if (isset($result[0])) {
            $sql = "update tbl_basket set tedad=tedad+1 where cookie=? and idproduct=? and color=? and garantee=? ";

        } else {
            $sql = "insert into tbl_basket (cookie,idproduct,tedad,color,garantee) values (?,?,1,?,?)";
        }
        $params = array($cookie, $productId, $color, $garantee);
        $this->doQuery($sql, $params);

        $basket = $this->getBasket();
        $all = 0;
        foreach ($basket[0] as $row) {
            $all = $all + $row['tedad'];
        }
        return $all;


    }

}

?>













