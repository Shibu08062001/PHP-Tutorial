<!DOCTYPE html>
<html>
<body>

<?php
$x = 51;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest(); // run function
echo $y; // output the new value for variable $y

// Output:
// 15

?>
</body>
</html>
