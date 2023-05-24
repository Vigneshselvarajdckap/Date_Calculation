<?php


$startDate = new DateTime('2001-06-05');
$endDate = new DateTime('2023-04-24');

$interval = $startDate->diff($endDate);
$totalDays = $interval->days;

echo "Number of days $totalDays";