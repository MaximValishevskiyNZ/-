<?php 

session_start();

if (isset($_POST["submit"])) {

   $username = $_POST["username"];
   $email = $_POST["email"];
   $pwd = $_POST["pwd"];
   $pwdConfirm = $_POST["pwdConfirm"];

} ;

require_once('../classes/signUpCtrl_classes.php');
require_once('../classes/signUp_classes.php');

$signUpUser = new signUpCtrl($username, $email, $pwd, $pwdConfirm);

if ($signUpUser->isEmpty()) {
   $_SESSION['message'] = 'You have empty form field';
   header("location:../index.php");
   die();
} 

if($signUpUser->usernameValid()) {
   $_SESSION['message'] = 'Your username is not valid';
   header("location:../index.php");
   
}

if ($signUpUser->emailValid()) {
    $_SESSION['email'] = 'Your email is not valid';
    header("location:../index.php");
    
}

if ($signUpUser->pwdMatch()) {
   $_SESSION['pwd'] = 'Your passwords do not match';
   header("location:../index.php");
   die();
}

$signUp = new signUp();
if ($signUp->checkEmail($email)) {
   $_SESSION['email'] = 'This email is already taken';
   header("location:../index.php");
   die();
}

$signUp->addUser($username,$email,$pwd);




header('location:../index.php');



