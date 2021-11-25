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