<?php
$companyname ="Bristo";
include ('includes/arrays.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title><?php  echo TITLE; ?></title>
</head>
<body id ="final-example">

     <div class ="container">
        <div id ="banner">
            <a href ="/" title="return home">
            <img src="./img/food.jpg" width="100%" height="100%">  
        </a>
</div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand pl-5" href="#">Bistro</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar" id="navbarSupportedContent">

      <?php include ('includes/nav.php'); ?>
  </div>

       </nav><!--end nav-->

      <div class="content">
