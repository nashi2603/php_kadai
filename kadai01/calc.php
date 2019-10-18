<?php
    foreach(array("+", "-", "*", "/", "%") as $i) {
        eval("echo 8 $i 3 . \"<br>\";");
    }
?>