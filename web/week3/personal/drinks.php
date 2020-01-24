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
          <a href="chips.php" class="list-group-item">Chips</a>
          <a href="cookie.php" class="list-group-item">Cookies</a>
          <a href="drinks.php" class="list-group-item active">Drinks</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Drinks</h4>

        <hr>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top img-center" src="images/dew.jpeg" alt="Mountain Dew">
              <div class="card-body">
                <h4 class="card-title">
                  Mountain Dew
                </h4>
                <h5>$7.49 ea.</h5>
                <p class="card-text">Mountain Dew, the original, the one that started it all. MTN DEW exhilarates and quenches with its one of a kind taste.</p>
              </div>
              <div class="card-footer">
              <input name="drink1" id="drink1" type="number" value="0" min="0" max="10" maxlength="2" style="width: 25%;" class="float-left text-center"/>
                <button onclick="addItem('drink1')" class="btn btn-primary float-right">Add to Cart</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top img-center" src="images/gatorade.jpeg" alt="Gatorade">
              <div class="card-body">
                <h4 class="card-title">
                  Gatorade Variety Pack
                </h4>
                <h5>$12.59 ea.</h5>
                <p class="card-text">Gatorade Thirst Quencher hydrates better than water, which is why it's trusted by some of the world's best athletes.</p>
              </div>
              <div class="card-footer">
              <input name="drink2" id="drink2" type="number" value="0" min="0" max="10" maxlength="2" style="width: 25%;" class="float-left text-center"/>
                <button onclick="addItem('drink2')" class="btn btn-primary float-right">Add to Cart</button>
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
