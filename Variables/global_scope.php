<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // global scope

function myTest()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
// Output:
// Variable x inside function is:
// Variable x outside function is: 5
?>

</body>
</html>
