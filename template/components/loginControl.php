<?php
require_once('functions.php');
if(!isset($_POST["submit"])){

$email=$_POST['email'];
$pwd=$_POST['pwd'];
if(login($email,$pwd)){

    header('location: ../index.php?login=success');
}else{

    header('location: ../index.php?error=invalidCredentials');
}
}