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
            $query = $this->db->get_where('employee', ['id' => $id]);
            // single row will be return 
            return $query->row();
            //return $query->row_array();
            //<input type="text" name="first_name" value="<?= $employee=['first_name'] 
        }
    }

?>