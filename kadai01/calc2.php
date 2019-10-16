<?php
    $x = 8;
    $y = 3;
    foreach(array("+", "-", "*", "/", "%") as $i) {
        eval("echo $x $i $y . \"<br>\";");
    }
?>