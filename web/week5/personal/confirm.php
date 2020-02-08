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

  <title>Hooked :: Order Receipt</title>

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
            <a class="nav-link" href="hooked.php">Home</a>
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

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Delivery Order</h4>

        <hr>
         <?php
            $first_name = htmlspecialchars($_POST["first_name"]);
            $last_name = htmlspecialchars($_POST["last_name"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $email = htmlspecialchars($_POST["emailPHP"]);
            $street = htmlspecialchars($_POST["street"]);
            $city = htmlspecialchars($_POST["city"]);
            $state = htmlspecialchars($_POST["state"]);
            $zip = htmlspecialchars($_POST["zipCode"]);

            echo "Thank you for your order $first_name $last_name!<br>";
            echo "The items you purchase below will be delivered to:<br><br>
                  <em>$street<br>
                  $city, $state $zip</em>";
         ?>

        <div class="row my-4">

         <?php
               $item = $db->prepare("SELECT * FROM item");
               $item->execute();

               while ($iRow = $item->fetch(PDO::FETCH_ASSOC))
               {
                  $id = $iRow["id"];
                  $image = $iRow["image"];
                  $name = $iRow["item_name"];
                  $description = $iRow["item_description"];
                  $price = $iRow["price"];

                  if(isset($_COOKIE["$id"])) {
                     if ($_COOKIE["$id"] > 0) { ?>

                           <div class="col-lg-4 col-md-6 mb-4">
                              <div class="card h-100">
                                 <img class="card-img-top img-center" src=<?=$image?> alt=<?=$name . "picture"?>>
                                 <div class="card-body">
                                    <h4 class="card-title">
                                       <?=$name?>
                                    </h4>
                                    <h5><?= "$" . $price . " ea."?></h5>
                                    <input name="<?=$id?>" id="<?=$id?>" type="number" value="<?php echo $_COOKIE["$id"]; ?>" maxlength="2" min="0" max="10" style="width: 25%;" class="float-left text-center" disabled/>
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