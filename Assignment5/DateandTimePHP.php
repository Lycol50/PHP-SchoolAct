<?php
// setting timezone to Manila
date_default_timezone_set('Asia/Manila');

//  get Date
$dateToday = date("F d, Y");
$dateIdentifier = date("l");
echo "Today is " . $dateIdentifier . " of " . $dateToday. "<br>";

// get Time with timezone
$timeToday = date("g : h A");
$timeIdentifier = date("T [e] P");
echo "The time is " . $timeToday . " " . $timeIdentifier;
?>
