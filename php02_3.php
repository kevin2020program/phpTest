<?php

//1
$price = 199;
function tax($price){
    $price *= 1.1;
    return floor($price);
}
echo tax($price);
echo "<br>";

//2
$age = 24;
$name = "Kevin";
function adult($age,$name){
    if ($age>=20){
        return $name;
    } else{
        return "未成年";
    }
}
echo adult($age,$name);
echo "<br>";

//3
$arr = [1,3,5,7,9];
function medium($arr){
    if (count($arr)%2 == 0){
        $result = ($arr[(count($arr)/2)-1] + $arr[(count($arr)/2)]) / 2;
        return $result;
    } else{
        $result = $arr[floor(count($arr)/2)];
        return $result;
    }
}
echo medium($arr);
echo "<br>";

//4
$price = 100;
$amount = 2000;
function saleprice($price,$amount){
    if ($price*$amount >= 10000){
        $price *= 0.8;
        return floor($price);
    } else{
        return $price;
    }
}
echo saleprice($price,$amount);
echo "<br>";

//5
$arr = [1,3,5,7,9,11];
function min_array($arr) {
    // とりあえず配列の最初の要素を1番小さい値とする
    $min_number = $arr[0];
    foreach($arr as $a) {
        if ($a < $min_number){
            $min_number = $a;
        }
    }
    return $min_number;
}
echo min_array($arr);