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
        </div>

        <div class="container-fluid bg2 h-75">
          <button onclick="window.location.href = 'checkout.php';" class="btn btn-primary">Checkout</button>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Snacks Added to Cart</h4>

        <hr>

        <div class="row">

          <?php
            if(isset($_COOKIE["chip1"])) {
              if ($_COOKIE["chip1"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/chips.jpeg" alt="Doritos Chips">
                    <div class="card-body">
                      <h4 class="card-title">
                        Flamin Hot Doritos
                      </h4>
                      <h5>$2.99</h5>
                      <input name="chip1" id="chip1" type="number" value="<?php echo $_COOKIE["chip1"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('chip1')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('chip1')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if (isset($_COOKIE["chip2"])) {
              if ($_COOKIE["chip2"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/classic.jpg" alt="Classic Lays">
                    <div class="card-body">
                      <h4 class="card-title">
                        Classic Lays
                      </h4>
                      <h5>$3.50</h5>
                      <input name="chip2" id="chip2" type="number" value="<?php echo $_COOKIE["chip2"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('chip2')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('chip2')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if (isset($_COOKIE["drink1"])) {
              if ($_COOKIE["drink1"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/dew.jpeg" alt="Mountain Dew">
                    <div class="card-body">
                      <h4 class="card-title">
                        Mountain Dew
                      </h4>
                      <h5>$7.49</h5>
                      <input name="drink1" id="drink1" type="number" value="<?php echo $_COOKIE["drink1"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('drink1')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('drink1')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if (isset($_COOKIE["drink2"])) {
              if ($_COOKIE["drink2"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/gatorade.jpeg" alt="Gatorade">
                    <div class="card-body">
                      <h4 class="card-title">
                        Gatorade Variety Pack
                      </h4>
                      <h5>$12.59</h5>
                      <input name="drink2" id="drink2" type="number" value="<?php echo $_COOKIE["drink2"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('drink2')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('drink2')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if (isset($_COOKIE["cookie1"])) {
              if ($_COOKIE["cookie1"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/ahoy.jpeg" alt="Chips Ahoy">
                    <div class="card-body">
                      <h4 class="card-title">
                        Chips Ahoy
                      </h4>
                      <h5>$2.53</h5>
                      <input name="cookie1" id="cookie1" type="number" value="<?php echo $_COOKIE["cookie1"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('cookie1')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('cookie1')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if (isset($_COOKIE["cookie2"])) {
              if ($_COOKIE["cookie2"] > 0) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <img class="card-img-top img-center" src="images/oreo.jpeg" alt="Oreos">
                    <div class="card-body">
                      <h4 class="card-title">
                        Oreos
                      </h4>
                      <h5>$2.99</h5>
                      <input name="cookie2" id="cookie2" type="number" value="<?php echo $_COOKIE["cookie2"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                    </div>
                    <div class="card-footer">
                      <button onclick="adjustCart('cookie2')" class="btn btn-primary float-left">Adjust</button>
                      <button onclick="removeCart('cookie2')" class="btn btn-danger float-right">Remove</button>
                    </div>
                  </div>
                </div>
          <?php   }
            }
          ?>

          <?php
            if(isset($_COOKIE["chip1"]) && isset($_COOKIE["chip2"]) && isset($_COOKIE["drink1"]) && isset($_COOKIE["drink2"]) && isset($_COOKIE["cookie1"]) && isset($_COOKIE["cookie2"]))
            {
              if($_COOKIE["chip1"] && $_COOKIE["chip2"] && $_COOKIE["drink1"] && $_COOKIE["drink2"] && $_COOKIE["cookie1"] && $_COOKIE["cookie2"] <= 0)
              {  
                echo "No items added";
              }
            }
          ?>

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
