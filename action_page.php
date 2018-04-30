<?php
  global $logh;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    //echo "<br>Look for ".$applicationPath."/exercise.log for documentation<br>";
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
  $exData = $_POST;
  writeForm($data);
  $show=print_r($exData,true);
  //echo "<br> $show <br>";
  echo "<h1> SUMMARY </h1>\n";echo "<ol>\n";
  $todayArr = explode(" ",$exData[clock1]);
  //print_r($todayArr);
  $startThought =  $exData[startingCheckin];
  $totalExerciseTime =  $exData[totalExerciseTime];
  $startTime =  $exData[stretchStartTime];
  $endTime =  $exData[special_set_endTime];
  echo "<h2>It looks like you were $startThought  at $startTime $todayArr[0]day $todayArr[1] $todayArr[2], $todayArr[3]</h2>\n";
    $totalTime = $exData[totalTime];
    $totalExerciseTime = $exData[totalExerciseTime];
    echo "<h2>total time is $totalTime</h2>";
    echo "<h2>total exercise time is $totalExerciseTime</h2>";
  foreach ($exData as $key => $value)
  {
    /*    echo "<li> $key  = $value</li>\n ";*/
  }
  echo "</ol>\n";

?>
</body>
</html>
