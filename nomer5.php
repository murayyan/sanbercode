<?php

$n = 6;
$arr1=array();
$arr2=array();
$arr3=array();

$a=1;
$b=2;
$c=3;
for($i=1;$i<=$n/3;$i++){
    array_push($arr1, $a);
    array_push($arr2, $b);
    array_push($arr3, $c);
    $a+=3;
    $b+=3;
    $c+=3;
}
for($a=1;$a<=$n;$a++){
    for($b=1;$b<=$a;$b++){
        if(in_array($b, $arr1)){
            echo '#';
        }else if(in_array($b, $arr2)){
            echo '$';
        }else if(in_array($b, $arr3)){
            echo '%';
        }else{
            echo '#';
        }
    }
    echo '<br>';
}
