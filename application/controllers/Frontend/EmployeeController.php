<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class EmployeeController extends CI_Controller{

          public function index(){
            $this->load->view('template/header');
            
            // get the table data
            $this->load->model('EmployeeModel','emp');

            //$data['employee'] = $this->emp->getEmployee();

            //$data parse into the employee.php

            //$this->load->view('frontend/employee', $data);

            $employee = $this->emp->getEmployee();
            $this->load->view('frontend/employee', ['employee'=>$employee]);
            $this->load->view('template/footer');
          }  

          public function create(){
            $this->load->model('EmployeeModel','emp');
            // get employee designation data paese it to add employee
            $empdata['designation']=$this->emp->getDesignationData();
        
            $this->load->view('template/header');
            $this->load->view('frontend/create',$empdata);
            $this->load->view('template/footer');
          }

          public function store(){
            $this->form_validation->set_rules('first_name', 'Firstname', 'required');
            $this->form_validation->set_rules('last_name', 'Lastname', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            
            if($this->form_validation->run()){
                $data = [
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'designation' => $this->input->post('desId')
                  
                ];
                $this->load->model('EmployeeModel','emp');
                $this->emp->insertEmployee($data);
                redirect(base_url('employee'));

            }else{
                $this->create();
                //redirect(base_url('employee/add'));
            }
          
          }

          public function edit($id){
            $this->load->view('template/header');
            $this->load->model('EmployeeModel','emp');
            //parse employee data 
            $data['employee'] = $this->emp->editEmployee($id);
            
            $data['designation']=$this->emp->getDesignationData();
            // push $data to the edit view (fetching the data)
            $this->load->view('frontend/edit', $data);
            $this->load->view('template/footer');

          }

          public function update($id){

            $this->form_validation->set_rules('first_name', 'Firstname', 'required');
            $this->form_validation->set_rules('last_name', 'Lastname', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            
            if($this->form_validation->run()) :
            $data = [
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
              'phone' => $this->input->post('phone'),
              'email' => $this->input->post('email'),
              'designation' => $this->input->post('desId')
            ];

            $this->load->model('EmployeeModel','emp');
            $this->emp->updateEmployee($data, $id);
            redirect(base_url('employee'));

            else :
                //$this->c();
                $this->edit($id);
            endif ;
          }

          public function delete($id){
            $this->load->model('EmployeeModel','emp');
            $this->emp->deleteEmployee($id);
            redirect(base_url('employee'));
          }
    }
?>