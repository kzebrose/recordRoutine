<?php
  global $logh,$currentLogName;

  function getLogHandle($name,$ver)
  {
    global $logh,$currentLogName;
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
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
//      elseif(strpos($key,"stretchStartTime") === 0)
//      {
//        $beginTime = $line;
//        fwrite($logh,"<tr><td colspan='3'>".$line."</td>\n");
//      }
      elseif(strpos($key,"stretch") === 0)
      {
        fwrite($logh,"<td class='stretch'>".$line."</td>\n");
      }
      elseif(strpos($key,"clock1") === 0)
      {
        $beginDate = $line;
        fwrite($logh,"<tr><td colspan='3'>".$line."</td>\n");
        //echo "<h1>This is begining $beginTime</h1>";
      }
      else fwrite($logh,"<td>".$line."</td>\n");
    }
    //calculate total stretch time
    $nowObj = new DateTime("now");
    $thenObj = new DateTime($beginDate.$beginTime);
    echo "now = ".$nowObj->format('Y-m-d/TH:i:s:u');
    echo "then = ".$thenObj->format('Y-m-d/TH:i:s:u');
    $stretchObj = $thenObj->diff($nowObj);
    fwrite($logh,"<td>stretch time ".$stretchObj->i.":".$stretchObj->s."</td>\n");
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
  global $logh,$currentLogName;
  $name = "exercise";
  $applicationPath = dirname(__FILE__);
  $dateString = date("wH_D_F_j_Y_ha_");
  $currentLogName = $applicationPath."/".$dateString.$name.".html";
  
//  if (!copy($applicationPath."/header.html", $currentLogName)) {
//    echo "failed to copy header\n";
//  }
  $exData = $_POST;
  writeForm($exData);
  //$show=print_r($exData,true);
  //echo "<br> $show <br>";
  $todayArr = explode(" ",$exData['clock1']);
  //print_r($todayArr);
  $startThought =  $exData['startingCheckin'];
  $startTime =  $exData['stretchStartTime'];

  echo "<h2>I recorded you were $startThought  at $startTime $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2>\n";
  echo "<h2>Now that you have done some cardio and stretched it is time for the main event.</h2>";
  echo "<a id=worksheetLink href='http:../worksheet.html' target='_blank' ><h1>Click When Ready to Focus On Form</h1></a></td>" 
  //echo "<ol>";
  //foreach ($exData as $key => $value)
  //{
   //     echo "<li> $key  = $value</li>\n ";
  //}
  //echo "</ol>\n";

?>
</body>
</html>
