<?php

class model_addcomment extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function productInfo($productId)
    {
        $sql = "select * from tbl_product where id=?";
        $result = $this->doSelect($sql, array($productId), 1);
        return $result;
    }

    function getParam($productId)
    {
        $productInfo = $this->productInfo($productId);
        $categoryId = $productInfo['cat'];
        $sql = "select * from tbl_comment_param where idcategory=?";
        $result = $this->doSelect($sql, array($categoryId));
        return $result;
    }

    function saveComment($data, $productId)
    {

        $comment_params = $this->getParam($productId);
        $param_result = array();
        foreach ($comment_params as $row) {
            $paramId = $row['id'];
            $value = $_POST['param' . $paramId];
            $param_result[$paramId] = $value;
        }
        $title = $_POST['title'];
        $posotive = $_POST['posotive'];
        $negative = $_POST['negative'];
        $comment = $_POST['comment'];

        self::sessionInit();
        $userId = self::sessionGet('userId');

        $sql="select * from tbl_comment where user=? and idproduct=?";
        $data=array($userId,$productId);
        $result=$this->doSelect($sql,$data);

        if(isset($result[0])){

            $commentId=$result[0]['id'];
            $sql = "update  tbl_comment set title=?,matn=?,posotive=?,negative=?,param=? where id=? ";
            $array = array($title, $comment, $posotive, $negative,serialize($param_result),$commentId);
            $this->doQuery($sql, $array);
        }//update
        else{

            $sql = "insert into tbl_comment (title,matn,posotive,negative,idproduct,param,user) VALUES (?,?,?,?,?,?,?)";
            $array = array($title, $comment, $posotive, $negative, $productId, serialize($param_result), $userId);
            $this->doQuery($sql, $array);

        }//insert

        header('location:' . URL . 'addcomment/index/' . $productId);

    }

    function commentInfo($productId)
    {

        self::sessionInit();
        $userId = self::sessionGet('userId');

        $sql = "select * from tbl_comment where idproduct=? and user=?";
        $data = array($productId, $userId);
        $result = $this->doSelect($sql, $data, 1);
        return $result;
    }


}


?>












