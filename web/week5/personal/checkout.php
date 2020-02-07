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
            <a class="nav-link" href="admin.php">Admin</a>
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

        <div class="row">

         <form action="confirm.php" method="POST" class="needs-validation" novalidate>

            <!-- ROW 1 -->
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="first_name">First name</label>
                  <input type="text" name="fname" class="form-control" id="first_name" placeholder="First name" value="" required>
                  <div class="valid-feedback">
                  Looks good!
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="last_name">Last name</label>
                  <input type="text" name="lname" class="form-control" id="last_name" placeholder="Last name" value="" required>
                  <div class="valid-feedback">
                  Looks good!
                  </div>
               </div>
            </div>

            <!-- ROW 2 -->
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="phone">Phone Number</label>
                  <input type="phone" name="phone" class="form-control" id="phone" placeholder="XXX-XXX-XXXX" required>
                  <div class="invalid-feedback">
                     Please add a phone number.
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="email">Email</label>
                  <input type="email" name="emailPHP" class="form-control" id="email" placeholder="Email" required>
                  <div class="invalid-feedback">
                     Please add an email.
                  </div>
               </div>
            </div>

            <!-- ROW 3 -->
            <div class="form-row">
               <div class="col-md-6 mb-3">
                  <label for="street">Street Address</label>
                  <input type="text" name="street" class="form-control" id="street" placeholder="Street" required>
                  <div class="invalid-feedback">
                  Please provide a valid street address.
                  </div>
               </div>
               <div class="col-md-6 mb-3">
                  <label for="city">City</label>
                  <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                  <div class="invalid-feedback">
                  Please provide a valid city.
                  </div>
               </div>
            </div>

            <!-- ROW 4 -->
            <div class="form-row">
               <div class="col-md-3 mb-3">
                  <label for="state">State</label>
                  <input type="text" name="state" class="form-control" id="state" placeholder="State" required>
                  <div class="invalid-feedback">
                  Please provide a valid state.
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <label for="zip_code">Zip</label>
                  <input type="text" name="zipCode" class="form-control" id="zip_code" placeholder="Zip" required>
                  <div class="invalid-feedback">
                  Please provide a valid zip.
                  </div>
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
