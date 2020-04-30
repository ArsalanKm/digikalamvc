<?php
class  Adminstat extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->view('admin/stat/index');

    }

    function order(){
        $data=$_POST;
        $stat=$this->model->order($data);
        $x=array('stat'=>$stat);
        $this->view('admin/stat/order',$x);

    }


}

?>