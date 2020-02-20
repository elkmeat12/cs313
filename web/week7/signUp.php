<?php
   session_start();
   if (!isset($_SESSION["notMatch"])){
      $_SESSION["notMatch"] = false;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link href="week7.css" rel="stylesheet">
   <title>Sign Up</title>
</head>
<body>
   <?php
      if (isset($_SESSION["notMatch"]) && $_SESSION["notMatch"] == true)
      {
         echo "<h1>Passwords did not match</h1>";
      }
   ?>
   <div id="login">
      <h3 class="text-center text-white pt-5">Week 7 Team</h3>
      <div class="container">
         <div id="login-row" class="row justify-content-center align-items-center">
               <div id="login-column" class="col-md-6">
                  <div id="login-box" class="col-md-12">

                     <form id="login-form" class="form" action="create.php" method="post">
                           <h3 class="text-center text-info">Create a New Account</h3>
                           <div class="form-group">
                              <label for="txtUser" class="text-info">Username:</label><br>
                              <input type="text" name="txtUser" id="txtUser" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="txtPass" class="text-info">Password:</label><br>
                              <input type="password" name="txtPass" id="txtPass" class="form-control" maxlength="25" minlength="7">
                           </div>
                           <div class="form-group">
                              <label for="verifyPass" class="text-info">Verify Password:</label><br>
                              <input type="password" name="verifyPass" id="verifyPass" class="form-control">
                           </div>
                           <div class="form-group text-center">
                              <input type="submit" name="submit" class="btn btn-info btn-md wide-item" value="Create Account">
                           </div>
                     </form>

                  </div>
               </div>
         </div>
      </div>
   </div>
</body>
</html>