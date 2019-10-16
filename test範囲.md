# テスト範囲

## webサーバとクライアントの通信の動き

* REQUEST
* RESPONSE
* RESPONSE Code (404 200 etc...)
* GET
* POST
* Session
* PHP Interpriter

## PHPの基本命令

* echo
* if
* while
* for
* foreach
* new 
* function
* require_once
* try ~ catch

## PHPでの変数

### 名前が `$_` で始まる変数はスーパーグローバル変数

* $_GET
* $_POST
* $_SERVER
* $_COOKIE

## PHPでの関数

* isset()
* empty()
* fopen()
* flock()
* fclose()
* fgets()
* fputs()
* htmlspecialchars()
* setcookie()

## 用語について

* サニタイズ (サニタイジング)
* 連想配列
* セッション
* DBドライバ

## DB操作のPHPプログラム

```php
// データベース接続
try {
    $pdo = new PDO(
        "pgsql:host=localhost; dbname=db;",
        "db", 
        "db"
    );
} catch (PDOException $e) {

}
```