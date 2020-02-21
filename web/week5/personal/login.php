<?php
   session_start();
   require "../../temp/dbConnect.php";
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
            header("Location: admin.php");
            die();
         }
         else
         {
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

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hooked :: Admin Login</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <!-- Custom styles for this template -->
  <link href="login.css" rel="stylesheet">
  <link href="hooked.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="hooked.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg1">
    <div class="container">
      <a class="navbar-brand" href="hooked.php">Hooked</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="hooked.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">View Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

         <form action="login.php" method="post" class="center-item my-4">
            <div class="container">
               <h4 class="text-center">Admin Login</h4>
               <hr>
               <label for="txtUser"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="txtUser" id="txtUser" required>

               <label for="txtPass"><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="txtPass" id="txtPass" maxlength="25" required>

               <input type="submit" name="submit" class="btn btn-info btn-md btn-style" value="Login">
               <br>
               <a href="register.php" class="text-info">Register to be an Admin</a>

               <?php
                  if ($failedLogin == true)
                  {
                    echo "<p style='color:red'>Username or password is incorrect</p>";
                  }
              ?>
            </div>

         </form>

        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <br><br>
  <!-- Footer -->
  <footer class="py-5 bg1">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hooked</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>
