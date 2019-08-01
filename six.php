<?php
function power($val,$pow){
    if ($pow>0) return $val*power($val,$pow- 1);
    if ($pow<0){
        $temp=power($val,$pow-$pow * 2);
        return 1/$temp;
    }return 1;
}
echo power(8,-2).'<br>';
echo power(8,2).'<br>';
echo power(8,0).'<br>';