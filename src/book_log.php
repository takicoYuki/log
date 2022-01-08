<?php

echo '1. 読書ログを登録'.PHP_EOL;
echo '2. 読書ログを表示' . PHP_EOL;
echo '9. アプリケーションを終了' . PHP_EOL;
echo '番号を選択してください (1,2,9) :';

$num = trim(fgets(STDIN));

if ($num === '1'){
    //TODO 読書ログを登録
    echo '読書ログを登録してください' . PHP_EOL;
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

}elseif($num === '2'){
    //TODO 読書ログを表示
    //TODO 後で削除する
    echo '登録が完了しました' . PHP_EOL . PHP_EOL;
    echo '読書ログを表示します' . PHP_EOL;
    echo '書籍名:' . $title . PHP_EOL;
    echo '著者名:' . $AuthorName . PHP_EOL;
    echo '読書状況:' . $readStatus . PHP_EOL;
    echo '評価:' . $evaluation . PHP_EOL;
    echo '感想:' . $thoughts . PHP_EOL;
}elseif($num === '9'){
    //アプリケーションを終了

}


?>
