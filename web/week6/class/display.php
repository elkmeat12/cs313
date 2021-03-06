<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['personId'];
            $stmt = $db->prepare('SELECT * FROM w6_user WHERE ID = :personId');
            $stmt->bindValue(':personId', $personId);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
            {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               $foods = $db->prepare("SELECT food FROM w6_food WHERE ID = $food_id");
               $foods->execute();
               while ($fRow = $foods->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's favorite food is $food</h1>";
            }
            

            // execute query to pull up data from that id
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>