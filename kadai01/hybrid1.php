<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;URL='./hybrid1.php'">
        <!-- ページ表示したときだけしか動かない(はず)ので多少は許してください！ -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <div class="text-center m-5">
        <?php
            if (isset($_COOKIE['count'])) {
                setcookie("count", $_COOKIE['count']+1);
                echo "<div class=\"mx-5\"><ul class=\"list-group\">";
                foreach (range(1, 8) as $i) {
                    if ($i == $_COOKIE['count']) {
                        echo "<li class=\"list-group-item list-group-item-primary\"><h2><strong><u>Hello, PHP.</u></strong></h2></li>\n";
                    } else {
                        echo "<li class=\"list-group-item list-group-item-secondary\"><h2>Hello, PHP.</h2></li>\n";
                    }
                }
                echo "</ul></div>";
                if ($_COOKIE['count'] == 8) {
                    setcookie("count", 1);
                }
                echo "<div class=\"progress mt-3\"><div class=\"progress-bar progress-bar-striped progress-bar-animated\" style=\"width:". (12.5 * $_COOKIE['count']) ."%\" role=\"progressbar\" aria-valuenow=\"". (125 * $_COOKIE['count']) ."\" aria-valuemin=\"0\" aria-valuemax=\"1000\"></div></div>";
            } else {
                setcookie("count", 0);
            }
        ?>
        </div>
    </body>
</html>
