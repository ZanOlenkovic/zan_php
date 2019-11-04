<?php
$bool = true;
$int = 1;
if ($bool === $int) {
    $li_1 = 'Identiski';
} elseif ($bool == $int) {
    $li_1 = 'Lygus';
}
$str = '1';
$bool = true;
if ($str === $bool) {
    $li_2 = 'Identiski';
} elseif ($str == $bool) {
    $li_2 = 'Lygus';
}
$flt = 1.23;
$str = '1.23';
if ($flt === $str) {
    $li_3 = 'Identiski';
} elseif ($flt == $str) {
    $li_3 = 'Lygus';
}
$ly_1 = "Bool ir Integer: $li_1";
$ly_2 = "Bool ir Integer: $li_2";
$ly_3 = "Bool ir Integer: $li_3";
?>
<html> 
    <head>
        <title><?php print 'orai' ?></title>
    </head>
    <body>
        <p><?php print $ly_1; ?></p>
        <p><?php print $ly_2; ?></p>
        <p><?php print $ly_3; ?></p>
    </body>

</html>
