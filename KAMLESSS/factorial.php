<html>
	<head>
		<title>Factorial program in php </title>
	</head>
	<body>
		<form method="post">
			Enter the number to find the factorial :<br>
			<input type="number" name="number" id="no">
			<input type="submit">
		</form>

<?php
	if($_POST)
	{
		$fact=1;
		$n=$_POST['number'];
		echo"Factorial of $n:<br><br>";
		for($i=1;$i<=$n;$i++)
		{
			$fact = $fact * $i;
		}
		echo $fact. "<br>";

	}
?>

	</body>
</html>