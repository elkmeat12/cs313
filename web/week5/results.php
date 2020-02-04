<?php
   require "../temp/dbConnect.php";
   $db = get_db();

   $book_name = htmlspecialchars($_POST["book"]);

   $scripture = $db->prepare("SELECT * FROM scripture");
   $scripture->execute();

   echo "<h1>Scripture Resources</h1>";

   while ($row = $scripture->fetch(PDO::FETCH_ASSOC))
   {
      $book = $row["book"];
      $chapter = $row["chapter"];
      $verse = $row["verse"];
      $content = $row["content"];

      while ($book_name == $book)
      {
         echo "<p><strong>$book $chapter:$verse</strong> - \"$content\"</p>";
      }
   }
?>