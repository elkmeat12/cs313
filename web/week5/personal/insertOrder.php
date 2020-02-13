<?php
   require("../../temp/dbConnect.php");
   $db = get_db();

   $name = $_POST['item_name'];
   $image = $_POST['item_image'];
   $price = $_POST['item_price'];
   $description = $_POST['desc'];
   $category = $_POST['sCat'];

   try
   {
      $query = 'INSERT INTO item(category_id, image, item_name, item_description, price) VALUES(:category, :image, :item_name, :item_description, :price)';
      $stmt = $db->prepare($query);

      $stmt->bindValue(':category', $category);
      $stmt->bindValue(':image', $image);
      $stmt->bindValue(':item_name', $name);
      $stmt->bindValue(':item_description', $description);
      $stmt->bindValue(':price', $price);

      $stmt->execute();
   }
   catch (Exception $e)
   {
      echo "Error with DB. ERROR: $e";
      die();
   }

   header("Location: inventory.php");

   die();
?>