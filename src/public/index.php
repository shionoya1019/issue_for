<?php

//for文で$iを1~6までループさせ、$iが3の倍数の時だけ$iを出力するコードを書きましょう。
$i = 0;
for ($i =1; $i < 7; $i ++) {
  if ($i % 3 == 0 ) {
    echo $i . "<br>";
    continue;
  }
}

echo "<br>";
echo "◆おまけ◆" . "<br>";

echo "良い例" . "<br>";
$i = 0;
for ($i =1; $i < 7; $i ++) {
  if ($i % 3 == 0 ) {
    echo $i . "<br>";
    continue;
  }
  echo $i . "は3の倍数ではありません" . "<br>";
}

for ($br =1; $br < 3; $br ++) {
  echo "<br>";
}

echo "<br>";

echo "悪い例" . "<br>";
$i = 0;
for ($i =1; $i < 7; $i ++) {
  if ($i % 3 == 0) {
    echo $i . "<br>";
  } else {
    echo "3の倍数ではありません" . "<br>";
  }
}