<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select USERNAME_CLIENTE from cliente where USERNAME_CLIENTE = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['USERNAME_CLIENTE'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>