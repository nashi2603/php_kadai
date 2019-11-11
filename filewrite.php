<!-- filewrite.php -->
<?php
    $msg = "";
    $filename = 'test.dat';
    if (isset($_POST['MSG'])) {
        $msg = $_POST['MSG'];
    }
    // 投稿データの加工
    var_dump($msg);
    // データの保存
    // ファイルを開く
    // 'a' は追記
    // 'w'は上書き
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
        <p>
        <?php
            $fp = fopen($filename, 'r');
            if ($fp) {
                // ファイルが開けていれば処理を行う
                $line = fgets($fp);
            }
            while($line = fgets($fp)) {
                echo "$line<br>";
            }
            fclose($fp);
        ?>
        </P>
    </body>
</html>