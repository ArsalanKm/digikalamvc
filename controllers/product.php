<?php

class Product extends Controller
{

    function __construct()
    {

    }

    function index($id, $activeTab = 'naghd')
    {

        $productInfo = $this->model->productInfo($id);
        $onlyclicksite = $this->model->onlyclicksite();
        $gallery = $this->model->getGallery($id);

        $data = array('productInfo' => $productInfo, 'onlyclicksite' => $onlyclicksite, 'gallery' => $gallery, 'activeTab' => $activeTab);
        $this->view('product/index', $data);
    }

    function tab($id, $idcategory)
    {

        $number = $_POST['number'];
        if ($number == 0) {
            $naghd = $this->model->naghd($id);
            $data = array($naghd);
            $this->view('product/tab1', $data, 1, 1);
        }
        if ($number == 1) {

            $fanni = $this->model->fanni($idcategory, $id);
            $data = array($fanni);
            $this->view('product/tab2', $data, 1, 1);
        }
        if ($number == 2) {
            $comment_param = $this->model->comment_param($idcategory, $id);

            $comment_param_names = $comment_param[0];
            $comment_param_scores = $comment_param[1];

            $comments = $this->model->getComment($id);
            $data = array($comment_param_names, $comments, $comment_param_scores,$id);
            $this->view('product/tab3', $data, 1, 1);
        }
        if ($number == 3) {
            $getQuestions = $this->model->getQuestions($id);
            $questions = $getQuestions[0];
            $answers = $getQuestions[1];
            $data = array($questions, $answers,$id);
            $this->view('product/tab4', $data, 1, 1);
        }
    }


    function addtobasket($productId, $color = '', $garantee = '')
    {

        echo $all = $this->model->addToBasket($productId, $color, $garantee);


    }


}


?>

















