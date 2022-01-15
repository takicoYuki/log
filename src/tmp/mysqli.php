<?php
    $link = mysqli_connect('db','book_log','pass','book_log');

    if(!$link){
        echo 'データベースに接続できませんでした'.PHP_EOL;
        echo 'Error'.mysqli_connect_errno().PHP_EOL;
    }
    echo 'データベースに接続できました' . PHP_EOL;
    mysqli_close($link);
    echo 'データベースとの接続を切断しました' . PHP_EOL;
?>
