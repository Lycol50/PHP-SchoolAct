<?php
// inputs and outputs

if(!is_int($_POST['firstnum']) || !is_int($_POST['firstnum'])) return echo 'Invalid input';

$array = array(
    'first' => $_POST['firstnum'],
    'second' => $_POST['secnum']
);

// buttons
$ADD = $_POST['ADD'];
$DIFF = $_POST['DIFF'];
$DIV = $_POST['DIV'];
$MULT = $_POST['MULT'];

$result = "The {operation} of {first} and {second} is {result}";

// operations
switch (true) {
    case $ADD:
        echo strtr($result, [
            '{operation}' => "Sum",
            '{first}' => $array['first'],
            '{second}' => $array['second'],
            '{result}' => (int) $array['first'] + $array['second']
        );
        break;
    case $DIFF:
        echo strtr($result, [
            '{operation}' => "Difference",
            '{first}' => $array['first'],
            '{second}' => $array['second'],
            '{result}' => (int) $array['first'] - $array['second']
        );
        break;
    case $DIV:
        echo strtr($result, [
            '{operation}' => "Dividend",
            '{first}' => $array['first'],
            '{second}' => $array['second'],
            '{result}' => (int) $array['first'] / $array['second']
        );
        break;
    case $MULT:
        echo strtr($result, [
            '{operation}' => "Product",
            '{first}' => $array['first'],
            '{second}' => $array['second'],
            '{result}' => (int) $array['first'] * $array['second']
        );
   break;
}

?>
<html lang="en">
<head>
    <title>PHP Calculator</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: Ubuntu; background-color: #151515; color: white; font-size: 20px;">
<form method="post" action="">
    Enter First Number: <input type="text" name="firstnum"><br>
    Enter Second Number: <input type="text" name="secnum"><br>
    <input type="submit" name="ADD" value="ADD"> <input type="submit" name="DIFF" value="DIFF"> <input type="submit" name="DIV" value="DIV">
    <input type="submit" name="MULT" value="MUL">
</form>
<footer><h6>Code by princepines<br>Available on <a
                href="https://github.com/Lycol50/PHP-SchoolAct/blob/main/Assignment4/calc.php">Github</a></h6></footer>
</body>
</html>
