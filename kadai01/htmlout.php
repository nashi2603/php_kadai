<?php
    require "strcomp.php";
    echo base64_decode(gzuncompress(strcomp(1)));
?>