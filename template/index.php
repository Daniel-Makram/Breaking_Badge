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

  <title>Breaking Badge</title>
</head>
<body>


<?php include_once('components/router.php'); ?>
<?php include ('./pages/login.php'); ?>


  <script src="./pages/side_script.js"></script>
</body>
</html>