
<form method="post">
    <input type="text" name="nhap" placeholder="nhap so">
    <input type="submit" value="check">
<?php
$cars = array(1,2,3,4,5);
$a = 1;
$b = 2;
if ($a == $_POST["nhap"]) {
    echo "<br><br> sum = " .array_sum($cars);
}
if ($b == $_POST["nhap"]) {
    sort($cars);
    foreach ($cars as $x) {
        echo "<br><br> $x <br>";
    }
}