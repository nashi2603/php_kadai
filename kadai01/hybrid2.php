<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <div class="container my-5">
            <form method="GET" class="my-5">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">LOOP: </span>
                    </div>
                    <input type="text" class="form-control" name="LOOP">
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" value="送信">
                    </div>
                </div>
            </form>
        <?php
            $colors = array("red", "#FF9900", "yellow", "green", "blue", "navy", "purple");
            $colnum = 0;
            if (!isset($_GET['LOOP']) or ($_GET['LOOP'] == "")) {
                $LOOP = 7;
            } else {
                $LOOP = $_GET['LOOP'];
            }
            foreach (range(1, $LOOP) as $i) {
                echo "<div class=\"text-center my-1\"><h3 style=\"background-color: ". $colors[$colnum] ."; color: white;\">Hello, PHP.</h3></div>";
                $colnum++;
                if ($colnum > 6) {
                    $colnum = 0;
                }
            }
        ?>
        </div>
    </body>
</html>