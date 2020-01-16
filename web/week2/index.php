<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Tyler's Home Page</title>
   <link rel="stylesheet" href="personal.css">
   <script src="home.js"></script>
</head>

<body>
   <div id="wrapper">

      <div id="head">
         <header>
            <h1>Tyler's Home Page</h1>
         </header>
      </div>

      <div id="topNav">
         <nav>
            <a href="index.php">Home</a>
            <a href="personal.html">Introduction</a>
            <a href="assignments.html">CS313 Assignments</a>
         </nav>
      </div>

      <div id="trap">
         <main>
            <p id="visitor"></p>
            <p>Welcome to my website! Explore and see what you can find!<p>

            <label>What is your name?</label>
            <br><br>
            <input type="text" id="name">
            <button type="button" onclick="getName()">Submit</button>

            <br>
            <br>

            <label>Click to show date and time:</label>
            <p id="date"></p>
            <button type="button" onclick="showDate();">Show Date and Time</button>
         </main>
         
         <footer>
            <?php include 'footer.php' ?>
         </footer>
      </div>

   </div>
</body>
</html>