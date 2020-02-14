<?php
   require("../../temp/dbConnect.php");
   $db = get_db();

   $name = $_POST['item_name'];
   $image = $_POST['item_image'];
   $price = $_POST['item_price'];
   $description = $_POST['desc'];
   $category = $_POST['sCat'];

   /* IMAGE UPLOAD */
   $target_dir = "images/";
   $target_file = $target_dir . basename($_FILES["item_image"]["name"]);
   $uploadOk = 1;
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   // Check if image file is a actual image or fake image
   if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["item_image"]["tmp_name"]);
      if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
      } else {
         echo "File is not an image.";
         $uploadOk = 0;
      }
   }
   // Check if file already exists
   if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
   }
   // Check file size
   if ($_FILES["item_image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
   }
   // Allow certain file formats
   if($imageFileType != "jpg" && $imageFileType != "jpeg")
   {
      echo "Sorry, only JPG & JPEG files are allowed.";
      $uploadOk = 0;
   }
   // Check if $uploadOk is set to 0 by an error
   if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
   // if everything is ok, try to upload file
   } else {
      if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {
         echo "The file ". basename( $_FILES["item_image"]["name"]). " has been uploaded.";
      } else {
         echo "Sorry, there was an error uploading your file.";
      }
   }

   /* END OF IMAGE UPLOAD */

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