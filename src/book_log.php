<?php
//warningSetting
error_reporting(0);
include "Warning.php";

$logs = [];

while(true){
    echo '1. 読書ログを登録' . PHP_EOL;
    echo '2. 読書ログを表示' . PHP_EOL;
    echo '9. アプリケーションを終了' . PHP_EOL;
    echo '番号を選択してください (1,2,9) :';
    $num = trim(fgets(STDIN));

    if ($num === '1'){
        //TODO 読書ログを登録
        $logs[] = createLogs();
        continue;
    }elseif($num === '2'){
        //TODO 読書ログを表示
        echo '登録されている読書ログを表示します' . PHP_EOL;
        foreach($logs as $log){
            echo '書籍名:' .  $log['title'] . PHP_EOL;
            echo '著者名:' .  $log['authorName'] . PHP_EOL;
            echo '読書状況:' .  $log['readStatus'] . PHP_EOL;
            echo '評価:' .  $log['evaluation'] . PHP_EOL;
            echo '感想:' .  $log['thoughts'] . PHP_EOL;
            echo '------------------------------------------' . PHP_EOL;
        }
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
    echo '登録が完了しました';
    return  [
        'title' => $title,
        'authorName' => $authorName,
        'readStatus' => $readStatus,
        'evaluation' => $evaluation,
        'thoughts' => $thoughts,
    ];
}

/*
    読書ログを表示させる
*/
function echo_read_log(){

}

?>
