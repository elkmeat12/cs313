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
                     <form id="login-form" class="form" action="" method="post">
                           <h3 class="text-center text-info">Login</h3>
                           <div class="form-group">
                              <label for="username" class="text-info">Username:</label><br>
                              <input type="text" name="username" id="username" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="password" class="text-info">Password:</label><br>
                              <input type="password" name="password" id="password" class="form-control">
                           </div>
                           <div class="form-group">
                              <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                           </div>
                           <div id="register-link" class="text-right">
                              <a href="signUp.php" class="text-info">Create New Account Here</a>
                           </div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
</body>
</html>