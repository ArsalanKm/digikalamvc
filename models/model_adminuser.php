<?php

class model_adminuser extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getUsers()
    {
        $sql = "select tbl_user.*,tbl_user_level.title as levelTitle
        from tbl_user
        LEFT JOIN tbl_user_level ON tbl_user.level=tbl_user_level.id
        order by id desc
  
        ";
        $result = $this->doSelect($sql);
        return $result;
    }


    function changelevel1($ids)
    {

        $ids = implode(',', $ids);
        $sql = "update tbl_user set level=1 where id IN (". $ids. ") ";
        $this->doQuery($sql);

    }
    function changelevel2($ids)
    {

        $ids = implode(',', $ids);
        $sql = "update tbl_user set level=2 where id IN (". $ids. ") ";
        $this->doQuery($sql);

    }

}
























