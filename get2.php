<!-- get2.php -->
<?php
    if (isset($_GET['X']) and isset($_GET['Y'])) {
        $x = htmlspecialchars($_GET['X'], ENT_QUOTES, 'UTF-8');
        $y = $_GET['Y'];
        echo "$x + $y = ".($x+$y)."<br>";
    }
?>