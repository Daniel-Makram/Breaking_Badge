<?php
  include_once('functions.php');


  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';

  $routes['CreateBadge'] = 'Create Badges';
  $routes['CreateUser']='Create User';

  


  include_once('navbar.php');
  
  if(isset($_GET["success"])) {
    phpAlert('Successfully added badge to DB ! ');
  }
  if(isset($_GET["success1"])) {
    phpAlert('Successfully added user to DB ! ');
  }


  // if ?=p is not defined in url defaults to dashboard  (?=p is the link to naviguate to )
  $requestedPage='dashboard';
  if(!empty($_GET['p'])){
    $requestedPage = $_GET['p'];
  }


  if(!isAuthenticated()){
    // include the login page
    include('./pages/login.php');
  }

  
  if(array_key_exists($requestedPage, $routes))
    {
      include_once(dirname('__pages__') . '/pages/'.$requestedPage.'.php');
      include_once('navbar.php');
    }
  //echo $requestedPage;

  
  

?>