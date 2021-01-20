<?php
/*
  $DB_HOST = 'localhost';
  $DB_NAME = 'users';
  $DB_USER = 'root';
  $DB_PASSWORD ='';
*/
  function createCursor(){
      return new PDO("mysql:host=localhost;dbname=users;charset=utf8","root","",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
?>