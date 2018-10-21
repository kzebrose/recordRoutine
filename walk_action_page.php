<?php
  global $logh;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    $dateString = date("D_F_j_Y_ha_");
    $currentLogName = $applicationPath."/".$dateString.$name.".html";
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt=" === v$ver === $name ".date("Y/m/d H:i:s")."\n";
    //fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data)
  {
    $logh = getLogHandle('exercise','0.1');
    $colspan = '\'1\'';
    $needDate = FALSE;
    if($data['set1startTime'] === 'check runkeeper')
    {
      $colspan = '\'6\'';
      $needDate = TRUE;
    }
    foreach($data as $key => $line)
    {
      if(strcmp($key,"totalTime") === 0)
      {
        fwrite($logh,"<td>".$line."</td>\n");
        fwrite($logh,"</tr>");
      }
      elseif(strpos($key,"colspan2") === 0)
      {
        fwrite($logh,"<td colspan='2' >".$line."</td>\n");
      }
      elseif(strpos($key,"set1") === 0)
      {
        fwrite($logh,"<td colspan = $colspan class='setOne'>".$line."</td>\n");
      }
      elseif(strpos($key,"set2") === 0)
      {
        fwrite($logh,"<td colspan = $colspan class='setTwo'>".$line."</td>\n");
      }
      elseif(strpos($key,"set3") === 0)
      {
        fwrite($logh,"<td colspan = $colspan class='setThree'>".$line."</td>\n");
      }
      elseif(strpos($key,"clock1") === 0)
      {
        if($needDate) fwrite($logh,"<tr><td colspan='3'>".$line."</td>\n");
      }
      else fwrite($logh,"<td>".$line."</td>\n");
    }
    fclose($logh);
    return;
  }

  function summary($data)
  {
    return;
  }


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8"/>

  <script  type="text/javascript" src="assets/js/ex.js"></script>
 <link href="assets/css/ex.css" rel="stylesheet" type="text/css" />
</head>
<body onload="setPTimage('Gretchen-Photo-302x336.jpg')">
<img id="PT" src="">
<?php 
  $exData = $_POST;
  writeForm($exData);
  $show=print_r($exData,true);
  echo "<br> $show <br>";
  echo "<h1> SUMMARY </h1>\n";echo "<ol>\n";
  $todayArr = explode(" ",$exData['clock1']);
  //print_r($todayArr);
  $startThought =  $exData['startingCheckin'];
  $totalExerciseTime =  $exData['totalExerciseTime'];
  $startTime =  $exData['stretchStartTime'];
  echo "<h2>It looks like you were $startThought  at $startTime $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2>\n";
    $totalTime = $exData['totalTime'];
    $totalExerciseTime = $exData['totalExerciseTime'];
    echo "<h2>total time is $totalTime</h2>";
    echo "<h2>total exercise time is $totalExerciseTime</h2>";
  foreach ($exData as $key => $value)
  {
        //echo "<li> $key  = $value</li>\n ";
  }
  echo "</ol>\n";

?>
<a href="/worksheet.html">Back to worksheet</a>
</body>
</html>
