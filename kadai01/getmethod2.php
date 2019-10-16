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

        <div class="mx-5 mt-5">
            <form method="GET">
                <div class="form-group">
                    <p>X:</p> 
                    <input type="text" name="x" size="30" class="form-control">
                </div>
                <div class="mx-5">
                    <select name="type" class="form-control">
                        <option value="tasu">+ (足し算)</option>
                        <option value="hiku">- (引き算)</option>
                        <option value="kake">* (掛け算)</option>
                        <option value="waru">/ (割り算)</option>
                        <option value="amari">% (余り)</option>
                    </select>
                </div>
                <div class="form-group">Y: 
                    <input type="text" name="y" size="30" class="form-control">
                </div>
                <p>
                    <input type="submit" value="計算" class="btn btn-primary">
                </p>
            </form>
            <p>Result: 
            <?php
                if (isset($_GET['x']) and isset($_GET['y'])) {
                    if (($_GET['x'] == "") or ($_GET['y'] == "")) {
                        echo "X,Y 両値を入力してください。";
                    } else {
                        if (isset($_GET['type'])) {
                            if ($_GET['type'] == "tasu") {
                                echo $_GET['x'] + $_GET['y'];
                            } elseif ($_GET['type'] == "hiku") {
                                echo $_GET['x'] - $_GET['y'];
                            } elseif ($_GET['type'] == "kake") {
                                echo $_GET['x'] * $_GET['y'];
                            } elseif ($_GET['type'] == "waru") {
                                echo $_GET['x'] / $_GET['y'];
                            } elseif ($_GET['type'] == "amari") {
                                echo $_GET['x'] % $_GET['y'];
                            }
                        } else {
                            echo $_GET['x'] + $_GET['y'];
                        }
                    }
                } else {
                    echo "X,Y 両値を入力してください。";
                }
            ?>
            </p>
        </div>
    </body>
</html>