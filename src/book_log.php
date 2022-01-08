<?php

$log = [];

while(true){
    echo '1. 読書ログを登録' . PHP_EOL;
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
        $authorName = trim(fgets(STDIN));
        echo '読書状況:';
        $readStatus = trim(fgets(STDIN));
        echo '評価:';
        $evaluation = trim(fgets(STDIN));
        echo '感想:';
        $thoughts = trim(fgets(STDIN));
        add_read_log($title, $authorName, $readStatus, $evaluation, $thoughts);
        echo '登録が完了しました';
        continue;
    }elseif($num === '2'){
        //TODO 読書ログを表示
        $title = '';
        $authorName = '';
        $readStatus = '';
        $evaluation = '';
        $thoughts = '';
        //TODO 後で削除する
        echo '登録されている読書ログを表示します' . PHP_EOL;
        echo '書籍名:' . $title . PHP_EOL;
        echo '著者名:' . $authorName . PHP_EOL;
        echo '読書状況:' . $readStatus . PHP_EOL;
        echo '評価:' . $evaluation . PHP_EOL;
        echo '感想:' . $thoughts . PHP_EOL;
        continue;
    }elseif($num === '9'){
        //アプリケーションを終了
        break;
    }
}

/*
    読書ログをlog配列に追加する
*/
function add_read_log($title,$authorName,$readStatus,$evaluation,$thoughts){

    $items = [
        'title' => $title,
        'authorName' => $authorName,
        'readStatus' => $readStatus,
        'evaluation' => $evaluation,
        'thoughts' => $thoughts,
    ];
    $log[] = $items;
}
?>
