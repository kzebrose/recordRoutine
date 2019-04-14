<?php
//used to get ending date for plots
//this is one month from the current date to give a margin
$date = date('Y-m-d');
$date = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
$date = date("Y-m-d",$date);
echo $date;
?>
