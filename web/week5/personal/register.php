<?php
   session_start();
   require "../../temp/dbConnect.php";
   $db = get_db();

   if (!isset($_SESSION["notMatch"])) {
     $_SESSION["notMatch"] = false;
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hooked :: Register Admin</title>

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

         <form action="registerAdmin.php" method="post" class="center-item my-4">
            <div class="container">
               <h4 class="text-center">Register to be an Admin</h4>
               <hr>
               <label for="txtUser"><b>Username</b></label>
               <input type="text" placeholder="Enter Username" name="txtUser" id="txtUser" required>

               <label for="txtPass"><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="txtPass" id="txtPass" maxlength="25" required>

               <label for="verifyPass"><b>Confirm Password</b></label>
               <input type="password" placeholder="Enter Password" name="verifyPass" id="verifyPass" maxlength="25" required>

               <?php
                  if (isset($_SESSION["notMatch"]) && $_SESSION["notMatch"] == true)
                  {
                      echo "<p style='color:red'>Passwords do not match. Try again.</p>";
                  }
                ?>
                
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register"> 
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
