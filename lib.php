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
