<html>
   <body>
      Name: <?php echo $_POST["name"]; ?><br>
      Email: <?php echo "<a href='mailto:" . $_POST['email'] . "'>"; ?><br>
      Major: <?php echo $_POST["major"]; ?><br>
      Comments: <?php echo $_POST["comment"]; ?><br>
   </body>
</html>