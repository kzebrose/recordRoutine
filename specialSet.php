<?php 
include ("./mobile_header.php");
?>
<body onload="onceOnLoad()">
<?php $name =  "setSpecial"; ?>
<form action="http://<?php echo $website; ?>/action_single_page.php" method="post">
<div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-md-6">
           <input size=50 id="clock1" type="text" name="clock1" value="clock1">
         </div><!-- end col -->
         <div class="col-3" onclick="fillComment('setSstartingCheckin')">
            <p>How are you feeling?</p>
         </div><!-- end col -->
         <div class="col-3">
           <input id=setSstartingCheckin size="20" type="text" name="setSstartingCheckin" value="ready to start">
         </div><!-- end col -->
      </div><!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-5"><h2><?php echo $name; ?>&nbsp;&nbsp;</h2><h3 id="clock2">clock2</h3></div><!-- end col -->
      <div class="col-xs-12 col-md-2"><img id="PT" width="100%" height="auto" src=""/></div><!-- end col -->
      <div class="col-xs-12 col-md-5">
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 1 -->
           <button type="button" class="btn btn-success" onclick="setTimeExercise('setSstartTime')">Start </button>
         </div><!-- end first col of inner row 1 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 1 -->
           <input  id=setSstartTime  type="text" name="setSstartTime" value="09:00">
         </div><!-- end second col of inner row 1 --></div><!-- end inner row 1 -->
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row singleButtons">
      <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment('setSbandLift')">band lift note</div><!-- end col -->
      <div class="col-xs-4"><input id=setSbandLift  type="text" name="setSbandLift" value="'" size="10"> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row singleButtons">
      <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment('setShalfBand')">half band (5/5) lift note</div><!-- end col -->
      <div class="col-xs-4"><input id=setShalfBand  type="text" name="setShalfBand" value="'" size="10"> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row singleButtons">
      <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment('setSmarch')">march (10) note</div><!-- end col -->
      <div class="col-xs-4"><input id=setSmarch  type="text" name="setSmarch" value="'" size="10"> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row singleButtons">
      <div class="col-xs-4" ><button  type="button" class="btn btn-success" onclick="fillComment('setSslowWalk')">2 minute slow walk note</div><!-- end col -->
      <div class="col-xs-4"><input id=setSslowWalk  type="text" name="setSslowWalk" value="'" size="10"> </div><!-- end col -->
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
         <h2>2 minute <span id="goal2min" onclick="setGoal('2min',2,0)">click for goal</span></h2>
      </div><!-- end col -->
      <div class="col-xs-12 col-md-3">
         <h1 id="clock3">clock3</h1>
      </div><!-- end col -->
      <div class="col-xs-12 col-md-6">
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 2 -->
           <button type="button" class="btn btn-success" onclick="setEndTimeExercise('setSstartTime','setSendTime')">End</button>
         </div><!-- end first col of inner row 2 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 2 -->
           <input  id=setSendTime    type="text" name="setSendTime" value="09:00">
         </div><!-- end second col of inner row 2 --></div><!-- end inner row 2 -->
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 3 -->
           <h3>time in minutes </h3>
         </div><!-- end first col of inner row 3 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 3 -->
           <input id=setSendTimeMinusStart  type="text" name="setStime" value="Z17-Z12">
         </div><!-- end second col of inner row 3 --></div><!-- end inner row 3 -->
      </div><!-- end col -->
    </div><!-- end row -->
</div><!-- close container -->
<input type="hidden" id="SetName" name="SetName" value="setSpecial" >
<input type="hidden" id="goal1min" name="goal1min" value=0 >
<input type="hidden" id="goal30sec" name="goal30sec" value=0 >
<input type="submit" value="Submit" style="height:50px">
</form> 
<?php include 'footer.php'; ?>
