<?php

    $servername="localhost";
    $username= "root";
    $password= "";
    $dbname= "demo";

    $task= $_POST["Task"];
    $d= date_create($_POST["Date"]);
    $date = date_format($d, "Y/m/d");
    $Status= $_POST["Status"];

    // print_r($task . " " . $date . " " . $Status); die;

    $conn = new mysqli($servername,$username,$password,$dbname);
    // print_r($conn);
    if($conn->connect_error){
        die("Connection failed!!!!". $conn->connect_error);
    }else{
        echo "Connection Established";
        
    }

    $sql= "INSERT INTO activties (Activity_Name, DUE_DATE, status) 
    VALUES('".$task."','".$date."',".$Status.")" ;
    // echo $task.$date.$Status;
    
    // print_r($sql); die;
    if ($conn->query($sql)== true){
       echo "Respoce is recorded";
       $table=" SELECT * FROM activties";
       return $table;
     } else{
         echo "Error ". $sql. "<br>". $conn->error;
        } 


?>