<?php 
include ("./flex_header.php");
$iniArr = parse_ini_file($ini_file);
//print_r($iniArr);echo "<br>";
$introArr = $iniArr[intro];
if(is_array($introArr))
{
?>
  <h1><?php echo $introArr[0] ?></h1>
  <input type="hidden" id="exercise_type" name="exercise_type" value=<?php echo "'".$introArr[0]."'"; ?>   >
  <h1><?php echo $introArr[1] ?></h1>
  <input type="hidden" id="exercise_name" name="exercise_name" value=<?php echo "'".$introArr[1]."'"; ?>   >
<?php
}
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
<?php
//display comments
$commentArr = $iniArr[comment];
if(is_array($commentArr))
{
?>
    <div class="col" id=comment data-current="doing well" >select a comment</div><!-- end col -->
<?php
}
else
{
?>
    <div class="col" id=comment data-current="doing well" ></div><!-- end col -->
<?php
}
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

