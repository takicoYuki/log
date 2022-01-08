<?php

echo '読書ログを登録してください' .PHP_EOL;
echo '書籍名:';
$title = trim(fgets(STDIN));
echo '著者名:';
$AuthorName = trim(fgets(STDIN));
echo '読書状況:';
$readStatus = trim(fgets(STDIN));
echo '評価:';
$evaluation = trim(fgets(STDIN));
echo '感想:';
$thoughts = trim(fgets(STDIN));
echo '登録が完了しました';


echo '登録が完了しました'.PHP_EOL .PHP_EOL;
echo '読書ログを表示します' .PHP_EOL;
echo '書籍名:'. $title . PHP_EOL;
echo '著者名:' . $AuthorName . PHP_EOL;
echo '読書状況:' . $readStatus . PHP_EOL;
echo '評価:' . $evaluation . PHP_EOL;
echo '感想:' . $thoughts . PHP_EOL;

// echo '書籍名:銀河鉄道の夜' . PHP_EOL;
// echo '著者名:宮沢賢治' . PHP_EOL;
// echo '読書状況:読了' . PHP_EOL;
// echo '評価:5' . PHP_EOL;
// echo '感想:本当の幸せとは何だろうかと考えさせられる作品だった' . PHP_EOL;

?>
