<?php


$days = array("Monday", "Tuesday", "Wednesday");

foreach($days as $value) {echo "&bull; $value";}

$months = array('jan' => 'January', 'feb' => 'February', 'mar' => 'March');

echo '<dl>';
foreach ($months as $key => $value)
 { echo "<dt>$key<dd>$value";}
 echo '</dl>';





 ?>
