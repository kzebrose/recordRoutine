<?php include 'header.php'; ?>
<title>Kates Exercise Routine</title>
  <script type="text/javascript" src="assets/js/script.js"></script>
  <script  type="text/javascript" src="assets/js/alt.js"></script>
</head>
<body onload="onceOnLoad()">
<form action="action_page.php" method="post">
<div class="container-fluid">
      <div class="row">
         <div class="col-xs-12 col-md-6">
           <input size=50 id="clock1" type="text" name="clock1" value="clock1">
         </div><!-- end col -->
         <div class="col-3" onclick="fillComment('startingCheckin')">
            How are you feeling?
         </div><!-- end col -->
         <div class="col-3">
           <input id=startingCheckin size="20" type="text" name="startingCheckin" value="ready to start">
         </div><!-- end col -->
      </div><!-- end row -->
    <div class="row">&nbsp</div>
    <div class="row">
      <div class="col-xs-12 col-md-4"><h2>set 1&nbsp;&nbsp;</h2></div><!-- end col -->
      <div class="col-xs-12 col-md-4" onclick="setTimeExercise('set1startTime')">
           set start<input  id=set1startTime  type="text" name="set1startTime" value="09:00"> 
      </div><!-- end col -->
    </div><!-- end row -->
    <div class="row">
      <div class="col" onclick="fillComment('set1eversion')">eversion note<input id=set1eversion  type="text" name="set1eversion" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1footRaise')">foot raise note<input id=set1footRaise  type="text" name="set1footRaise" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1leanBack')">lean back note<input id=set1leanBack  type="text" name="set1leanBack" value="'"> </div><!-- end col -->
      <div class="col" onclick="fillComment('set1kickBack')">kick back note<input id=set1kickBack  type="text" name="set1kickBack" value="'"> </div><!-- end col -->
      <div class="col" onclick="setEndTimeExercise('set1startTime','set1endTime')">set end<input  id=set1endTime  type="text" name="set1endTime" value="09:00"> </div><!-- end col -->
      <div class="col">time in minutes <input id=set1endTimeMinusStart  type="text" name="set1time" value="Z17-Z12"> </div><!-- end col -->
      <div class="col-4" onclick="fillComment('midCheckin')">How are you feeling?:<input id=midCheckin  type="text" name="midCheckin" value="ready to start"> </div>
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
</div><!-- close container -->
</form> 
<?php include 'footer.php'; ?>
