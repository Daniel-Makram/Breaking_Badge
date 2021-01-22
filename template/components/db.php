<?php
function createCursor(){
    $DB_HOST = 'localhost';
    $DB_NAME = 'users';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
      return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_USER, $DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
?>