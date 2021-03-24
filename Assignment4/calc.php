<?php
// inputs and outputs
$firstnum = $_POST['firstnum'];
$secnum = $_POST['secnum'];
$array = array($firstnum, $secnum);
$res = "";
$op = "";

// buttons
$ADD = $_POST['ADD'];
$DIFF = $_POST['DIFF'];
$DIV = $_POST['DIV'];
$MULT = $_POST['MULT'];

// operations
switch (true) {
    case $ADD:
        $res = array_sum($array);
        $op = "sum";
        break;
    case $DIFF:
        $op = "difference";
        $res = $firstnum - $secnum;
        break;
    case $DIV:
        $op = "dividend";
        $res = $firstnum / $secnum;
        break;
    case $MULT:
        $op = "product";
        $res = array_product($array);
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
<?php
// intial output
echo "The " . $op . " of " . $firstnum . " and " . $secnum . " is " . $res;
?>
<footer><h6>Code by princepines<br>Available on <a
                href="https://github.com/Lycol50/PHP-SchoolAct/blob/main/Assignment4/calc.php">Github</a></h6></footer>
</body>
</html>
