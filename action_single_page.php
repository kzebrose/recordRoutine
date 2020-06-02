<?php
  include ("./mobile_header.php");
  global $logh, $exData;

  function getLogHandle($name,$ver)
  {
    $applicationPath = dirname(__FILE__);
    $dateString = date("wH_D_F_j_Y_ha_");
    $currentLogName = $applicationPath."/".$dateString."single".$name.".html";
    $logh = fopen($currentLogName, "a+") or die("Unable to open $currentLogName");
    $txt=" === v$ver === $name ".date("Y/m/d H:i:s")."\n";
    //fwrite($logh, $txt);
    return $logh;
  }

  function writeForm($data)
  {
   //print_r($data);
   $logh = getLogHandle('exercise','0.1');
   $classLabel = $data['SetName'];
   $record = "";
    foreach($data as $key => $line)
    {
      switch($classLabel)
      {
      case "set1":
          $record = "<td class='setOne'>".$line."</td>\n";
        break;
      case "set2":
          $record = "<td class='setTwo'>".$line."</td>\n";
        break;
      case "set3":
          $record = "<td class='setThree'>".$line."</td>\n";
        break;
      default:
        break;
      }
      if(strcmp($key,"totalTime") === 0)
      {
        fwrite($logh,"<td>".$line."</td>\n");
        fwrite($logh,"</tr>");
      }
      elseif(strpos($key,"set") === 0)
      {
        fwrite($logh,"$record");
      }
    }
    fclose($logh);
    return;
  }

  function summary($data)
  {
    return;
  }

  $exData = $_POST;
//  print_r($exData);
  writeForm($exData);

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
    <div class="row">
      <div class="col-xs-12 col-md-6">
         <img id="PT" src="">
      </div><!-- end col -->
      <div class="col-xs-12 col-md-6">

<?php 
    $show=print_r($exData,true);
    //echo "<br> $show <br>";
    echo "<h1> SUMMARY </h1>\n";echo "<ol>\n";
    $todayArr = explode(" ",$exData['clock1']);
    //print_r($todayArr);
    $startThought =  $exData['set1startingCheckin'];
    $totalExerciseTime =  $exData['totalExerciseTime'];
    $startTime =  $exData['set1startTime'];
    echo "<h2>It looks like you were $startThought  at $startTime $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2>\n";
    $totalTime = $exData['set1totalTime'];
    $totalExerciseTime = $exData['set1time'];
    echo "<h2>total time is $totalTime</h2>";
    echo "<h2>total exercise time is $totalExerciseTime</h2>";
    foreach ($exData as $key => $value)
    {
      //echo "<li> $key  = $value</li>\n ";
    }
  switch($exData['SetName'])
  {
  case "stretch":
    include "http://<?php echo $website; ?>/singleSet.php/?name=set1";
    break;
  case "set1":
    echo "<h2> time for <a class='btn btn-primary' role='button' href=http://";
    echo $website."/singleSet.php/?name=set2>set2</a></h2>";
    break;
  case "set2":
    echo "<h2> time for <a class='btn btn-primary' role='button' href=http://";
    echo $website."/singleSet.php/?name=set3>set3</a></h2>";
    break;
  case "set3":
    echo "<h2> time for <a class='btn btn-primary' role='button' href=http://";
    echo $website."/specialSet.php?name=setSpecial'>special set</a></h2>";
    break;
  case "setSpecial":
    echo "<h1>Done!</h1>";
    break;
  default:
    break;
  }
    echo "</ol>\n";

?>

</body>
</html>
   
