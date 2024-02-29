<html>
<head>
<titile>sum of series program using loop in php</title>
</head>
<body>
 <form method="post">
Enter the number:<br>
<input type="number" name="number" id="no">
<input type="submit"/>
</form>
<?php
   if($_POST){
        $sum = 0; //getting  value from input text box number 
        $n=$_POST['number'];
        echo "sum of series for $n terms:<br><br>";
        //start loop
        for($i=1; $i<=$n; $i++)
         {
          $sum += $i;
          }
         echo $sum . "<br>";
     }
?>
</body>
</html>