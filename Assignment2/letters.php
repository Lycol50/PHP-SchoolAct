<?php
$letter = "a"; // put any letter
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$consonants = array("B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z", "Y", "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z", "y");
switch (true) {
    case in_array($letter, $vowels):
        echo "The letter is: " . $letter;
        echo "The letter is an vowel";
        break;
    case in_array($letter, $consonants):
        echo "The letter is: " . $letter;
        echo "The letter is an consonant";
        break;
    default:
        echo "The letter is: " . $letter;
        echo "invalid.";
}
?>
