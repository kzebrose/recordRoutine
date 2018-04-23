<?php
  global $logh;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    echo "<br>".$applicationPath."<br>";
    $logh = fopen($applicationPath."/".$name.".log", "a") or die("Unable to open $name.log");
    $txt=" === v$ver === $name ".date("Y/m/d H:i:s")."\n";
    fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data)
  {
    $logh = getLogHandle('exercise','0.1');
    foreach($data as $line)
    {
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
  $data = $_POST;
  writeForm($data);
  $show=print_r($data,true);
  echo "<br> $show <br>";
  echo "<h1> SUMMARY </h1>";echo "<ol>";
  foreach ($data as $key => $value)
  {
    echo "<li> $key  = $value</li> ";
  }
  echo "</ol>";

  $startThought =  $data[startingCheckin];echo "aaaa $startThought;";
    $startTime =  $data[stretchStartTime];
    $endTime =  $data[special_set_endTime];
    $todayStr = $date("D, d M Y");
    echo "It looks like  $startThought  at $startTime $todayStr<br>";
    $totalExerciseTime = $endTime - $startTime;
    echo "total exercise time is $totalExerciseTime";
  $show=print_r($data,true);
  echo "<br> $data <br>";
  echo "<br>$totalExerciseTime";
?>
</body>
</html>
