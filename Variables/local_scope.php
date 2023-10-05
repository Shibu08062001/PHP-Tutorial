<!DOCTYPE html>
<html>
<body>

<?php
function myTest()
{
    $x = 10; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

// Output:
// Variable x inside function is: 5
// Variable x outside function is:
?>

</body>
</html>
