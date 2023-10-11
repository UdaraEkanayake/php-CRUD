<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function index(){
        echo 'i m index method';
    }
    public function aboutUs(){
        echo 'i m about page'; 
    }
}