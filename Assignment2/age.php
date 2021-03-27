<?php
    $age = 23 ; // put any number

    if(in_array($age, range(18, 59)))
    {
        echo "Your age is: {$age}\nYou are allowed to vote.";
    } else {
        echo ($age <= 17) ? "Your age is: {$age}\nSorry, You are too young to vote." : "Your age is: {$age}\nSorry, You are too old to vote.";
    }
?>
