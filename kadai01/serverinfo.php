<?php
    foreach(array("SCRIPT_FILENAME", "SERVER_NAME", "REQUEST_METHOD", "REQUEST_TIME", "REMOTE_ADDR", "REMOTE_HOST", "REMOTE_PORT") as $i) {
        if ($i == "REMOTE_HOST") {
            echo gethostbyaddr($_SERVER["REMOTE_ADDR"]) . "<br>";
        } else {
            echo $_SERVER[$i] . "<br>";
        }
    }
?>