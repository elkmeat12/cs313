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

  <title>Hooked :: Admin</title>

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

      <div class="col-lg-3">

        <!-- <h2 class="my-4">Browse Snacks</h2> -->
        <div class="list-group my-4">
          <a href="orders.php" class="list-group-item">Show Orders</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Add Item</h4>

        <hr>

        <div class="row mx-3">

         <form action="" method="POST" class="needs-validation" novalidate>
            <!-- ITEM INFO -->
            <div class="form-row">
               <div class="form-group col-md-6">
                  <label for="item_name">Item Name</label>
                  <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Item" required>
               </div>
               <div class="form-group col-md-3">
                  <label for="item_type">Item Type</label>
                  <input type="text" class="form-control" name="item_type" id="item_type" placeholder="Type" required>
               </div>
               <div class="form-group col-md-3">
                  <label for="item_price">Price</label>
                  <input type="number" class="form-control" name="item_price" id="item_price" placeholder="0.00" min="0.00" max="9999.99" step="0.01" required>
               </div>
            </div>

            <!-- ITEM DESCRIPTION -->
            <div class="form-row">
               <div class="form-group col-md-12">
                  <label for="desc">Description</label>
                  <textarea class="form-control" name="desc" id="desc" required></textarea>
               </div>
            </div>

            <!-- IMAGE UPLOAD -->
            <div class="input-group col-md-9" style="padding: 0px 0px">
               <div class="form-group input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
               </div>
               <div class="custom-file">
                  <input type="file" class="custom-file-input" id="item_image"
                     aria-describedby="inputGroupFileAddon01" accept="image/.jpg" required>
                  <label class="custom-file-label" for="item_image">Add item image</label>
               </div>
            </div>

            <br>
            <button class="btn btn-primary" type="submit">Add Item</button>
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
