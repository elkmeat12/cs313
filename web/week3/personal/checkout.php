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

  <title>The Snack Shop</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <!-- Custom styles for this template -->
  <link href="prove3.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="prove3.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg1">
    <div class="container">
      <a class="navbar-brand" href="prove3.php">The Snack Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="prove3.php">Home
              <span class="sr-only">(current)</span>
            </a>
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
          <a href="prove3.php" class="list-group-item">Back to Browse</a>
          <a href="cart.php" class="list-group-item">Return to Cart</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Order Information</h4>

        <hr>

        <div class="row">

         <form class="needs-validation" novalidate>
            <div class="form-row">
               <div class="col-md-4 mb-3">
                  <label for="validationCustom01">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
                  <div class="valid-feedback">
                  Looks good!
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationCustom02">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
                  <div class="valid-feedback">
                  Looks good!
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <label for="validationCustomUsername">Username</label>
                  <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroupPrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                     Please choose a username.
                  </div>
                  </div>
               </div>
            </div>
            <div class="form-row">
               <div class="col-md-6 mb-3">
                  <label for="validationCustom03">City</label>
                  <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                  <div class="invalid-feedback">
                  Please provide a valid city.
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationCustom04">State</label>
                  <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                  <div class="invalid-feedback">
                  Please provide a valid state.
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <label for="validationCustom05">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                  <div class="invalid-feedback">
                  Please provide a valid zip.
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                  Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                  You must agree before submitting.
                  </div>
               </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
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
      <p class="m-0 text-center text-white">Copyright &copy; The Snack Shop</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>
