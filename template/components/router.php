<?php
  include_once('functions.php');

  $routes = [];
  $routes['dashboard'] = 'Dashboard';
  $routes['badges'] = 'All badges';
  $routes['students'] = 'All students';
  $routes['login'] = 'Log in';
  $routes['logout'] = 'Log out';

  $requestedPage ='dashboard';
  if(!empty($_GET['p']))
  {
    $requestedPage=$_GET['p'];
  }
   
/*
  if(!isAuthenticated()){
    // include the login page
    include('./pages/login.php');
  }
  else if(isAuthenticated()){
    // include the page
    if(array_key_exists($requestedPage, $routes))
    {
      include_once(dirname('__pages__') . '/pages/'.$requestedPage.'.php');
      include_once('navbar.php');
    }
    
  }*/
  if(array_key_exists($requestedPage, $routes))
    {
      include_once(dirname('__pages__') . '/pages/'.$requestedPage.'.php');
      include_once('navbar.php');
    }
  //echo $requestedPage;
?>