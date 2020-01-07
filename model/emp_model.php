<?php
    function emp_view(){
        include_once "connection.php";
        $query = "SELECT emp_fname,emp_lname, pro_name, emp_id
        FROM tblemployee INNER JOIN empprovince
        ON emp_province_id = pro_id";
        $get = mysqli_query($db,$query);
        $rows = [];
        if($get && mysqli_num_rows($get) > 0){
            foreach ($get as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
    function m_province(){
        include_once "connection.php";
        $query = "SELECT * FROM empprovince";
        $result = mysqli_query($db,$query);
        $row = [];
        if($result && mysqli_num_rows($result)){
            foreach($result as $record){
                $row[] = $record;
            }
        }
        return $row;
    }
    function new_employee(){
        include_once "connection.php";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $province = $_POST['province'];
        $query = "INSERT INTO tblemployee(emp_fname,emp_lname,emp_province_id)
        VALUES ('$fname','$lname',$province)";
        $insert = mysqli_query($db,$query);
        return $insert;
    }
    //query employee
    function e_employee(){
        include_once "connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM tblemployee WHERE emp_id = $id";
        $result = mysqli_query($db,$query);
        $record = [];
        if($result && mysqli_num_rows($result)){
            foreach ($result as $row){
                $record[] = $row;
            }
        }
        return $record;
    }
    //query province
    function e_province(){
        include "connection.php";
        $query = "SELECT * FROM empprovince";
        $result = mysqli_query($db,$query);
        $row = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $record){
                $row[] = $record;
            }
        }
        return $row;
    }
    function edit_employee(){
        include_once "connection.php";
        // $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        // $province = $_POST['provinces'];
        // var_dump($province);die();
        $query = "UPDATE tblemployee SET emp_fname = '$fname', emp_lname = '$lname'
        ";
        $result = mysqli_query($db,$query);
    }
?>