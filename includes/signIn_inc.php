<?php

if (isset($_POST["submit"])) {
   $email = $_POST["email"];
   $pwd = $_POST["pwd"];
} ;

require_once("../classes/signUp_classes.php");

$signIn = new signUp();


   if (($signIn->checkEmail($email)) and ($signIn->checkPwd($pwd))) {
      header("location:../personalPage.php");
   }
   