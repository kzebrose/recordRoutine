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

?>
<html>
<body>

You appear to be <?php echo $_POST["startingCheckin"]; ?><br>
start time is: <?php echo $_POST["startTime"]; ?>
<?php 
  writeForm($_POST);
  $show=print_r($_POST,true);
  echo $show;
?>
</body>
</html>
