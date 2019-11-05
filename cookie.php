<!-- cookie.php -->
<?php
    $cnt = 0;
    // クッキーの確認
    if (isset($_COOKIE['COUNT'])) {
        $cnt = $_COOKIE['COUNT'];
    }
    // アクセス毎に1増やす
    $cnt++;
    // Cookieにデータを保存する
    // 変数名,データ,有効期限
    setcookie('COUNT', $cnt, time()+3600);
?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookieを使ったカウンタ</h1>
    <p>
    このページに<?= $cnt ?>回アクセスした
    </p>
</body>
</html>