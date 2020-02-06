<?php 
   require "../../temp/dbConnect.php";
   $db = get_db();

   $event = $db->prepare("SELECT * FROM w5_EVENT");
   $event->execute();

   echo "<h1>Events</h1>";

   while ($row = $event->fetch(PDO::FETCH_ASSOC))
   {
      $image = $row["image"];
      $name = $row["name"];
      $desc = $row["description"];

      echo "<img src=$image style='height: 250px'>";

      echo "<p>
            <h3>$name</h3>
            <br>$desc
            </p>";
   }
?>