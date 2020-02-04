<?php
   require "../temp/dbConnect.php";
   $db = get_db();

   $book = htmlspecialchars($_POST["book"]);

   $scripture = $db->prepare("SELECT * FROM scripture");
   $scripture->execute();

   while ($row = $scripture->fetch(PDO::FETCH_ASSOC))
   {
      $book = $row["book"];
      $chapter = $row["chapter"];
      $verse = $row["verse"];
      $content = $row["content"];

      if ($book == $scripture)
      {
         echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"</p>";
      }
   }
?>