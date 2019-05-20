<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <script  src="assets/js/ex.js"></script>
  <script  src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
  <link href="assets/css/ex.css" rel="stylesheet" type="text/css" />
  <title> firstPage Kate's Exercise Routine</title>
</head>

<body onload="onceOnLoad()">

<form action="stretch_action.php" method="post">

  <table>
    <tr>
      <td colspan="1">
        <h1><input size=50 id="clock1" type="text" name="clock1" value="clock1"></h1>
        <br><a href="http://exercise.org/weekending/thisWeek_exercise.html">thisWeek</a>
        <br><a href="http://exercise.org/walk.html">record walk</a>
        <br><a href="http://zebrose.com/exercise/walkMobile.html">record walk on mobile</a>
        <br><a href="http://exercise.org/break.html">record break</a>
        <br><a href="http://exercise.org/start.php">StartPerSet</a>
      </td>
      <td>
        <img id="PT" src="/assets/images/Gretchen-Photo-302x336.jpg" alt="PT Gretchen" />
      </td>
      <td><a href="https://www.pandora.com" target="_blank"><h1>Start with some Cardio</h1></a></td>
      <td colspan="5"><h1>lean back and rest upper body for seated march<br/><br>have a natural stride and good posture for kickback</h1></td>
      <td></td>
    </tr>
    <tr>
      <td><h3>PT appt Friday May 10, 2019 1:00PM</h3></td>
      <td onclick="fillComment('startingCheckin')"> How are you feeling?</td><td><input id=startingCheckin size="20" type="text" name="startingCheckin" value="ready to start"></td>
      <td><a id=metricLink href="./metrics.html" target="_blank" >metrics</a></td>
      <td><span>L2UVHWD</span><a  href="http://www.my-exercise-code.com" target="_blank">exercise form described with video</a>
      </td>
      <td><button onclick="poppy()">HELP</button></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td id=comment >select a comment</td>
      <td class="suggestedComment" onclick="setComment('OK')">OK</td>
      <td class="suggestedComment" onclick="setComment('having trouble')">having trouble</td>
      <td class="suggestedComment" onclick="setComment('doing well')" >doing well</td>
      <td class="suggestedComment" onclick="setComment('tired')" >tired</td>
      <td class="suggestedComment" onclick="setComment('really great')">really great</td>
      <td class="suggestedComment" onclick="setComment('Rock Star')" >Rock Star</td>
      <td class="addOnComment" onclick="addComment('plus chat')">plus chat</td>
    </tr>
    <tr>
      <td><h2>stretch&nbsp;&nbsp;</h2></td>
      <td onclick="setTimeExercise('stretchStartTime')">set start</td><td><input  id=set1startTime size="7" type="text" name="stretchStartTime" value="09:00"></td>
      <td onclick="fillComment('set1stretchthigh')">set thigh note</td><td> <input id=set1stretchthigh size="10" type="text" name="stretchthigh" value=""> </td>
      <td onclick="fillComment('set1stretchcalf')">set calf note</td><td> <input id=set1stretchcalf size="10" type="text" name="stretchcalf" value=""> </td>
      <td></td>
    <tr>
      <td>2 minute<br><span id=goal2min onclick="setGoal('2min',2,0)">click4_g</span></td>
      <td>1 minute<br><span id=goal1min onclick="setGoal('1min',1,0)">click4_g</span></td>
      <td>30 seconds<br><span id=goal30sec onclick="setGoal('30sec',0,30)">click4_g</span></td>
      <td><h1 id="clock2">clock2</h1></td>
      <td><h1 id="clock3">clock3</h1></td>
      <td><input type="submit" value="Submit" style="height:50px"></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</form>
</body>
</html>

