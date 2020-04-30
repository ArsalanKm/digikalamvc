<?php


class Index extends Controller
{

    function __construct()
    {
        //echo 'we are in index controller!<br>';
    }

    function index()
    {

        $slider1 = $this->model->getSlider1();
        $slider2 = $this->model->getSlider2();
        $onlyclicksite=$this->model->onlyclicksite();
        $mostviewd=$this->model->mostviewd();
        $lastproduct=$this->model->lastproduct();
        
        $slider2_items = $slider2[0];
        $date_end = $slider2[1];

        $data = array($slider1, $slider2_items,$date_end,$onlyclicksite,$mostviewd,$lastproduct);

        $this->view('index/index', $data);

    }


}


?>