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








// $= array [100,100,100,100,100];

// function getUniqueIndex($inputShares,$outShares){

//     foreach ($inputShares as $inputShare ) {
//         echo $inputShare; 
//     }

// }


// print_r(getUniqueIndex($inputShares,$outShares));
// die();


// функция 
// которая принимает 2 значения

// 1 значение массив где 1 значение выделяется 
// 2 идеальный массив 

// 1) сколько мешков 
// 2) идеальный вес 

// $arrayTo = [
//     '1'=> 90,
//     '2'=> 100,
//     '3'=> 100,
//     '4'=> 100,
//     '5'=> 100,
// ];
// print_r($arrayTo);

// // 1) принимает массив в котором 1 мешок 90
// // 2) количество мешочков 
// // 3) идеальный мешок 

// function poluchitMeshok($arrayTo, $numberOfBags, ) {
//     // можно узнать просто длину массива $numberOfBags

//     $arrayTo 
// }

?>