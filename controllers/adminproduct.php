<?php

class Adminproduct extends Controller
{


    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $products = $this->model->getProduct();

        $data = array('product' => $products);

        $this->view('admin/product/index', $data);
    }

    function addproduct($productId = '')
    {

        if (isset($_POST['title'])) {


            $this->model->addproduct($_POST, $productId, $_FILES['image']);

        }

        $category = $this->model->getCategory();
        $color = $this->model->getColor();
        $garantee = $this->model->getGarantee();
        $productInfo = $this->model->getProductInfo($productId);


        $data = array('category' => $category, 'color' => $color, 'garantee' => $garantee, 'productInfo' => $productInfo);
        $this->view('admin/product/addproduct', $data);
    }


    function naghd($productId)
    {

        $productInfo = $this->model->getProductInfo($productId);
        $naghd = $this->model->getNaghd($productId);
        $data = array('naghd' => $naghd, 'productInfo' => $productInfo);
        $this->view('admin/product/naghd', $data);

    }


    function addnaghd($productId, $naghdId = '')
    {

        if (isset($_POST['title'])) {

            $this->model->addNaghd($productId, $_POST, $naghdId);
            header('location:' . URL . 'adminproduct/naghd/' . $productId);
        }

        $productInfo = $this->model->getProductInfo($productId);
        $naghdInfo = $this->model->naghdInfo($naghdId);
        $data = array('productInfo' => $productInfo, 'naghdInfo' => $naghdInfo);
        $this->view('admin/product/addnaghd', $data);
    }


    function deletenaghd($productId)
    {

        $this->model->deleteNaghd($_POST['id']);
        header('location:' . URL . 'adminproduct/naghd/' . $productId);
    }

    function deleteproduct()
    {
        $this->model->deleteProduct($_POST['id']);
        header('location:' . URL . 'adminproduct/index');
    }


    function attr($productId)
    {

        if (isset($_POST['submited'])) {
            $this->model->editAttr($_POST, $productId);
        }

        $attr = $this->model->getproductAttr($productId);
        $productInfo = $this->model->getProductInfo($productId);
        $data = array('attr' => $attr, 'productInfo' => $productInfo);
        $this->view('admin/product/attr', $data);
    }

    function gallery($productId)
    {

        if(isset($_FILES['image'])){
            $this->model->addGallery($productId,$_FILES['image']);
        }
        
        $gallery = $this->model->getGallery($productId);
        $productInfo=$this->model->getProductInfo($productId);

        $data = array('gallery' => $gallery,'productInfo'=>$productInfo);

        $this->view('admin/product/gallery', $data);

    }
    
    
    function deletegallery($productId){
    
        $this->model->deleteGallery($_POST['id']);
        header('location:'.URL.'adminproduct/gallery/'.$productId);
    }

}

?>











