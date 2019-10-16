<?php
    if (isset($_GET['name'])) {
        echo $_GET['name'] . " さん、PHPですよPHP！";
    } else {
        echo gethostbyaddr($_SERVER['REMOTE_ADDR']) . " さん、PHPですよPHP！";
    }
?>