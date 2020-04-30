<?php

class model_adminslider extends Model
{

    function __construct()
    {
        parent::__construct();
    }


    function getslider()
    {
        $sql = "select * from tbl_slider1 order by id desc";
        $result = $this->doSelect($sql);
        return $result;
    }


    function addSlider($data, $files)
    {

        $title = $data['title'];
        $link = $data['link'];

        $file = $files['image'];

        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmp = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $uploadOk = 1;

        $targetMain = 'public/images/slider/';
        $newName = time();

        if ($fileType != 'image/jpg' and $fileType != 'image/jpeg') {
            $uploadOk = 0;
        }

        if ($fileSize > 5242880) {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);

            $target = $targetMain . $newName . '.' . $ext;

            move_uploaded_file($fileTmp, $target);


            $sql = "insert into tbl_slider1 (title,link,img) VALUES (?,?,?)";
            $params = array($title, $link, $target);
            $this->doQuery($sql, $params);

        }


    }

    function delete($data)
    {

        $ids = $data['id'];
        $ids = implode(',', $ids);
        $sql = "delete from tbl_slider1 where id IN (" . $ids . ") ";
        $this->doQuery($sql);

    }

}


?>




















