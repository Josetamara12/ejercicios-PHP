<?php
    if ($_REQUEST['operacion']== "suma")
    {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "El total de la suma es: " . $suma. "<br>";// code...
    }

    if ($_REQUEST['operacion']== "resta")
    {
      $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
      echo "El total de la resta es: " . $resta. "<br>";// code...
    }
    if ($_REQUEST['operacion']== "multiplica")
    {
      $multiplica = $_REQUEST['valor1'] * $_REQUEST['valor2'];
      echo "El total de la multiplicacion es: " . $multiplica. "<br>";// code...
    }
    if ($_REQUEST['operacion']== "exponente")
    {
      $exponente = $_REQUEST['valor1'] ** $_REQUEST['valor2'];
      echo "El exponente de: " . $_REQUEST['valor1'].  "es " . $exponente. "<br>";// code...
    }
     ?>

