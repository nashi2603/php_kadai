<?php
    if (isset($_GET['name'])) {
        echo $_GET['name'] . " さん、PHPですよPHP！";
    } else {
        $lang = array("PHP", "Java", "Haskell", "Python", "Ruby", "JavaScript", "Objective-C", "C", "C#", "C++", "J", "J#", "Kotlin", "HyperTextMarkupLanguage", "Swift", "Basic", "Brainfuck", "COBOL", "Elixir", "F#", "FORTRAN", "GO", "Julia", "LISP", "Lua", "Perl", "Pascal", "Rust", "Scala", "TypeScript", "Visual Basic");
        echo gethostbyaddr($_SERVER['REMOTE_ADDR']) . " さん、" . $lang[rand(0, count($lang)-1)] . "ですよ" . $lang[rand(0, count($lang)-1)] ."！";
    }
?>