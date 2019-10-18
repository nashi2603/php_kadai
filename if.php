<!-- if.php -->
<?php
    $x = 7000;
    $y = 334;
    if ($x < $y) {
        // 条件が正しい時に実行
        echo "xの方が小さい<br>";
    } else if ($_SERVER["REMOTE_ADDR"] == '172.16.27.87') {
        echo "見せられないよ (:p<br>";
    } else {
        echo "それ以外の時<br>";
    }
?>
