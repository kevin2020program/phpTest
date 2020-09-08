
<?php

function times2($num){
    $num *= 2;
    return $num;
}
echo times2(5) . "\n";

function f($a, $b){
    return $a + $b;
    }
echo f(3,5) . "\n";

function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9)) . "\n";

function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number < $a){
             $max_number = $a;
         }
     }
     return $max_number;
     }
echo max_array(array(3, 9, 7, 1, 6)) . "\n";

?>
