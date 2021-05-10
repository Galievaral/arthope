<?php
   include("connection.php");
   session_start(); // Start the session
   ?> 
<!DOCTYPE HTML>
<html>
   <head>
      <title>Online Artwork & Fine Art</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
      <link rel="icon" href="img/icon.ico" type="image/x-icon">
   </head>
   <body>
      <!-- Header -->
      <header id="header" class="alt" >
         <div class="logo"><a href="index.php">Онлайн-галерея картин<span>   ARTHOPE</span></a></div>
         <ul class="nav navbar-nav custom-navbar">
            <li class="active" ><a href="index.php">Главная</a></li>
            <li><a href="index.php?page=customer_register">Регистрация</a></li>
            <li><a href="index.php?page=contactus">Контакты</a></li>
            <li><a href="index.php?page=customer_login">Войти</a></li>
         </ul>
      </header>
      <!-- Nav -->
      <section>
         <?php
            if ( isset( $_GET[ 'page' ] ) ) {           $page_name = $_GET[ 'page' ];
            	include( "login_register/" . $page_name . ".php" );} 
            else {
            	include( "login_register/main.php" );}
         ?>
      </section>
      <!-- Footer -->
      <footer id="footer">
         <div class="container">
            <ul class="icons">
               <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
               <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
               <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
               <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
         </div>
         <div class="copyright">
              <div class="footer text-center">По всем интересующим Вас вопросам обращаться к нашим специалистам по телефону или электронной почте. <br>
            Контактный телефон +7 953 400 13 00<br>    Электронная почта- arthopegallery@gmail.com<br>    Почта для отправки ваших работ - yourarthope@gmail.com<br><br></div>
            &copy; Онлайн-галерея картин  ARTHOPE.  Все права защищены 
         </div>
      </footer>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
   </body>
</html>