<?php
   session_start();
   require("../temp/dbConnect.php");
   $db = get_db();

   $failedLogin = false;

   if (isset($_POST['txtUser']) && isset($_POST['txtPass']))
   {
      $username = $_POST['txtUser'];
      $password = $_POST['txtPass'];

      $query = 'SELECT password FROM w7_users WHERE username=:username';
      $stmt = $db->prepare($query);
      $stmt->bindValue(':username', $username);
      $result = $stmt->execute();

      if ($result)
      {
         $row = $stmt->fetch();
         $hashPass = $row['password'];

         if (password_verify($password, $hashPass))
         {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            die();
         }
         else
         {
            echo "<h1>Wrong Password</h1>";
            $failedLogin = true;
         }
      }
      else
      {
         $failedLogin = true;
      }
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
   <title>Sign In</title>
</head>
<body>
   <div id="login">
      <h3 class="text-center text-white pt-5">Week 7 Team</h3>
      <div class="container">
         <div id="login-row" class="row justify-content-center align-items-center">
               <div id="login-column" class="col-md-6">
                  <div id="login-box" class="col-md-12">
                     <form id="login-form" class="form" action="signIn.php" method="post">
                           <h3 class="text-center text-info">Login</h3>
                           <div class="form-group">
                              <label for="txtUser" class="text-info">Username:</label><br>
                              <input type="text" name="txtUser" id="txtUser" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="txtPass" class="text-info">Password:</label><br>
                              <input type="password" name="txtPass" id="txtPass" class="form-control" maxlength="16">
                           </div>
                           <div class="form-group text-center">
                              <input type="submit" name="submit" class="btn btn-info btn-md wide-item" value="Login">
                           </div>
                           <div class="form-group text-center">
                              <a href="signUp.php" class="text-info">Create New Account</a>
                           </div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
</body>
</html>