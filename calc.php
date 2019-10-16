<!-- calc.php -->
<?php
    // <!-- -->はHTMLのコメント
    echo "1 + 1 = 1<br>";
    echo "1 + 1 = " . (1 + 1) . "<br>";
    // 好きな数字を使った計算式と答えを表示するコードを追加してください。
    echo "4 + 5 - 6 * 7 / 8 = " . (4 + 5 - 6 * 7 / 8) . "<br>";
    // 変数を使って表現する
    $x = 6;
    $y = 5;
    echo $x . " + " . $y . " = " . ($x + $y) . "<br>";
    echo "$x + $y = " . ($x + $y) . "<br>";
    echo '$x + $y = ' . ($x + $y) . '<br>';
    echo "${x}a + $y = " . ($x + $y) . "<br>";



    if (True == 1) {
        echo "True";
    } else {
        echo "False";
    }
    echo False ? 0 : 1;
?>