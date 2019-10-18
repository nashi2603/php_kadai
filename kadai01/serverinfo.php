<?php
    foreach(array("SCRIPT_FILENAME", "SERVER_NAME", "REQUEST_METHOD", "REQUEST_TIME", "REMOTE_ADDR", "REMOTE_HOST", "REMOTE_PORT") as $i) {
        if ($i == "REMOTE_HOST") {
            echo gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "<br>";
        } elseif ($i == "REQUEST_TIME") {
            echo $_SERVER[$i] . " (". date("Y/m/d h/m/s", $_SERVER[$i]) .")<br>";
        } else {
            echo $_SERVER[$i] . "<br>";
        }
    }
?>
