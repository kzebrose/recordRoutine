<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' integrity='sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB' crossorigin='anonymous'>
  <!-- script type="text/javascript" src="assets/js/script.js"></script-->
  <!--script type="text/javascript" src="http://zebrose.com/exercise/assets/js/script.js"></script-->
  <script  type="text/javascript" src="../assets/js/ex.js"></script>
  <!--script  type="text/javascript" src="http://zebrose.com/exercise/assets/js/ex.js"></script-->
  <script  type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
 <link href="../assets/css/ex.css" rel="stylesheet" type="text/css" />
 <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
<title>mainPage Kates Exercise Routine</title>
</head>
<body onload="onceOnLoad()">
<?php $name =  $_GET["name"]; ?></h3>
<form action="../action_single_page.php" method="post">
<div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-md-6">
           <input size=50 id="clock1" type="text" name="clock1" value="clock1">
         </div><!-- end col -->
         <div class="col-3" onclick="fillComment('set1startingCheckin')">
            <p>How are you feeling?</p>
         </div><!-- end col -->
         <div class="col-3">
           <input id=set1startingCheckin size="20" type="text" name="set1startingCheckin" value="ready to start">
         </div><!-- end col -->
      </div><!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-5"><h2><?php echo $name; ?>&nbsp;&nbsp;</h2><h3 id="clock2">clock2</h3></div><!-- end col -->
      <div class="col-xs-12 col-md-2"><img id="PT" width="100%" height="auto" src=""/></div><!-- end col -->
      <div class="col-xs-12 col-md-5">
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 1 -->
           <button type="button" class="btn btn-success" onclick="setTimeExercise('set1startTime')">Start </button>
         </div><!-- end first col of inner row 1 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 1 -->
           <input  id=set1startTime  type="text" name="set1startTime" value="09:00">
         </div><!-- end second col of inner row 1 --></div><!-- end inner row 1 -->
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
      <div class="col" onclick="fillComment('set1eversion')">eversion note<input id=set1eversion  type="text" name="set1eversion" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1footRaise')">foot raise note<input id=set1footRaise  type="text" name="set1footRaise" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1leanBack')">lean back note<input id=set1leanBack  type="text" name="set1leanBack" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1kickBack')">kick back note<input id=set1kickBack  type="text" name="set1kickBack" value="'"> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col" id=comment >select a comment</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('OK')">OK</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('having trouble')">having trouble</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('doing well')" >doing well</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('ready for a break')">ready for a break</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('tired')" >tired</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('really great')">really great</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('Rock Star')" >Rock Star</div><!-- end col -->
      <div class="col" class="suggestedComment" onclick="setComment('Reduced')">Reduced</div><!-- end col -->
      <div class="col" class="addOnComment" onclick="addComment('3lb added')" >3lb added</div><!-- end col -->
      <div class="col" class="addOnComment" onclick="addComment('8lb added')">8lb added</div><!-- end col -->
      <div class="col" class="addOnComment" onclick="addComment('plus chat')">plus chat</div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-6">
         <h1 id="clock3">clock3</h1>
      </div><!-- end col -->
      <div class="col-xs-12 col-md-6">
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 2 -->
           <button type="button" class="btn btn-success" onclick="setEndTimeExercise('set1startTime','set1endTime')">End</button>
         </div><!-- end first col of inner row 2 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 2 -->
           <input  id=set1endTime    type="text" name="set1endTime" value="09:00">
         </div><!-- end second col of inner row 2 --></div><!-- end inner row 2 -->
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 3 -->
           <h3>time in minutes </h3>
         </div><!-- end first col of inner row 3 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 3 -->
           <input id=set1endTimeMinusStart  type="text" name="set1time" value="Z17-Z12">
         </div><!-- end second col of inner row 3 --></div><!-- end inner row 3 -->
      </div><!-- end col -->
    </div><!-- end row -->
</div><!-- close container -->
<input type="hidden" id="SetName" name="SetName" value=<?php echo $name; ?>   >
<input type="submit" value="Submit" style="height:50px">
</form> 
<?php include 'footer.php'; ?>
