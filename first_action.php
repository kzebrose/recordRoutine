<?php
  global $logh;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    $dateString = date("D_F_j_Y_ha_");
    $currentLogName = $applicationPath."/".$dateString.$name.".html";
    $logh = fopen($currentLogName, "c+") or die("Unable to open $currentLogName");
    $txt=" === v$ver === $name ".date("Y/m/d H:i:s")."\n";
    //fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data)
  {
    $logh = getLogHandle('exercise','0.1');
    foreach($data as $key => $line)
    {
      $fred = strpos($key,'set1');
      $wilma = strpos($key,'set2');
      $barney = strpos($key,'set3');
      //echo $fred."F".$wilma."W".$barney."B"."(".$key.")".$line."<br>";
      if(strcmp($key,"totalTime") === 0)
      {
        fwrite($logh,"<td>".$line."</td>\n");
        fwrite($logh,"</tr>");
      }
      elseif(strpos($key,"set1") === 0)
      {
        fwrite($logh,"<td class='setOne'>".$line."</td>\n");
      }
      elseif(strpos($key,"set2") === 0)
      {
        fwrite($logh,"<td class='setTwo'>".$line."</td>\n");
      }
      elseif(strpos($key,"set3") === 0)
      {
        fwrite($logh,"<td class='setThree'>".$line."</td>\n");
      }
      elseif(strpos($key,"clock1") === 0)
      {
        fwrite($logh,"<tr><td colspan='3'>".$line."</td>\n");
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
<html>
<body>

<?php 
  $exData = $_POST;
  writeForm($exData);
  //$show=print_r($exData,true);
  //echo "<br> $show <br>";
  echo "<img src='http:../Gretchen-Photo-302x336.jpg'/>";
  $todayArr = explode(" ",$exData['clock1']);
  //print_r($todayArr);
  $startThought =  $exData['startingCheckin'];
  $startTime =  $exData['stretchStartTime'];

  echo "<h2>I recorded you were $startThought  at $startTime $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2>\n";
  echo "<h2>Now that you have done some cardio and stretched it is time for the main event.</h2>";
  echo "<a href='http:../worksheet.html' target='_blank' ><h1>Click When Ready to Focus On Form</h1></a></td>" 
  //echo "<ol>";
  //foreach ($exData as $key => $value)
  //{
   //     echo "<li> $key  = $value</li>\n ";
  //}
  //echo "</ol>\n";

?>
</body>
</html>