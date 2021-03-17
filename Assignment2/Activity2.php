<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example</title>
</head>
<body>
<form action="" method="post">
    Age:
    <input type="text" name="age">
    <br>
    <br>
    <input type="submit" name="submit"><br><br>
    <?php
    if (isset($_POST['submit'])) {
        $age = $_POST['age'];
        if ($age <= 17) {
            echo "Your age is: " . $age;
            echo "<br> You are not eligible for voting.";
        } elseif ($age >= 60) {
            echo "Your age is: " . $age;
            echo "<br>You are not eligible for voting.";
        } else {
            echo "Your age is: " . $age;
            echo "<br> You are eligible for voting.";
        }
    }
    ?>
</form>
<br>
<form action="" method="post">
    Letter:
    <input type="text" name="letter">
    <br><br>
    <input type="submit" name="sub"><br><br>
    <?php
    if (isset($_POST['sub'])) {
        $letter = $_POST['letter'];
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $consonants = array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z", "Y", "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "y");
        switch(true)
        {
            case in_array($letter, $vowels):
                echo "The letter is: " . $letter;
                echo "<br> The letter is an vowel";
                break;
            case in_array($letter, $consonants):
                echo "The letter is: " . $letter;
                echo "<br> The letter is an consonant";
                break;
            default:
                echo "The letter is: " . $letter;
                echo "<br> undefined.";
        }
    }
    ?>
</form>
</body>
</html>
