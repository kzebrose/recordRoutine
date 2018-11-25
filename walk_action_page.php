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
    foreach($data as $key => $line)
    {
      if(strpos($key,"clock1") === 0)
      {
        fwrite($logh,"<tr><td colspan='3'>".$line."</td><td>walk day</td>\n");
      }
      elseif(strpos($key,"walkInfo") === 0)
      {
        fwrite($logh,"<td colspan='3' >".$line."</td>\n");
      }
      elseif(strpos($key,"distance") === 0)
      {
        fwrite($logh,"<td colspan='2'  class='setOne'>distance ".$line." miles</td>\n");
      }
      elseif(strpos($key,"time") === 0)
      {
        fwrite($logh,"<td colspan='2'  class='setOne'>time ".$line." minute</td>\n");
      }
      elseif(strpos($key,"pace") === 0)
      {
        fwrite($logh,"<td colspan='5'  class='setOne'>pace ".$line." min/miles</td>\n");
      }
      elseif(strpos($key,"footraises") === 0)
      {
        fwrite($logh,"<td colspan ='3' class='setTwo'></td><td colspan = '2' class='setTwo'>footraises ".$line."</td>\n");
      }
      elseif(strpos($key,"march") === 0)
      {
        fwrite($logh,"<td colspan = '2' class='setTwo'>march ".$line."</td>\n");
      }
      elseif(strpos($key,"kickback") === 0)
      {
        fwrite($logh,"<td colspan = '2' class='setTwo'>kickback ".$line."</td>\n");
      }
      elseif(strpos($key,"meInfo") === 0)
      {
        fwrite($logh,"<td colspan = '7' class='setThree'>".$line."</td>\n");
      }
      elseif(strpos($key,"weather") === 0)
      {
        fwrite($logh,"<td colspan = '2' class='setThree'>".$line."</td>\n");
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
  //echo "<br> $show <br>";
  echo "<h1> SUMMARY </h1>\n";echo "<ol>\n";
  $todayArr = explode(" ",$exData['clock1']);
  //print_r($todayArr);
  $clock2 =  $exData['clock2'];
  $weather =  $exData['weather'];
  $walkInfo =  $exData['walkInfo'];
  $meInfo =  $exData['meInfo'];
  $meInfoArr = explode(" ",$meInfo);
  $info = "";
  $lastWord = "";
  $index = 0;
  $show=print_r($meInfoArr,true);
  //echo "<br> $show <br>";
  foreach($meInfoArr as $word)
  {
    if(($lastWord = "I") && (($word == "was")||($word == "am")))
    {
      $info = $info."were ";
    }
    elseif($word == "I")
    {
      $info = $info."you ";
    }
    else
    {
      $info = $info.$word." ";
    }
    $lastWord = $word;
  }//end foreach

  //need more examples to finish
  //
  echo "<h2>I hope you had a nice walk using your $walkInfo.<br>";
  echo "It looks like $info and the weather was $weather<br> ";
  echo "at $clock2 on $todayArr[0] $todayArr[1] $todayArr[2] $todayArr[3]</h2><br>";

?>
<a href="/walk.html">Back to walk form</a><br>
<p><?php echo $meInfo ?></p>
</body>
</html>
