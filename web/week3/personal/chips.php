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

        <h2 class="my-4">Browse Snacks</h2>
        <div class="list-group">
          <a href="chips.php" class="list-group-item active">Chips</a>
          <a href="cookie.php" class="list-group-item">Cookies</a>
          <a href="drinks.php" class="list-group-item">Drinks</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <!-- banner -->
        <!-- <div class="my-4">
          <img class="d-block img-fluid" src="images/store2.jpg" alt="Store Image">
        </div> -->

        <h4 class="my-4">Chips</h4>

        <hr>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top img-center" src="images/chips.jpeg" alt="Doritos Chips">
              <div class="card-body">
                <h4 class="card-title">
                  Flamin Hot Doritos
                </h4>
                <h5>$2.99 ea.</h5>
                <p class="card-text">DORITOS FLAMIN' HOT Limon introduces a new Flamin' Hot experience, bringing the same signature heat but adding a twist of lime.</p>
              </div>
              <div class="card-footer">
                <input id="chip1" name="chip1" type="number" value="0" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                <button onclick="addItem('chip1')" class="btn btn-primary float-right">Add to Cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top img-center" src="images/classic.jpg" alt="Classic Lays">
              <div class="card-body">
                <h4 class="card-title">
                  Classic Lays
                </h4>
                <h5>$3.50 ea.</h5>
                <p class="card-text">It all starts with farm-grown potatoes, cooked and seasoned to perfection. So every LAY'S potato chip is perfectly crispy and delicious. Happiness in Every Bite.</p>
              </div>
              <div class="card-footer">
              <input name="chip2" id="chip2" type="number" value="0" min="0" max="10" maxlength="2" style="width: 25%;" class="float-left text-center"/>
                <button onclick="addItem('chip2')" class="btn btn-primary float-right">Add to Cart</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg1">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; The Snack Shop</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>
