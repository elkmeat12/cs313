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

        <div class="list-group my-4">
          <a href="admin.php" class="list-group-item">Add Items</a>
          <a href="orders.php" class="list-group-item active">Show Orders</a>
          <a href="inventory.php" class="list-group-item">Inventory</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <h4 class="my-4">Orders</h4>

        <hr>

        <?php
            echo "<table class='table table-striped mb-auto'>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Item</th><th>Price</th></tr>";

            class TableRows extends RecursiveIteratorIterator {
               function __construct($it) {
                   parent::__construct($it, self::LEAVES_ONLY);
               }
           
               function current() {
                   return "<td>" . parent::current(). "</td>";
               }
           
               function beginChildren() {
                   echo "<tr>";
               }
           
               function endChildren() {
                   echo "</tr>" . "\n";
               }
           }

           try
           {
            $stmt = $db->prepare("SELECT c.category_name, i.item_name, i.item_description, i.price::float8::numeric::money
                                  FROM item i
                                  JOIN category c ON i.category_id = c.id
                                  ORDER BY c.category_name");

            $stmt->execute();

            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
            {
               echo $v;
            }
           }
           catch(PDOException $e)
           {
              echo "Error: " . $e->getMessage();
           }
           echo "</table>";
         ?>
         <br><br>

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
