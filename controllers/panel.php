<?php

class Panel extends Controller
{

    public $checkLogin = '';

    function __construct()
    {
        Model::sessionInit();
        $this->checkLogin = Model::sessionGet('userId');
        if ($this->checkLogin == false) {
            header('location:' . URL . 'login');
        }

    }

    function index($activeTab = 'message')
    {

        $comments = $this->model->getComment();
        $result = $this->model->getUserInfo();
        $Stat = $this->model->getStat();
        $messgae = $this->model->getMassage();
        $order = $this->model->getOrder();
        $folder = $this->model->getFolder();
        $code = $this->model->getCode();
        $data = array('userInfo' => $result, 'Stat' => $Stat, 'message' => $messgae, 'order' => $order, 'folder' => $folder,
            'comments' => $comments, 'code' => $code, 'activeTab' => $activeTab);
        $this->view('panel/index', $data);
    }

    function getfavorit()
    {
        $folderId = $_POST['folderId'];
        $result = $this->model->getFavorit($folderId);
        echo json_encode($result);
    }

    function saveEdit()
    {

        $folderId = $_POST['folderId'];
        $newName = $_POST['newName'];
        $this->model->saveEdit($folderId, $newName);
    }

    function deleteFavorit()
    {
        $favoritId = $_POST['favoritId'];
        $this->model->deleteFavorit($favoritId);
    }

    function deletecomment($commentId)
    {

        $this->model->deleteComment($commentId);
    }

    function saveCode()
    {

        $this->model->saveCode($_POST);
    }

    function profile()
    {

        $userInfo = $this->model->getUserInfo();
        $data = array('userInfo' => $userInfo);
        $this->view('panel/profile', $data);
    }

    function editprofile()
    {

        $data = $_POST;
        $this->model->editProfile($data);
        header('location:' . URL . 'panel/profile');

    }

    function changepass()
    {

        if (isset($_POST['pass_old'])) {
            $data = $_POST;
            $this->model->changePass($data);
        }
        $this->view('panel/changepass');
    }

    function logout()
    {

        $this->model->logout();
        header('location:' . URL . 'index');
    }


}


?>
















