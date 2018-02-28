
<?php

/*
$days = array("Monday", "Tuesday", "Wednesday");

foreach($days as $value) {echo "&bull; $value";}

$months = array('jan' => 'January', 'feb' => 'February', 'mar' => 'March');

echo '<dl>';
foreach ($months as $key => $value)
 { echo "<dt>$key<dd>$value";}
 echo '</dl>';

*/

# Sorting arrays

$cars = array('Dodge' => 'Viper', 'Chevrolet' => 'Camero', 'Ford' => 'Mustang');

echo '<dl><dt>Original Element Order :<dd>';
foreach($cars as $key => $value)
{echo '&bull;' , $key. '' .$value;}

asort($cars);

echo '<dt>Sorted into the Value Order :<dd>';

foreach($cars as $key => $value)
{echo '&bull; ', $key. ' ' .$value;}

ksort($cars);

echo '<dt>Sorted into the Key Order :<dd>';

foreach($cars as $key => $value)
{echo '&bull; ', $key. ' ' .$value;}

echo '</dl>';

 ?>
