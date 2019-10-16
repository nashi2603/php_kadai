<!-- html2.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php</title>
    </head>
    <body>
        <?php
        if (isset($_GET['LOOP'])) {
            $LOOP = $_GET['LOOP'];
        } else {
            $LOOP = 5;
        }
        foreach (range(1, $LOOP) as $i) {
            echo "<p>あいうえお</p>";
        }
        ?>
        <!-- <p>あいうえお</p> -->
    </body>
</html>