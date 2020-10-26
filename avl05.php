<?php
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];

$soma = $numero1 + $numero2;
$sub = $numero1 - $numero2;
$mult = $numero1 * $numero2;
$div = $numero1 / $numero2;
$media = $numero1 + $numero2 /2;

echo "Soma é: ".$soma."<br>";
echo "a subtração é ".$sub."<br>";
echo "a multiplicação é ".$mult."<br>";
echo "a divisão é ".$div."<br>";
echo "a Media é ".$media."<br>";
?>