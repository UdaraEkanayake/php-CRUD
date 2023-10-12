<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function index(){
        echo 'i m index method home';
    }
    public function aboutUs(){
        echo 'i m about page'; 
    }

    public function blog($blog_var = ''){
        echo "$blog_var";
        $this->load->view('blogView');
    }

    public function getView(){
        $this->load->model('StudentModel');
        $title = $this->StudentModel->demo();
        //$data['title'] = "Hello i m Udara";
        $data['title'] = $title;
        $data['body'] = "Welcome to my website"; 
        $this->load->view('demo', $data);
    }
}

?>