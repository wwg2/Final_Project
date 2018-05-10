<?php

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=wwg2;host=sql2.njit.edu', 'wwg2','JF6UOlD8');

if(!isset($_SESSION['user_id'])) {
  die('You are not signed in.');
  }
?>
