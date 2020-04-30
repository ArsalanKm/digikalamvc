<?php

class  model_admincategory extends Model
{

    public $allChildrenIds = array();

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function getCategory()
    {
        $sql = "select * from tbl_category";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getChildren($idcategory)
    {

        $sql = "select * from tbl_category where parent=?";
        $result = $this->doSelect($sql, array($idcategory));
        return $result;
    }

    function getParents($idcategory)
    {

        $categoryInfo = $this->categoryInfo($idcategory);
        $parent = $categoryInfo['parent'];
        $all_parents = array();

        while ($parent != 0) {
            $sql = "select * from tbl_category where id=?";
            $parentCategory = $this->doSelect($sql, array($parent), 1);
            array_push($all_parents, $parentCategory);
            $parent = $parentCategory['parent'];

        }

        return $all_parents;

    }


    function categoryInfo($idcategory)
    {
        $sql = "select * from tbl_category where id=?";
        $result = $this->doSelect($sql, array($idcategory), 1);
        return $result;
    }


    function addCategory($title, $parent, $edit, $categoryId)
    {

        if ($edit == '') {

            $sql = "insert into tbl_category (title,parent) values (?,?)";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->execute();
        } else {

            $sql = "update tbl_category set title=?,parent=? where id=? ";
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $parent);
            $stmt->bindValue(3, $categoryId);
            $stmt->execute();

        }
    }


    function getChilds($catIds)
    {

        $childrenIds = array();
        foreach ($catIds as $catId) {
            $children = $this->getChildren($catId);
            foreach ($children as $child) {
                array_push($childrenIds, $child['id']);
            }
        }
        return $childrenIds;
    }


    function deleteCategory($ids = array())
    {

        $this->allChildrenIds = array_merge($this->allChildrenIds, $ids);

        while (sizeof($ids) > 0) {
            $childrenIds = $this->getChilds($ids);
            $this->allChildrenIds = array_merge($this->allChildrenIds, $childrenIds);
            $ids = $childrenIds;

        }

        $x = join(',', array_values($this->allChildrenIds));

        $sql = "delete  from tbl_category where id IN (" . $x . ")";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();


    }

    function getAttr($categoryId, $attrId)
    {
        $sql = "select * from tbl_attr where idcategory=? and parent=? order by id desc";
        $data = array($categoryId, $attrId);
        $result = $this->doSelect($sql, $data);
        return $result;
    }

    function attrInfo($attrId)
    {
        $sql = "select * from tbl_attr where id=?";
        $data = array($attrId);
        $result = $this->doSelect($sql, $data, 1);
        return $result;
    }


    function addAttr($data, $categoryId, $editId)
    {

        if ($editId == '') {
            $sql = "insert into tbl_attr (title,parent,idcategory) VALUES (?,?,?)";
            $params = array($data['title'], $data['parent'], $categoryId);
            $this->doQuery($sql, $params);
        } else {
            $sql = "update tbl_attr set title=?,parent=? where id=?";
            $params = array($data['title'], $data['parent'], $editId);
            $this->doQuery($sql, $params);
        }
    }


    function deleteAttr($ids = array())
    {

        $sql = "select * from tbl_attr";
        $attr = $this->doSelect($sql);

        foreach ($attr as $row) {
            $parent = $row['parent'];
            if (in_array($parent, $ids)) {
                array_push($ids, $row['id']);
            }
        }


        $x = join(',', $ids);

        $sql = "delete  from tbl_attr where id IN (" . $x . ")";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();


    }

    function getAttrVal($attrId)
    {

        $sql = "select * from tbl_attr_val where idattr=?";
        $result = $this->doSelect($sql, array($attrId));
        return $result;
    }

    function saveAttrVal($data, $attrId)
    {

        $attrValNew = $data['attrvalnew'];
        $attrValNew = array_filter($attrValNew);
        foreach ($attrValNew as $val) {
            $sql = "insert into tbl_attr_val (idattr,val) VALUES (?,?)";
            $params = array($attrId, $val);
            $this->doQuery($sql, $params);
        }

        unset($data['attrvalnew']);
        foreach ($data as $key => $val) {

            $key = explode('-', $key);
            if (isset($key[1])) {
                $valId = $key[1];

                if($val!='') {
                    $sql = "update tbl_attr_val set val=? where id=?";
                    $params = array($val, $valId);
                    $this->doQuery($sql, $params);
                }else{
                    $sql = "delete from tbl_attr_val where id=?";
                    $params = array($valId);
                    $this->doQuery($sql, $params);
                }
            }

        }

    }

}


?>













