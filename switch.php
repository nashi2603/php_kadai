<!-- switch.php -->
<?php
    $cmd = "ip";
    switch ($cmd) {
        case "ip":
            echo $_SERVER["REMOTE_ADDR"];
            break;
        case "host":
            echo $_SERVER["SERVER_NAME"];
        default: break;
    }

?>
