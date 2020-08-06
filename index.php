<?php
$givenArray= [
    '1' => 100,
    '2' => 100,
    '3' => 100,
    '4' => 100,
    '5' => 100,
    '6' => 100,
    '7' => 100,
    '8' => 90,
    '9' => 100,
    '10' => 100,
];
$perfectArray= [
    '1' => 100,
    '2' => 100,
    '3' => 100,
    '4' => 100,
    '5' => 100,
    '6' => 100,
    '7' => 100,
    '8' => 100,
    '9' => 100,
    '10' => 100,
];
function getArgs($arr,$arr2){
    $i = 0;
   
    foreach ($arr as $key => $value) {
        $i = ($key * $value)+$i;
    }
     $y = 0;
    foreach ($arr2 as $key => $value) {
        $y = ($key * $value)+$y;
    }
    $ass = ($y - $i) / 10;
    
    echo $ass .' bag weighs 90 grams';
}
getArgs($givenArray,$perfectArray);
?>