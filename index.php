<?php
    $name = "Coolin";
    $birthDate = new DateTime("2003-09-27");
    $today = new DateTime("2025-12-31");
    $currentYear = date("Y");
    $age = $birthDate->diff($today);

    $birthDateString = $birthDate->format("F j, Y");
    $todayString = $today->format("F j, Y");
    $ageString = $age->y;
    $months = $age->m;
    $days = $age->d;
    $daysAlive = $age->days;
    $hoursAlive = $daysAlive * 24;
    $minutesAlive = $hoursAlive * 60;


    echo "Hello {$name} <br>";
    echo "My Birthday is {$birthDateString} <br>";
    echo "Today is {$todayString} <br>";
    echo "You are {$ageString} years old <br>";
    echo "It's been {$months} months since your last birthday <br>";
    echo "You are {$ageString} years, {$months} months, and {$days} days old <br>";
    echo "You have been alive for {$daysAlive} days. <br>";
    echo "You've been alive for {$hoursAlive} hours and {$minutesAlive} minutes";
?>