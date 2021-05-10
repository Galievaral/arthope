<?php
include("../connection.php");
  session_start(); // Start the session
  $cid = $_SESSION[ "uid" ];
  ?>
<!doctype html>
<html lang="en">
  <head>
   <title>Личный кабинет - <?php echo $_SESSION["name"]; ?> - ArtHope</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
<link rel="icon" href="../img/icon.ico" type="image/x-icon">
    <!-- последняя сохраненная версия CSS -->
    <link rel="stylesheet" href="../boots/css/bootstrap.css">
    <!-- jQuery library -->
    <!-- последняя сохраненная JavaScript -->
    <script src="../boots/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/style.css">
	  <link rel="stylesheet" href="../assets/css/main.css" />
<!-- последняя сохраненная JavaScript -->
<script src="../boots/js/jquery.js"></script>
<!-- Скрипты -->
      <script src="../assets/js/jquery.min.js"></script>
      <script src="../assets/js/jquery.scrollex.min.js"></script>
      <script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>

			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
 </head>
<header>
<nav class="#header" >
  <!-- Header -->
<header>
<nav class="#header" >
  <!-- Header -->
      <header id="header" class="alt" >
        <div class="logo"><a href="index.php">Онлайн-галерея картин <span>ArtHope</span></a></div>
 <a href="javascript:;" style="padding: 0px 0;color:#000;margin-right: 3em;">
                  <form class="navbar-form navbar-left" action="welcome.php" method="post">
                    <div class="input-group" >
                      <input list="browsers" name="proname" type="text" class="form-control" style="color: white; max-height: 35px;" placeholder="Поиск" required>
                      <datalist id="browsers">
                        <option value="Пейзаж">
                        <option value="Натюрморт">
                        <option value="Люди">
                        <option value="Астракция">
                        <option value="Другое">
                      </datalist>
                      <div class="input-group-btn">
                      <button class="btn btn-default" type="submit" style=" max-height: 35px; margin-bottom: 10px;" name="search">
                      <i class="glyphicon glyphicon-search"></i>
                      </button>
                      </div>
                    </div>
                  </form>
                </a>
          </a> 
        <a href="#menu"><p class="custom-para">Действия</p></a>
      </header>
    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="index.php">Католог</a>
          <li><a href="add_feedback_by_cust.php?id=<?php echo $cid;?>">Отзыв</a>
          <li><a class="a button special" href="cust_logout.php?id=<?php echo $cid;?>">Выйти</a>
          </li>
      </nav>
</nav>
</header>
<body >