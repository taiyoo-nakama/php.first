<?php
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
  print $add.'<br/>';
}

$total = addNumber(2, 3);
print $total;

function outputNumber($a)
{
  print "引数の値は".$a."です";
  return;
}

outputNumber(2);

// 引数が必要ない時
function outputHello()
{
  print "Hello world";
}

outputHello();

function score($score1,$score2,$score3)
{
  $total = $score1 + $score2 + $score3;
  if($total === 210){
    print '合格点は、〇〇なので合格です。';
  }elseif($total !== 210){
    print '合格点は丸々なので不合格です。';
  }
}
echo(score(60,90,80));

function squaer($base,$height)
{
  return $base*$height;
  print squaer.'<br/>';
}
function triangle($base,$height)
{
  return $base*$height/2;
}
function trapezoid($upperBase,$lowerBase,$height,)
{
  return($upperBase + $lowerBase)*$height/2;
}

echo squaer(4,8)."\n";
echo triangle(5,4)."\n";
echo trapezoid(4,8,2)."\n";

$people = array(
'people0' => 'Taro',
'people1' => 'Jiro',
'people2' => 'Saburo'
);
// stringは文字数
$people[] = 'Siro';
$people[9] = 'kuro';
array_push($people,'red');
$people['person4'] = 'bule';
// array_marge関数
$people = array_merge($people,array('person6' => 'Shiro'));
// 配列要素の消去
unset($people[1]);

var_dump($people);
echo "\n";
// 配列の要素の追加

// 問題
$subjects_score = array(
  'english' => 70,
  'math' => 85,
  'fapanese' => 50,
  'science' => 45,
);

$subjects_score['history'] = 80;
unset($subjects_score['science']);

far_dump($subjects_score);
echo "\n";

try{
  undefinedFunction();
}catch(\Throwable $th){
  echo 'catch'
  echo "\n";
}finally{
  echo "この行は実行されます";
}


try{
  throw new Exception('例外に投げます');
}catch(Exception $e){
  echo $e->getMessage();
}finally{
  echo "この行は実行されます" . "\n";
}
