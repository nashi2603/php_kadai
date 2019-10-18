<?php
function strcomp($data) {
    $str = "PCFET0NUWVBFIGh0bWw+DQo8aHRtbCBsYW5nPSJqYSI+DQogICAgPGhlYWQ+DQogICAgICAgIDxtZXRhIGNoYXJzZXQ9IlVURi04Ij4NCiAgICAgICAgPHRpdGxlPlBIUDwvdGl0bGU+DQogICAgPC9oZWFkPg0KICAgIDxib2R5Pg0KICAgICAgICA8cD5QSFDjgadIVE1M44KS5Ye65Yqb44GZ44KL44CCPC9wPg0KICAgIDwvYm9keT4NCjwvaHRtbD4=";
    $zcompstr = gzcompress($str, 9);
    return $zcompstr;
}
?>