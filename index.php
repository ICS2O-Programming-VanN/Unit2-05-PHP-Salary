<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="website for calculating salary and income tax">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP website calculating salary and income tax</title>
    <!-- CSS file link -->
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
        $hours = floatval($_POST["hours"]); // takes user input and converts to float
        $rate = floatval($_POST["rate"]);
        $salary = $hours * $rate;
        $salary_taxed = $salary * TAX_RATE; 
        $real_salary = $salary - $salary_taxed;                          
        $salary = number_format($salary, 2); // number_format() after $salary_taxed to ensure calculations run smoothly
        $salary_taxed = number_format($salary_taxed, 2); // rounds to 2nd decimal place
        $real_salary = number_format($real_salary, 2);
        // Output
				echo "<br><br><h3>Your salary is $" . $salary . " <br> The government will be taking $" . $salary_taxed . " as income tax.<br> With your income tax deducted from your salary, you will be keeping $" . $real_salary . "</h3>";   
			}
		?>
  </body>
</html>