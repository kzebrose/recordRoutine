<?php 
include ("./functions.php");
include ("./mobile_header.html");
$website = getWebsite();
?>
<body onload="onceOnLoad()">
<?php $name =  $_GET["name"]; ?></h3>
<form action="http://<?php echo $website; ?>/action_single_page.php" method="post">
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
      <div class="col" onclick="fillComment('set4bandLift')">band lift note<input id=set4bandLift size="10" type="text" name="set4bandLift" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set4halfBand')">half band (5/5) lift note<input id=set4halfBand size="10" type="text" name="set4halfBand" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set4march')">march (10) note <input id=set4march size="10" type="text" name="set4march" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set4slowWalk','set4startTime','set4endTime')">2 minute slow walk note<input id=set4slowWalk size="10" type="text" name="set4slowWalk" value="'"> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col" id=comment >select a comment</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('OK')">OK</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('having trouble')">having trouble</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('doing well')" >doing well</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('ready for a break')">ready for a break</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('tired')" >tired</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('really great')">really great</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('Rock Star')" >Rock Star</div><!-- end col -->
      <div class="col suggestedComment" onclick="setComment('Reduced')">Reduced</div><!-- end col -->
      <div class="col addOnComment" onclick="addComment('3lb added')" >3lb added</div><!-- end col -->
      <div class="col addOnComment" onclick="addComment('8lb added')">8lb added</div><!-- end col -->
      <div class="col addOnComment" onclick="addComment('plus chat')">plus chat</div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-3">
         <h2>2 minute <span id="goal2min" onclick="setGoal('1min',2,0)">click for goal</span></h2>
      </div><!-- end col -->
      <div class="col-xs-12 col-md-3">
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
<input type="hidden" id="goal1min" name="goal1min" value=0  >
<input type="hidden" id="goal30sec" name="goal30sec" value=0   >
<input type="submit" value="Submit" style="height:50px">
</form> 
<?php include 'footer.php'; ?>
