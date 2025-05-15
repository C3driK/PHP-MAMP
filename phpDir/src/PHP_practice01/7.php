<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>


<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

		echo "Welcome to PHP World ";
		echo "</br>";
		$host = 'db';

		// Database user name
		$user = 'root';

		//database user password
		$pass = 'lionPass';
		$table = 'mylist';
		// check the MySQL connection status
		$conn = new mysqli($host, $user, $pass, $table);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} else {
			echo "Connected to MySQL server successfully!";
		}



		$query = "SELECT * FROM reports";
		$result = $conn->query($query);
		//echo $result;
		while ($record = mysqli_fetch_assoc($result)) {
			print_r($record);

			// echo $record['days_of_week'];
		}

		?>





	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>