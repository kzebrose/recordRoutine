<?php

//script called from wrapupWeek.sh for date calculation
if($argc > 2)
{
  $lastName = $argv[1];
  $offset = $argv[2];
}
else
{
  echo "usage:nextWeek.php <weekendingYYYYMMMDD> <offset>\n";
  echo "offset is the number of days added to weekending date\n";
  exit;
}

//parse directory name from last week into a unix timestamp
$lastDate = substr($lastName,10);
//echo $lastDate."\n";
$lastDateObj = date_create_from_format('YFj',$lastDate);
//echo $lastDateObj->format('m-d-Y')."\n";
$dateFormat = "P".$offset."D";
$nextDateObj = $lastDateObj->add(new DateInterval($dateFormat));
echo "*".$nextDateObj->format('D_F_j_Y')."*\n";

?>
