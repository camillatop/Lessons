<?php
$k = rand( 0, 99);
echo $k."<br>";
$m = rand( 0, 99);
echo $m. "<br>";

function sl($k, $m)
{
    return $k+$m;
}
echo "сумма: ", sl($k, $m)."<br>";

function v($k, $m)
{
    return $k-$m;
}
echo  "вычитание: " ,v($k, $m). "<br>";

function ym($k, $m)
{
    return $k*$m;
}
echo "умножение: ",ym($k, $m)."<br>";
function de($k, $m)
{
    return $k/$m;
}
echo "деление: " ,de($k,$m)."<br>";


