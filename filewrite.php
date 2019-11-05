<!-- filewrite.php -->
<?php
    $msg = "";
    $filename = 'test.dat';
    if (isset($_POST['MSG'])) {
        $msg = $_POST['MSG'];
    }
    var_dump($msg);
    // データの保存
    // ファイルを開く
    $fp = fopen($filename, 'w');
    // 開いたファイルにデータを書き込み
    fwrite($fp, $msg);
    // ファイルを閉じる
    fclose($fp);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ファイルに保存</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="MSG">
            <input type="submit">
        </form>
    </body>
</html>