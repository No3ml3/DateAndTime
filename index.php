<?php

$presentTime = new DateTime();
echo $presentTime->format('m/d/Y à H:i:s'). "\n";

$destinationTime = new DateTime('2023-12-31 23:59:59');
echo $destinationTime->format('m/d/Y à H:i:s'). "\n";

$interval = $presentTime->diff($destinationTime);
echo "Durée : " . $interval->y . " années, " . $interval->m . " mois, " . $interval->d . " jours, " . $interval->h . " heures et " . $interval->i . " minutes." ."\n";


$intervalInSeconds = $destinationTime->getTimestamp() - $presentTime->getTimestamp();
$intervalInMinutes = round($intervalInSeconds / 60);

$litresOfFuel = floor($intervalInMinutes / 10000);
echo "Nombre de litres de carburant nécessaire : " . $litresOfFuel . " litres";


?>

