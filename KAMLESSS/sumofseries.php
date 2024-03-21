<html>
<head>
<title> Sum of series program </title>
</head>
<body>
 <form method="post">
Enter the number:<br>
<input type="number" name="number" id="no">

</form>
<?php
   if($_POST){
        $fact=1 ;  
        $n=$_POST['number'];
        echo "Sum of $n:<br><br>";

        for($i=1; $i<=$n; $i++)
         {
           $fact = $fact + $i;
          }
         echo $fact . "<br>";
     }
?>
</body>
</html>