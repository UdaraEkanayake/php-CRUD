<?php
    class StudentModel extends CI_Model{

        public function studentData(){
            $stdClass = $this->studentClass();
            return $stud_name = "Udara.His class is ". $stdClass;
        }

        private function studentClass(){
            return $stud_class = 'HDSE';
        }

        public function studentShow($id){
            if($id == '1'){
               return $result = "User 1";     
            }
            elseif($id == '2'){
               return $result = "User 2";
            }
        }


        public function demo(){
            return $title = "Hello i m Udara Ekanayake";
        }
    }
?>