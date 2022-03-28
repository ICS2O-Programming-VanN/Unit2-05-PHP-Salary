<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="website for calculating salary and income tax">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP website calculating salary and income tax</title>
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Salary Program in PHP</h1></center><br>';
			echo "<p>This website allows you to calculate your salary and the income tax you'll be paying the gouvernment! <br> Enter your hours worked and hourly rate below:</p>";
		?>
		<!-- Text field and button -->
		<form method = "post">
			Hours: <input type="number" name="hours">   
			<br><br>   
			Rate $<input type="number" name="rate">/per hour<br>
			<br><br>
			<input type = "submit" name = "submit" value="Calculate/Pay">
		<!-- Calculations for salary and tax (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
				$hours = $_POST['hours'];
				$rate = $_POST['rate'];
				$tax = 0.1805;
        $salary = $hours*$rate;
				$salary = number_format($salary, 2);
        $salarytaxed = $salary*$tax;
        $salarytaxed = number_format($salarytaxed, 2);
				echo "<br><br>Your salary is $" . $salary . " <br> The government will be taking $" . $salarytaxed . " as income tax.";   
			}
		?>
  </body>
</html>