<?php include('functions.php');
$email=$_POST['email'];
$pass=$_POST['pwd'];
if(!empty($email))
    {
            if(login($email,$pass))
            {            
                //echo 'conecté';
                header('location:../pages/dashboard.php/?p=dashboard');
                if (isAdmin())
                {
                    header('location:../pages/dashboard.php/?p=dashboard&isAdmin');

                }
                else
                {
                    header('location:../pages/dashboard.php/?p=dashboard&isNotAdmin');
                }
               
            }
            else
            {
                //header('location:pages/')
                echo 'ko';
            }
    }
?>