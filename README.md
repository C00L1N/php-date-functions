# Age Calculator in PHP

This is a simple PHP script that calculates a person's age, months, days, and total time alive based on their birthdate and the current date.

## Features

- Displays your name
- Shows your birthdate
- Shows the current date
- Calculates your age in years, months, and days
- Calculates total days, hours, and minutes you have been alive

## Code Example

```php
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
```
