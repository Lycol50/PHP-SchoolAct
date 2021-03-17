<?php
    $age = 23 ; // put any number
    if ($age <= 17) {
        echo "Your age is: " . $age;
        echo "Sorry you are too young to vote.";
    }
    elseif ($age >= 60) {
        echo "Your age is: " . $age;
        echo "You are qualified to vote.";
    }
    else {
        echo "Your age is: " . $age;
        echo "You are too old to vote.";
    }
