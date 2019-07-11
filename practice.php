<?php
//課題1
$a = 3;
$b =7;
echo $a + $b;
echo "\n";

//課題2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo "\n";

//課題3
$hello = "Hello, ";
$name = "kuroda";
$world = "s World!";
echo $hello . $name . $world;
echo "\n";

//課題4
$tech_boost =  "tech";
echo $tech_boost ."boost";
echo "\n";

//課題5
$calendar_2018 = [
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
echo $calendar_2018["December"];
echo "\n";

/*PHP/Laravel 03*/
//課題1
$name = "kuroda";
if($name == "kuroda"){
  echo "私は　あなたの　名前　です";
}else{
  "あなたの名前ではありません";
}
echo "\n";

//課題2
$total = 0;
echo $total;
//=> 0 と表示される。
for ($i = 0; $i < 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";

//課題3
$fruits = array("みかん","メロン","ぶどう","桃","梨");
foreach($fruits as $fruits){
  echo $fruits;
  echo "\n";
  
//課題4
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){
// 5で割り切れたら{}内を実行する
  if($i /= 5){
echo $i;
}
}
echo "\n";

