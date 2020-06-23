<?php
  global $logh, $currentLogName;

  function getLogHandle($name,$ver)
  {
    global $logh,$currentLogName;
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt="<!-- === v$ver === $name ".date("Y/m/d H:i:s")."--> \n";
    fwrite($logh, $txt);
    return $logh;
  }
  $name = "exercise";
  $applicationPath = dirname(__FILE__);

  //w adds day of week and hour of day forced to 00 to make sure files line up in cronological sequence
  //no stretch is for adding header to PT record
  $dateString = date("w01_D_F_j_Y_");
  $currentLogName = $applicationPath."/".$dateString."no_stretch_".$name.".html";

  $todayDay = date("d");
  $todayDayString = jddayofweek($todayDay, 1);
  $todayDateString = $todayDayString.", ".date("F d, Y");
  getLogHandle($name,1.0);
  fwrite($logh, "<tr><td colspan='3'>$todayDateString</td>\n");
  fwrite($logh, "<td class='stretch'>no stretch</td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");
  fwrite($logh, "<td class='stretch'></td>\n");

?>
