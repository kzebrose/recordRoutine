<?php 
include ("./mobile_header.php");
?>
<body onload="onceOnLoad()">
<?php $name =  $_GET["name"]; ?>
<form action="http://<?php echo $website; ?>/stretch_action.php" method="post">
<div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-md-6">
           <input size=50 id="clock1" type="text" name="clock1" value="clock1">
         </div><!-- end col -->
         <div class="col-3" onclick="fillComment('stretchCheckin')">
            <p>How are you feeling?</p>
         </div><!-- end col -->
         <div class="col-3">
           <input id=stretchCheckin size="20" type="text" name="stretchCheckin" value="ready to start">
         </div><!-- end col -->
      </div><!-- end row -->
    <div class="row">
      <div class="col-xs-12 col-md-5"><h2><?php echo $name; ?>&nbsp;&nbsp;</h2><h3 id="clock2">clock2</h3></div><!-- end col -->
      <div class="col-xs-12 col-md-2"><img id="PT" width="100%" height="auto" src=""/></div><!-- end col -->
      <div class="col-xs-12 col-md-5">
         <div class="row"><div class="col-xs-12 col-md-6"><!-- inner row 1 -->
           <button type="button" class="btn btn-success" onclick="setTimeExercise('stretchStartTime')">Start </button>
         </div><!-- end first col of inner row 1 --><div class="col-xs-12 col-md-6"><!-- second col of inner row 1 -->
           <input  id=set1startTime size="7" type="text" name="stretchStartTime" value="09:00">
         </div><!-- end second col of inner row 1 --></div><!-- end inner row 1 -->
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
      <div class="col" onclick="fillComment('set1stretchthigh')">inner and upper thigh note<input id=set1stretchthigh size="10" type="text" name="stretchthigh" value="">  </div><!-- end col -->
      <div class="col" onclick="fillComment('set1stretchcalf')">calf note<input id=set1stretchcalf size="10" type="text" name="stretchcalf" value=""> </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col" id=comment data-current="doing well">doing well</div><!-- end col -->
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
         <h2>2 min&nbsp;&nbsp;<span id="goal2min" onclick="setGoal('2min',2,0)">click for goal</span></h2>
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
<input type="hidden" id="goal2min" name="goal2min" value=0  >
<input type="hidden" id="goal30sec" name="goal30sec" value=0   >
<input type="hidden" id="platform" name="platform" value="mobile" >
<input type="submit" value="Submit" style="height:50px">
</form>
<?php include 'footer.php'; ?>
