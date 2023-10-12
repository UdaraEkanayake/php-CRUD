<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller{

    public function index(){
        $this->load->model('StudentModel','stud');
        //$std = $this->StudentModel->studentData();

        //$student = new StudentModel;
        //$std = $student->studentData();

        $std = $this->stud->studentData();
        //$stdClass = $this->stud->studentClass();
        echo "Student name is ".$std;
    }

    public function show($id){
        //echo $id;
        $this->load->model('StudentModel','stud');
        $selectedStudent = $this->stud->studentShow($id);
        echo $selectedStudent;
    }

   
                
}
?>