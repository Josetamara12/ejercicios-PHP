<?php

$dias[0]=31;
$dias[1]=28;

echo $dias[0];  //31
echo "<br>";
echo $dias[1];  //28
echo "<br>";
echo count($dias);      //3


?>

<hr>

<h1>otro ejemplo</h1>

<?php 
$nombres[]="juan"; 
$nombres[]="pedro"; 
$nombres[]="ana"; 
for($f=0;$f<count($nombres);$f++) 
{ 
  echo $nombres[$f]; 
  echo "<br>"; 
} 
?>
