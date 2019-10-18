<!-- env.php -->
<?php
    // スーパーグローバル変数
    // このスクリプトの名前を取得する
    echo $_SERVER["PHP_SELF"]."<br>";
    // サーバーのホスト名
    echo $_SERVER["SERVER_NAME"]."<br>";
    // リクエストのメソッド名
    echo $_SERVER["REQUEST_METHOD"]."<br>";
    // リクエストの開始時のタイムスタンプ
    echo $_SERVER["REQUEST_TIME"]."<br>";
    // ユーザーのIPアドレス
    echo $_SERVER["REMOTE_ADDR"]."<br>";
    // アクセスしてきたホスト名
    echo $_SERVER["REMOTE_HOST"]."<br>";
    // アクセスに使われているポート番号
    echo $_SERVER["REMOTE_PORT"]."<br>";
?>
