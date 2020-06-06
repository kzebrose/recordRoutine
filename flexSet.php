<?php 
include ("./flex_header.php");
//$ini_file = 'June2020PT.ini';
echo $ini_file;echo "<br>";
$file = fopen($ini_file,"r");
while(!feof($file))
{
  $line = fgets($file);
  echo $line."<br>";
}
fclose($file);
$iniArr = parse_ini_file($ini_file);
print_r($iniArr);echo "<br>";

//display top exercises -- above comments
$topArr = $iniArr[top_exercise];
foreach($topArr as $th)
{
  $exerciseArr = explode(',',$th);
  $exerciseID = $exerciseArr[0];
  $exerciseName = $exerciseArr[1];
?>
    <div class="row singleButtons">
     <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment(<?php echo "'".$exerciseID."'"; ?>)"><?php echo $exerciseName; ?></button></div><!-- end col -->
     <div class="col-xs-4"><input id=<?php echo $exerciseID; ?>  type="text" name=<?php echo $exerciseID; ?> value="'" size="10"></div><!-- end col -->
    </div><!-- end row -->
<?php
}//end foreach top exercise
?>
    <div class="row">&nbsp</div>
    <div class="row">
    <div class="col" id=comment data-current="doing well" >select a comment</div><!-- end col -->
<?php
//display comments
$commentArr = $iniArr[comment];
foreach($commentArr as $comment)
{
?>
  <div class="col suggestedComment" onclick="setComment(<?php echo "'".$comment."'"; ?>)"><?php echo $comment; ?></div><!-- end col -->
<?php
}//end foreach comment
?>
    </div><!-- end row -->
<?php
//display bottom exercises -- below comments
$bottomArr = $iniArr[bottom_exercise];
foreach($bottomArr as $th)
{
  $exerciseArr = explode(',',$th);
  $exerciseID = $exerciseArr[0];
  $exerciseName = $exerciseArr[1];
?>
    <div class="row singleButtons">
     <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment(<?php echo "'".$exerciseID."'"; ?>)"><?php echo $exerciseName; ?></button></div><!-- end col -->
     <div class="col-xs-4"><input id=<?php echo $exerciseID; ?>  type="text" name=<?php echo $exerciseID; ?> value="'" size="10"> </div><!-- end col -->
    </div><!-- end row -->
<?php
}//end foreach bottom exercise
include ("./flex_footer.php");
?>

