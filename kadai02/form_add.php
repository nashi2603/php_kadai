<?php
$ans = 0;
$ans = $_GET['X'] + $_GET['Y'];
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>足し算</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <div class="container-fluid px-5">
            <form class="form-group px-5 my-3" action="" method="GET">
                <input type="number" name="X" maxlength="255" value="" autofocus class="my-3 form-control" placeholder="Xを入力してください。">
                <input type="number" name="Y" maxlength="255" value="" class="my-3 form-control" placeholder="Yを入力してください。">
                <input type="submit" name="ADD" value="足し算" class="my-3 form-control btn btn-primary">
            </form>
            <div class="form-group px-5 my-3">
                <label>Answer = </label>
                <input type="text" readonly class="form-control text-center" value="<?php echo $ans; ?>">
            </div>
        </div>
    </body>
</html>