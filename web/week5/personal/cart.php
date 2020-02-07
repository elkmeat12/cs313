<?php
   session_start();
   require "../../temp/dbConnect.php";
   $db = get_db();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hooked</title>

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
               <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <div class="list-group my-4">
          <a href="hooked.php" class="list-group-item">Back to Browse</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Items Added to Cart</h4>

        <hr>

        <div class="row">

         <!-- GET DATABASE ITEMS  -->
         <?php
            $item = $db->prepare("SELECT * FROM item");
            $item->execute();

            while ($iRow = $item->fetch(PDO::FETCH_ASSOC))
            {
               $image = $iRow["image"];
               $name = $iRow["item_name"];
               $description = $iRow["item_description"];
               $price = $iRow["price"];
         ?>

            <?php
               if(isset($_COOKIE["$name"])) {
               if ($_COOKIE["$name"] > 0) { ?>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="card h-100">
                     <img class="card-img-top img-center" src="images/chips.jpeg" alt="Doritos Chips">
                     <div class="card-body">
                        <h4 class="card-title">
                           <?=$name?>
                        </h4>
                        <h5><?= "$" . $price . " ea."?></h5>
                        <input name="<?=$name?>" id="<?=$name?>" type="number" value="<?php echo $_COOKIE[$name]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center"/>
                     </div>
                     <div class="card-footer">
                        <button onclick="adjustCart('<?=$name?>')" class="btn btn-primary float-left">Adjust</button>
                        <button onclick="removeCart('<?=$name?>')" class="btn btn-danger float-right">Remove</button>
                     </div>
                     </div>
                  </div>
            <?php   }
               }
            ?>
         
         <?php
            }
         ?>

        </div>
        <!-- /.row -->
        <button onclick="window.location.href = 'checkout.php';" class="btn btn-primary">Checkout</button>
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
