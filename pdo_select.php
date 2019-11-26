<!-- pdo_select.php -->
<?php
require_once "../dsn.php"; //試験に出る
require_once "lib.php";

$pdo = dbcon();

$sql = "SELECT * FROM pokemon";
$res = $pdo->query($sql);
// var_dump($res);

// 見出しだけ表示
for ($i = 0; $col = $res->getColumnMeta($i); $i++) {
    echo $col['name'] . ",";
}

$data = $res->fetchAll();
foreach($data as $rows) {
    // var_dump($rows);
    echo $rows["id"];
    echo $rows["name"];
    echo $rows["type"];
    echo $rows["update"];
}

$tbl = "pokemon";
show($pdo, $tbl);

$pdo = null;
?>
