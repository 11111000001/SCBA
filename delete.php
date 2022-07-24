<?php
include_once('include/config.php');
include_once('include/connection.php');
include_once('include/global.php');
    
    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $id = $_GET['id'];
        //$fromverify = $_GET['fromverify'];
        //if($fromverify != null && $fromverify!=''){
            $query1 =  "DELETE FROM dogs WHERE id =".$id;
        //}
        //else{
         //   $query1 =  "DELETE FROM dogs WHERE dogs.id = $id";
        //}
        $request1 = exec_query(DBNAME,$query1);
        
        if ($request1 == "1") {
            header("location:home.php");
        }
    }
?>