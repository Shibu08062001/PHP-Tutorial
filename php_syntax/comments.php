<!DOCTYPE html>
<html>
<head>
    <title>PHP Comments Example</title>
</head>
<body>
    <?php
// This is a single-line comment

/*
This is a multi-line comment.
It can span multiple lines.
 */

// Variable assignment
$name = "Shibu"; // Assigning a name

# Another single-line comment

// Display a message using the variable
echo "Hello, $name!"; // Greeting message

/**
 * This is a documentation comment for a function.
 *
 * @param string $name The name of the person.
 * @return string The greeting message.
 */
function greet($name)
{
    return "Hello, $name!";
}

// Using the function
$message = greet("Shibu Kumari");
echo "<p>$message</p>";
?>
</body>
</html>
