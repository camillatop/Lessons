<?php
$a = rand(-100, 100);
$b = rand(-100, 100);
echo "a:".$a."<br>";
echo 'b: '.$b.'<br>';
if ($a >= 0 && $b >= 0) {
    $c=($a-$b);
}elseif ($a < 0 && $b < 0) {
    $d=($a*$b);
}else {
    $e=($a+$b);
}
echo $c.'<br>';
echo $d.'<br>' ;
echo $e.'<br>';

