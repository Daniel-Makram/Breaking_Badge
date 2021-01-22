<?php
if(!isset($_POST["submit"])){
    
    $email=$_POST["email"];
    $password =$_POST["pwd"];
    $firstname =$_POST["firstname"];
    $lastname =$_POST["lastname"];
    $account_type =$_POST["account_type"];

    require_once 'functions.php';

    createUsers($email,$password,$firstname,$lastname,$account_type);
    header("location: ../?p=dashboard&success1");
  
    
    exit();
}else{
    header("location: ../pages/dashboard.php?error=noSubmit");
   
    exit();
}  