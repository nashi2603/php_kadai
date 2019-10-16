<?php
    $x = 15;
    $y = 6;
    foreach(array("+", "-", "*", "/", "%") as $i) {
        eval("echo \"$x $i $y = \" . ($x $i $y) . \"<br>\";");
    }
?>