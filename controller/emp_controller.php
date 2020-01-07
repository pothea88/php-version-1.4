<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    function view(&$data){
        $data['page'] = "employee/view";
        $data['employee'] = emp_view();   
    }
    function add_emp(&$data){
        $data['page'] = "employee/add";
        $data['province'] = m_province(); 
    }
    function add_form(&$data){
        $data = new_employee($_POST);
        if($data){
            $action = 'view';
        }else{
            $action = 'add_emp';
        }
        header("Location:index.php?action=$action");
    }
    function edit(&$data) {
        $data['edit_employee'] = e_employee();
        $data['edit_province'] = e_province();
        $data['page'] = "employee/edit";
    }
    function edit_form(&$data){
        $data = edit_employee($_POST);
        if($data){
            $process = 'view';
        }else{
            $process = 'edit';
        }
        header("Location:index.php?action=$process");
    }
?>