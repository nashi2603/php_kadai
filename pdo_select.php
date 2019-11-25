<!-- pdo_select.php -->
<?php
require_once "../dsn.php"; //試験に出る
require_once "lib.php";

$pdo = dbcon();

$sql = "SELECT * FROM pokomon";
$res = $pdo->query($sql);

// 見出しだけ表示
for ($i = 0; $col = $res->getColumnMeta($i); $i++) {
    echo $col['name'] . ",";
}
$pdo = null;
?>
