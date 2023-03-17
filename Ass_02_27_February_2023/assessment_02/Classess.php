<?php
    class Student{
        private $con ="";
        public function __construct(){
            $qur = $this->con = new mysqli('localhost','root','','devxpart');
        
        } 
        public function insert($allData){
            $name = $allData['name'];
            $reg = $allData['reg'];
            $position = $allData['position'];
            $email = $allData['email'];
            $phone = $allData['phone'];
            $salary = $allData['salary'];
            $joining_month = $allData['joining_month'];
            $status = $allData['status'];

            if($name ==""){
                echo '<div class="alert alert-danger">Name fild is required</div>';
            }
            else if($reg =="")
            {
                return '<div class="alert alert-danger">Registration fild is required</div>';
            }
            else if($position =="")
            {
                return '<div class="alert alert-danger">Position fild is required</div>';
            }
            else if($email =="")
            {
                return '<div class="alert alert-danger">Email fild is required</div>';
            }
            else if($phone =="")
            {
                return '<div class="alert alert-danger">Phone fild is required</div>';
            }
            else if($salary =="")
            {
                return '<div class="alert alert-danger">Salary fild is required<div>';
            }
            else if($joining_month =="")
            {
                return '<div class="alert alert-danger">Joining Month fild is required</div>';
            }
            else if($status =="")
            {
                return '<div class="alert alert-danger">Status fild is required</div>';
            }
            else{
                $qur=  $this->con->query("INSERT INTO tbl_employe(name,reg,position,email,phone,salary,joining_month,status) VALUES('$name','$reg','$position','$email','$phone','$salary','$joining_month','$status')");
                if($qur){
                    return '<div class="alert alert-success">Data Submited Successful';
                    }
                else{
                        return 'Somethign Went Wrong';
                    }
                }
            
          
        }
        public function show(){
            $qur =  $this->con->query('SELECT * FROM tbl_employe');
            return  $qur;
         }
         public function active($id){
        
            $qur =  $this->con->query("UPDATE tbl_employe SET status='2' WHERE id='$id'");
            header("location:index.php");
            
         }
         public function inactive($id){
        
            $qur =  $this->con->query("UPDATE tbl_employe SET status='1' WHERE id='$id'");
            header("location:index.php");
            
         }
         public function Delete($id){
            $qur =  $this->con->query("DELETE FROM tbl_employe WHERE id='$id'");
            if($qur){
                header("location:index.php");
            }
            
         }
         public function findforupdate($id){
        
            $qur =  $this->con->query("SELECT * FROM tbl_employe WHERE id='$id'");
            return  $qur;
            
         }
         public function update($allData, $id){
            $name = $allData['name'];
            $reg = $allData['reg'];
            $position = $allData['position'];
            $email = $allData['email'];
            $phone = $allData['phone'];
            $salary = $allData['salary'];
            $joining_month = $allData['joining_month'];
            $status = $allData['status'];
                
            if($name ==""){
                echo 'Name fild is required';
            }
            else if($reg =="")
            {
                return 'Registration fild is required';
            }
            else if($reg =="")
            {
                return 'Registration fild is required';
            }
            else if($email =="")
            {
                return 'Email fild is required';
            }
            else if($phone =="")
            {
                return 'Phone fild is required';
            }
            else if($status =="")
            {
                return 'Status fild is required';
            }
            else{
                $qur=  $this->con->query("UPDATE tbl_employe SET name='$name',reg='$reg',position='$position',email='$email',phone='$phone',salary='$salary',joining_month='$joining_month',status='$status' WHERE id='$id'");
                if($qur){
                     header("location:index.php");
                    }
                else{
                        return 'Somethign Went Wrong';
                    }
                }

         
        }
         
         

    }   
?>