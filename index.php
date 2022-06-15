<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <title>inTouch</title>
</head>

<body>

   <header class="navbar mb-5 bg-primary">
      <div class="container">
         <a href="index.php" class="navbar-brand">
            <h1 class="text-white">inTouch</h1>
         </a>
      </div>
   </header>

   <div class="container">

      <form action="includes\signIn_inc.php" method="POST">
         <h2 class="mb-3">Sign in</h2>
         <div class="mb-3">
            <label for="email1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email1" name="email">
         </div>
         <div class="mb-3">
            <label for="pwd1" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd1" name="pwd">
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
      </form>



      <form action="includes\signUp_inc.php" method="POST">
         <h2 class="mb-3 mt-5">Sign up</h2>
         <p class='text-warning'><?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; }?></p> 
         <p class='text-warning'><?php if (isset($_SESSION['email'])) { echo $_SESSION['email']; }?></p> 
         <p class='text-warning'><?php if (isset($_SESSION['pwd'])) { echo $_SESSION['pwd']; }?></p>
         <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
         </div>
         <div class="mb-3">
            <label for="email2" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email2" name="email">
         </div>
         <div class="mb-3">
            <label for="pwd2" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd2" name="pwd">
         </div>
         <div class="mb-3">
            <label for="pwd3" class="form-label">Repeat password</label>
            <input type="password" class="form-control" id="pwd3" name="pwdConfirm">
         </div>
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

   </div>
</body>

</html>

<?php

session_destroy();