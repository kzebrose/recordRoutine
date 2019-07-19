<?php
  include ("./mobile_header.php");
  global $logh,$currentLogName;

  function getExerciseTimesHandle()
  {
    $ret = fopen("exerciseTimes.dat", "a+") or die("Unable to open exerciseTimes.dat");
    $txt="<!-- === Exercise Times === ".date("Y/m/d H:i:s")."--> \n";
    fwrite($logh, $txt);
    return $logh;
  }

  function getLogHandle($name,$ver)
  {
    global $logh,$currentLogName;
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt="<!-- === v$ver === $name ".date("Y/m/d H:i:s")."--> \n";
    fwrite($logh, $txt);
    return $logh;
  }

  function getTimeHandle($name,$ver)
  {
    global $logh,$currentLogName;
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt="<!-- === v$ver === $name ".date("Y/m/d H:i:s")."--> \n";
    fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data)
  {
    $logh = getLogHandle('exercise','0.1');
//    $exh = getExerciseTimesHandle();
    foreach($data as $key => $line)
    {
      if(strcmp($key,"totalTime") === 0)
      {
        fwrite($logh,"<td>".$line."</td>\n");
        fwrite($logh,"</tr>");
      }
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
      elseif(strpos($key,"platform") === 0)
      {
        //ignore
      }
      else fwrite($logh,"<td>".$line."</td>\n");
    }
    //calculate total stretch time
    $nowObj = new DateTime("now");
    $thenObj = new DateTime($beginDate.$beginTime);
    //echo "now = ".$nowObj->format('Y-m-d/TH:i:s:u');
    //echo "then = ".$thenObj->format('Y-m-d/TH:i:s:u');
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
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous'>
 
  <script  type="text/javascript" src="assets/js/ex.js"></script>
 <link href="assets/css/ex.css" rel="stylesheet" type="text/css" />
</head>
<body onload="setPTimage('Gretchen-Photo-302x336.jpg')">
<img id="PT" src="">
<?php 
  global $logh,$currentLogName;
  $exData = $_POST;
  $platform = $exData['platform'];
echo "<h1>website = $website platform = $platform</h1>";
  if($platform == 'mobile')
  {
    $back = $website.'/start.php';
    $worksheetURL = "http://".$website."/singleSet.php?name=set1";
  }
  else
  {
    $back = $website;
    $worksheetURL = "http://".$website."/worksheet.html";
  }

  $name = "exercise";
  $applicationPath = dirname(__FILE__);
  //wH adds day of week and hour of day to make sure files line up in cronological sequence
  $dateString = date("wH_D_F_j_Y_ha_");
  $currentLogName = $applicationPath."/".$dateString."_stretch_".$name.".html";
  
  writeForm($exData);
  $todayArr = explode(" ",$exData['clock1']);
  //print_r($todayArr);
  $startThought =  $exData['startingCheckin'];
  $startTime =  $exData['stretchStartTime'];

  echo "<h2>I recorded you were $startThought  at $startTime $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2>\n";
  echo "<h2>Now that you have done some cardio and stretched it is time for the main event.</h2>";
  echo "<a id=worksheetLink href=$worksheetURL target='_blank' ><h1>Click When Ready to Focus On Form</h1></a></td>";
?>
  <a class="btn btn-primary" href="<?php echo "http://".$back ?>" >back</a>
</body>
</html>
