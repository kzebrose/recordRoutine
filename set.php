<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <script type="text/javascript" src="http://exercise.org/assets/js/script.js"></script>
  <script  type="text/javascript" src="http://exercise.org/assets/js/ex.js"></script>
  <style>
td {
  border:3px solid green;
  outline: 3px dotted purple;
}
  </style>
</head>

<body>

    <h2><?php $setName =  $_GET['setName']; ?>&nbsp;&nbsp;</h2>
    <form action="record_set.php?setName=<?php echo $setName; ?>" method="post">

  <table>
    <td><h2><?php echo $setName; ?>&nbsp;&nbsp;</h2></td>
      <td onclick="setTimeExercise('set1startTime')">set start</td><td> <input  id=set1startTime size="7" type="text" name="set1startTime" value="09:00"> </td>
      <td onclick="fillComment('set1eversion')">eversion note</td><td> <input id=set1eversion size="10" type="text" name="set1eversion" value="'"> </td>
      <td onclick="fillComment('set1footRaise')">foot raise note</td><td> <input id=set1footRaise size="10" type="text" name="set1footRaise" value="'"> </td>
      <td onclick="fillComment('set1leanBack')">lean back note</td><td> <input id=set1leanBack size="10" type="text" name="set1leanBack" value="'"> </td>
      <td onclick="fillComment('set1kickBack')">kick back note</td><td> <input id=set1kickBack size="10" type="text" name="set1kickBack" value="'"> </td>
      <td onclick="setEndTimeExercise('set1startTime','set1endTime')">set end</td><td> <input  id=set1endTime size="7" type="text" name="set1endTime" value="09:00"> </td>
      <td>time in minutes</td><td> <input id=set1endTimeMinusStart size="7" type="text" name="set1time" value="Z17-Z12"> </td>
    </tr>
  </table>
  <br>
  <input type="submit" value="Submit">
</form> 

<p></p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>

