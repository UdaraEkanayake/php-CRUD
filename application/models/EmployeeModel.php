<?php

    class EmployeeModel extends CI_Model{
        public function insertEmployee($data){
            return $this->db->insert('employee', $data); 
        }

        public function getEmployee(){
            $query = $this->db->get('employee');

            return $query->result();
        }

        public function editEmployee($id){

            $this->db->select('employee.*,employee_designation.id as desId');
            $this->db->from('employee');
            $this->db->join('employee_designation','employee_designation.id=employee.designation','left');
            $this->db->where('employee.id',$id);
            $query = $this->db->get();
            // single row will be return 
            return $query->row();
            //return $query->row_array();
            //<input type="text" name="first_name" value="<?= $employee=['first_name'] 
        }

        public function getAdress(){
            $this->db->get('employee');
        }



        // update a particular employee details
        public function updateEmployee($data, $id){
            return $this->db->update('employee', $data, ['id' => $id]);
        }

        public function deleteEmployee($id){
            $this->db->delete('employee',['id' => $id]);
        }

        public function getDesignationData(){
            $query = $this->db->get('employee_designation');
            
            return $query->result();
        }
    }

?>