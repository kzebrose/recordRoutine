<?php
function usage()
{
  echo "ERROR usage:nextWeek.php <weekendingYYYYMMMDD> <offset> <format>\n";
  echo "      offset is the number of days added to weekending date\n";
  echo "      format is either 'dir' or 'file'\n\n";
  echo "examples:\n          'dir' would be 'weekending2019May18'\n";
  echo "          'file' would be 'Sat_May_18_2019'\n";
}

//script called from move.sh and wrapupWeek.sh for date calculation
if($argc > 3)
{
  $lastName = $argv[1];
  $offset = $argv[2];
  $format = $argv[3];
}
else
{
  usage();
  exit;
}

//check name starts with weekending
$prefix = substr($lastName,0,10);
if($prefix != "weekending")
{
  echo "ERROR:name MUST start with weekending NOT $prefix - nextWeek.php\n";
  exit;
}
$len = strlen($lastName);
if($len != 19)
{
  echo "ERROR:name MUST have 19 characters - NOT $len nextWeek.php\n";
  exit;
}
//parse directory name from last week into a unix timestamp
$lastDate = substr($lastName,10);
//echo $lastDate."\n";
$lastDateObj = date_create_from_format('YFj',$lastDate);
//echo $lastDateObj->format('m-d-Y')."\n";
$dateFormat = "P".$offset."D";
$nextDateObj = $lastDateObj->add(new DateInterval($dateFormat));
if ($format == 'file')
{
  echo $nextDateObj->format('D_F_j_Y');
}
elseif ($format == 'dir')
{
  $newDate = $nextDateObj->format('YFj');
  echo "weekending$newDate";
}
else
{
  echo "\n\nERROR: $format is not a supported format\n\n";
  usage();
}


?>
