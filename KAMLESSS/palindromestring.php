<html>
	<head>
		<title>Palindrome program </title>
	</head>
	<body>
		<form method="post">
			Enter the string to check it is palindrome or not :<br>
			<input type="string" name="string" id="no">
			<input name="submit" type="submit">
		</form>

<?php 
if($_POST)
{
	$str=$_POST['string'];
	$rev= strrev("$str");
	if($rev==$str)
		echo "The string you provided is Palindrome string.";
	else
		echo "The string you provided is not Palindrome string.";
}
?>

    </body>
</html>