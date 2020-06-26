<?php
  global $logh, $currentLogName;

  function getLogHandle($name,$ver, $ts)
  {
    global $logh,$currentLogName;
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt="<!-- === v$ver === $name ".date("Y/m/d H:i:s",$ts)."--> \n";
    fwrite($logh, $txt);
    return $logh;
  }

  echo "make_no_stretch will create a filler --exercise.html for the left columns of the weekend summary table\n";
  echo "For the following input use -1 for yesterday, 0 for today, 1 for tomorrow, etc \n";
  echo "What day should I use?  ";
  $input = rtrim(fgets(STDIN));
  $timeNoStretch = time() + $input*24*60*60;
  $name = "exercise";
  $applicationPath = dirname(__FILE__);

  //w adds day of week and hour of day forced to 00 to make sure files line up in cronological sequence
  //no stretch is for adding header to PT record
  $dateString = date("w01_D_F_j_Y_",$timeNoStretch);
  $currentLogName = $applicationPath."/".$dateString."no_stretch_".$name.".html";

  $todayDateString = date("l F d, Y",$timeNoStretch);
  getLogHandle($name,1.0,$timeNoStretch);
  fwrite($logh, "<tr><td colspan='3'>$todayDateString</td>\n");
  fwrite($logh, "<td class='stretch'>no stretch</td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");

?>
