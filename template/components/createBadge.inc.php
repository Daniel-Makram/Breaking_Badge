<?php
if(!isset($_POST["submit"])){
    
    $badge_name =$_POST["name"];
    $badge_colour =$_POST["color"];
    $badge_desc =$_POST["description"];
    $badge_shape =$_POST["shape"];
    $badge_cat =$_POST["category"];

    require_once 'functions.php';

    createBadge($badge_name,$badge_colour,$badge_desc,$badge_shape,$badge_cat);

    header("location: ../?p=CreateBadge&success");
    // echo'Created a badge called '.$badge_name.' with this '.$badge_colour.' colour and this '.$badge_shape.' in this '.$badge_cat.' described: '.$badge_desc;
    exit();
}else{
    header("location: ../pages/createBadge.php?error=noSubmit");
    exit();
}                                           