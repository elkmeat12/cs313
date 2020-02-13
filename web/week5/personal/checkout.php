<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hooked :: Checkout</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <!-- Custom styles for this template -->
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
            <a class="nav-link" href="hooked.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="cart.php">View Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <!-- <h2 class="my-4">Browse Snacks</h2> -->
        <div class="list-group my-4">
          <a href="hooked.php" class="list-group-item">Back to Browse</a>
          <a href="cart.php" class="list-group-item">Return to Cart</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Order Information</h4>

        <hr>

        <div class="row mx-3">

         <form action="insertUser.php" method="POST" class="needs-validation" novalidate>
            <!-- NAME -->
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="John" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Doe" required>
               </div>
            </div>

            <!-- CONTACT INFO -->
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="phone">Phone Number</label>
                  <input type="tel" class="form-control" name="phone" id="phone" placeholder="000-000-0000" maxlength="12" required>
               </div>
               <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="emailPHP" id="email" placeholder="Email" required>
               </div>
            </div>

            <!-- ADDRESS -->
            <div class="form-group">
               <label for="inputStreet">Street Address</label>
               <input type="text" class="form-control" name="street" id="inputStreet" placeholder="1234 Main St" required>
            </div>
            
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" name="city" id="inputCity" required>
               </div>
               <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <input type="text" class="form-control" name="state" id="inputState" required>
               </div>
               <div class="form-group col-md-2">
                  <label for="inputZip">Zip</label>
                  <input type="text" class="form-control" name="zipCode" id="inputZip" required>
               </div>
            </div>

            <br>
            <button class="btn btn-primary" type="submit">Confirm Order</button>
         </form>

         <script>
         // Example starter JavaScript for disabling form submissions if there are invalid fields
         (function() {
         'use strict';
         window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
               form.addEventListener('submit', function(event) {
               if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
               }
               form.classList.add('was-validated');
               }, false);
            });
         }, false);
         })();
         </script>

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
  <footer class="py-5 bg1 fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hooked</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>
