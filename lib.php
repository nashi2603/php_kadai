<!-- lib.php -->
<?php
// データベースに接続する
function dbcon() {
    try {
        $pdo = new PDO(DSN, DBID, DBPW);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    return $pdo;
}

// 指定されたテーブルのデータをすべて表示する
function show($pdo, $t) {
    $sql = "SELECT * FROM ${t}";
    $res = $pdo->query($sql);
    $data = $res->fetchAll();
    echo "<table border=\"1\">";
    echo "<tr>";
    for ($i = 0; $col = $res->getColumnMeta($i); $i++) {
        echo "<th>".$col["name"]."</th>";
    }
    echo "</tr>";
    foreach ($data as $rows) {
        echo "<tr>";
        foreach ($rows as $v) {
            echo "<td>".$v."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
