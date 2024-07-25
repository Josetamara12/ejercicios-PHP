<?php
$cant = 0; // cuantas veces cuenta
if (isset($_REQUEST["check1"]))
 {
  $cant = $cant + 1;
}

if (isset($_REQUEST["check2"]))
 {
  $cant = $cant + 1;
}

if (isset($_REQUEST["check3"]))
 {
  $cant = $cant + 1;
}

if (isset($_REQUEST["check4"]))
 {
  $cant = $cant + 1;
}

echo "su nombre es". $_REQUEST["nombre"];
echo "<br>";
echo "practica: $cant deportes";


     ?>
