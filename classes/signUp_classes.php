<?php

require_once('dbh_classes.php');

class signUp extends dbh {

   

   public function checkEmail($email) {
      $stmt = $this->connect()->prepare("SELECT `username` FROM `users` WHERE  `email` = '$email'");
      $stmt->execute();
      $stmt = $stmt->fetchAll(PDO::PARAM_STR);
      return isset($stmt[0]['username']);
   }

   public function checkPwd($pwd) {
      $stmt = $this->connect()->prepare("SELECT `username` FROM `users` WHERE  `pwd` = '$pwd'");
      $stmt->execute();
      $stmt = $stmt->fetchAll(PDO::PARAM_STR);
      return isset($stmt[0]['username']);
   }


   public function addUser($username, $email, $pwd) {
      $stmt = $this->connect()->prepare("INSERT INTO `users` (`id`, `username`, `email`, `pwd`) VALUES (NULL, '$username', '$email', '$pwd')");
      $stmt->execute();
   }



}