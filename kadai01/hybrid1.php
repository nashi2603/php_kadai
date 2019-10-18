<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="0;URL='./hybrid1.php'">
    </head>
    <body>
        <?php
            if (isset($_COOKIE['count'])) {
                setcookie("count", $_COOKIE['count']+1);
                foreach (range(1, 8) as $i) {
                    if ($i == $_COOKIE['count']) {
                        echo "<p>Hello, PHP.</p>\n";
                    } else {
                        echo "<br />\n";
                    }
                }
                if ($_COOKIE['count'] == 8) {
                    setcookie("count", 1);
                }
            } else {
                setcookie("count", 0);
            }
        ?>
    </body>
</html>
