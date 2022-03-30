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
			echo "<p>This website allows you to calculate your salary and the income tax you'll be paying the government! <br> Enter your hours worked and hourly rate below:</p>";
		?>
		<!-- Text field and button -->
		<form method = "post">
			Hours: <input type="number" name="hours">   
			<br><br>   
			Rate $<input type="number" name="rate">/per hour<br>
			<br><br>
			<input type = "submit" name = "submit" value="Pay">
		<!-- Calculations for salary and tax (With User Input) -->
		<?php
      define ("TAX_RATE", 0.1805); // constant
			if(isset($_POST['submit'])) {	// if submit pressed
        // Variables
        $hours = floatval($_POST["hours"]);
        $rate = floatval($_POST["rate"]);
        $salary = $hours * $rate;
        $salarytaxed = number_format($salary * TAX_RATE, 2); // rounds to 2nd decimal place
        $salary = number_format($salary, 2); // number_format() after $salarytaxed to ensure calculations run smoothly
        // Output
				echo "<br><br><h3>Your salary is $" . $salary . " <br> The government will be taking $" . $salarytaxed . " as income tax.</h3>";   
			}
		?>
  </body>
</html>