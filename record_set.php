<?php
  global $logh;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    $dateString = date("D_F_j_Y_ha_");
    $currentLogName = $applicationPath."/".$dateString.$name.".log";
    $logh = fopen($currentLogName, "c+") or die("Unable to open $currentLogName");
    $txt=" === v$ver === $name ".date("Y/m/d H:i:s")."\n";
    fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data,$setName)
  {
    $logh = getLogHandle($setName,'0.1');
    foreach($data as $line)
    {
      //echo $line."\n";
      fwrite($logh,$line."\n");
    }
    fclose($logh);
    return;
  }

  function summary($data)
  {
    return;
  }


?>
<html>
<body>

<?php 
  $exData = $_POST;
  $setName = $_GET["setName"];
  writeForm($exData,$setName);
  $show=print_r($exData,true);
  echo "<br> $show <br>";
  echo "<h1> Recorded $setName</h1>\n";
  echo "<button type = 'button' onclick='http://exercise.org' >Return to Program!</button>";

?>
  <h1> Recorded <?php echo $setName; ?></h1><br>
  <button type = 'button' onclick='http://exercise.org' >Return to Program!</button>

</body>
</html>
