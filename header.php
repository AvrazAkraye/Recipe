<?php
require_once("db/Db.class.php");
$db = new DB();
$user = $db->query("SELECT * FROM users where `user_id` = 1");
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="avrazsardar">
      <meta name="author" content="avrazsardar">
      <title>The-GW - Simple One Page Test</title>
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor/fontawesome/css/all.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/gw.css" rel="stylesheet">
      <!-- Summernote Editor -->
      <link href="vendor/summernote/summernote-bs4.min.css" rel="stylesheet">
   </head>