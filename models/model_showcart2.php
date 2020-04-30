<?php

class model_showcart2 extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function addAddress($data, $editAddressId)
    {

        $family = $data['family'];
        $mobile = $data['mobile'];
        $tel = $data['tel'];
        $ostan = $data['state'];
        $city = $data['city'];
        $mahale = $data['mahale'];
        $codeposti = $data['codeposti'];
        $address = $data['address'];
        $ostan_name = $data['ostan_name'];
        $city_name = $data['city_name'];

        Model::sessionInit();
        $userId = Model::sessionGet('userId');

        echo $editAddressId;

        if ($editAddressId == '') {
            $sql = "insert into tbl_user_address (userid,family,mobile,tel,ostan,city,mahale,codeposti,address,ostan_name,city_name) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $params = array($userId, $family, $mobile, $tel, $ostan, $city, $mahale, $codeposti, $address, $ostan_name, $city_name);

        } else {
            $sql = "update tbl_user_address set family=?,mobile=?,tel=?,ostan=?,city=?,mahale=?,codeposti=?,address=?,ostan_name=?,city_name=? WHERE id=?";
            $params = array($family, $mobile, $tel, $ostan, $city, $mahale, $codeposti, $address, $ostan_name, $city_name, $editAddressId);
        }
        $this->doQuery($sql, $params);

    }

    function getAddress()
    {
        $sql = "select * from tbl_user_address where userid=?";
        Model::sessionInit();
        $userId = Model::sessionGet('userId');
        $params = array($userId);
        $result = $this->doSelect($sql, $params);
        return $result;
    }

    function getAddressInfo($addressId)
    {

        $sql = "select * from tbl_user_address where id=?";
        $params = array($addressId);
        $result = $this->doSelect($sql, $params, 1);
        return $result;
    }

    function editAddress($addressId)
    {

    }


    function getPostType()
    {
        $sql = "select * from tbl_post_type";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getPostPrice($data)
    {

        $addressId= $data['addressId'];
        $sql="select * from tbl_user_address where id=?";
        $params=array($addressId);
        $result=$this->doSelect($sql,$params,1);

        self::sessionInit();
        self::sessionSet('addressInfo',serialize($result));

        $cityId = $data['cityId'];

        $postPrice=$this->calculatePostPrice($cityId);
        
        echo json_encode($postPrice);

    }


    function sessionPostType($data){

        self::sessionInit();
        self::sessionSet('postType',$data['postTypeId']);
       echo  self::sessionGet('postType');
    }

    function deleteAddress($id){
        $sql="delete from tbl_user_address where id=?";
        $this->doQuery($sql,array($id));
    }


  

}



?>


















