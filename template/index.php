<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
  <title>Breaking Badge</title>
</head>
<body>


<?php include_once('components/router.php'); ?>
<?php include ('./pages/dashboard.php'); ?>

<!-- if($_SESSION){
    include('pages/dashboard.php');
        }else{
          include('pages/login.php');
        } -->
  
</body>
</html>