<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            if (!isset($_GET['LOOP'])) {
                $LOOP = 5;
            } else {
                $LOOP = $_GET['LOOP'];
            }
            foreach (range(1, $LOOP) as $i) {
                echo "Hello, PHP.<br>";
            }
        ?>
    </body>
</html>