<?php
//warningSetting
error_reporting(0);
include "Warning.php";


while(true){
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください (1,2,9) :';
    $num = trim(fgets(STDIN));

    if ($num === '1'){
        //TODO 読書ログを登録
        createLogs();
        continue;
    }elseif($num === '2'){
        //TODO 読書ログを表示
        vewLogs($logs);
        continue;
    }elseif($num === '9'){
        //アプリケーションを終了
        break;
    }
}

/*
    読書ログをlog配列に追加する
*/
function createLogs(){
    echo '読書ログを登録してください' . PHP_EOL;
    echo '書籍名:';
    $title = trim(fgets(STDIN));
    echo '著者名:';
    $authorName = trim(fgets(STDIN));
    echo '読書状況:';
    $readStatus = trim(fgets(STDIN));
    echo '評価:';
    $evaluation = trim(fgets(STDIN));
    echo '感想:';
    $thoughts = trim(fgets(STDIN));
    registerBookLog($title, $authorName, $readStatus, $evaluation, $thoughts);
}

/*
    読書ログを表示させる
*/
function vewLogs(){
    echo '登録されている読書ログを表示します' . PHP_EOL;
    $logs = getBookLog();
    foreach ($logs as $log) {
        echo '書籍名:' .  $log['title'] . PHP_EOL;
        echo '著者名:' .  $log['authorName'] . PHP_EOL;
        echo '読書状況:' .  $log['readStatus'] . PHP_EOL;
        echo '評価:' .  $log['evaluation'] . PHP_EOL;
        echo '感想:' .  $log['thoughts'] . PHP_EOL;
        echo '------------------------------------------' . PHP_EOL;
    }
}

/*
    DBに読書ログを登録する
*/
function registerBookLog($title, $authorName, $readStatus, $evaluation, $thoughts){

    $link = mysqli_connect('db','book_log','pass','book_log');

    if(!$link){
        echo 'ERR:DB接続に失敗しました'.PHP_EOL;
        echo 'ERR:'.mysqli_connect_errno().PHP_EOL;
    }else{
        echo 'INF:DBに接続しました'.PHP_EOL;
        $link -> query("INSERT INTO reviews(title,author,status,score,summary)VALUES($title, $authorName,$readStatus,$evaluation,$thoughts);");
    }
}

/*
    DBから読書ログを取得する
*/
function getBookLog(){
    $link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
    $result = null;

    if (!$link) {
        echo 'ERR:DB接続に失敗しました' . PHP_EOL;
        echo 'ERR:' . mysqli_connect_errno() . PHP_EOL;
    } else {
        echo 'INF:DBに接続しました' . PHP_EOL;
        $result = $link->query("SELECT * FROM reviews");
        echo $result;
    }

    return $result;
}

?>
