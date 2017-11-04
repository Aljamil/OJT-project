<?php
   session_start();
   if(!isset($_SESSION['login_user'])){
		header('location: login');
   }
   unset($_SESSION["login_user"]);
   
   echo 'Please wait...';
   header('Refresh: 2; URL = login');
?>