<!-- form3.php -->
<?php
    // ここで送られてきたデータを受け取って使いやすいよう加工する
    if (!isset($_GET['X']) or !isset($_GET['Y'])) {
        if (!isset($_GET['X'])) {
            $_GET['X'] = 0;
        }
        if (!isset($_GET['Y'])) {
            $_GET['Y'] = 0;
        }
    }
    if (!isset($_GET['CALC'])) {
        $_GET['CALC'] = "足す";
    }
    $x = $_GET['X'];
    $y = $_GET['Y'];
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>form3.php</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <form action="" method="GET" class="form-group m-5">
            <p>X=</p>
            <input type="text" name="X" size="4" maxlength="3" class="form-control" value="<?php echo $x; ?>">
            <br />
            <p>Y=</p>
            <input type="text" name="Y" size="4" maxlength="3" class="form-control" value="<?php echo $y; ?>">
            <br />
            <input type="submit" name="CALC" value="足す" class="my-1 btn btn-primary form-control">
            <input type="submit" name="CALC" value="引く" class="my-1 btn btn-primary form-control">
            <input type="submit" name="CALC" value="かける" class="my-1 btn btn-primary form-control">
            <input type="submit" name="CALC" value="割る" class="my-1 btn btn-primary form-control">
        </form>
        <hr />
        <div class="m-5">
            <p>Ans=</p>
            <input type="text" readonly class="form-control" value="
            <?php
                if ($_GET['CALC'] == "足す") {
                    echo "${x} + ${y} = ".($x+$y);
                } elseif ($_GET['CALC'] == "引く") {
                    echo "${x} - ${y} = ".($x-$y);
                } elseif ($_GET['CALC'] == "かける") {
                    echo "${x} * ${y} = ".($x*$y);
                } elseif ($_GET['CALC'] == "割る") {
                    echo "${x} / ${y} = ".($x/$y);
                }
            ?>
            ">
        </div>
    </body>
</html>