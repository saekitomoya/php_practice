<?php
$a = 3;
$b = 7;
//$aと$bで足し算
$c = $a + $b; 
echo $c;
echo "\n";
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
echo $array_month[7];
echo "\n";

$hello = "Hello,";
$name = "佐伯友哉";
$world ="sworld";
$u = $hello . $name . $world;
echo $u;
echo "\n";
$tech_boost = 'tach';
$tech_boost .= 'boost';
echo $tech_boost;
echo "\n";
$tach2018_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $tach2018_calendar["December"];

//Laravel03
$name = "佐伯友哉";
if ($name) {
    echo  "あなたの名前ではありません";
} else {
    echo "あなたの名前です";
}
    echo "\n";
 
 $total = 0;
 echo $total;
 for ($i = 0; $i <= 10000; $i++){
   $total += $i;
 }
 echo $total;
 echo "\n";
 
 $fruits = array("apple","gurape","orange","pineapple","peach");
 foreach($fruits as $fruit){
   echo "名前は". $fruit;
   echo "\n";
 } 
 
 $start = 1;
 $end = 100;
for($i = $start; $i <= $end; $i++){
     if($i % 5 == 0)
    echo $i;
    echo"\n";
}

 
 //laravel04
 function sum($max) {
     $result = 0;
     for($i = 1; $i <= $max; $i++ ){
         if($i % 2 == 0) 
                $result += $i;
     }
    return $result;
}
   echo sum(10);
   echo "\n";
   
function add($a, $b){
    $i = $a + $b;
    return $i;
}    
echo add(1,2);
echo "\n";

$arr = array(1,3,5,7,9);
print_r($arr);
function myFuncC($arr){
    foreach($arr as $value){
    $arr*= $value;
    }
    echo("配列の計算結果:".$value);
}myFuncC($arr);