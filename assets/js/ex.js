/*document.addEventListener('DOMContentLoaded',function() 
    {
      var a = document.getElementById("myLink");
      a.innerHTML = "kz rules";
      a.onclick = function()
      {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        document.getElementById('stretchStartTime').value = h + ":" + m;
        return false;
      }
    });

/*$(document).ready(function($){
    $('#customerAutocomplte').autocomplete({
	source:'suggest_name.php', 
	minLength:2
    });
});
*/

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById('exerciseCode');
  /* copyText.innerHTML = "Fred";alert("whyNot"); */
  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

function startTime()
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  document.getElementById('clock1').value = today;
  document.getElementById('clock2').innerHTML = ":" + m + ":" + s;
  document.getElementById('clock3').innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 6000);
}

function setTimeExercise(timeName)
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var myTime = document.getElementById(timeName);
  myTime.value = h + ":" + m;
  myTime.dataset.myTimeStamp= today.getTime();
}

function setEndTimeExercise(startTimeName,endTimeName)
{
  /* initialize now time variable */
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();

  /* get saved start time */
  var startTime = document.getElementById(startTimeName);
  var startStamp = startTime.dataset.myTimeStamp;

  /* set end time variables */
  var endTime = document.getElementById(endTimeName);
  endTime.value = h + ":" + m;
  var endStamp = today.getTime();

  /* calculate the difference */
  var subLabel = endTimeName + "MinusStart";
  var diff_msec = (endStamp - startStamp);
  var hh = Math.floor(diff_msec / 1000 / 60 / 60);
  diff_msec -= hh * 1000 * 60 * 60;
  var mm = Math.floor(diff_msec / 1000 / 60);
  diff_msec -= mm * 1000 * 60;
  var ss = Math.floor(diff_msec / 1000);
  diff_msec -= ss * 1000;
  var diffTime = document.getElementById(subLabel);
  diffTime.value = mm + ":" + ss;
  diffTime.dataset.diffTimeStamp= endStamp - startStamp;
}

/* returns minutes from millisec time stamp */
function getMinutes(msec)
{
  var hh = Math.floor(msec / 1000 / 60 / 60);
  msec -= hh * 1000 * 60 * 60;
  var mm = Math.floor(msec / 1000 / 60);
  return mm;
}

function setTotalExerciseTime()
{
  /* initialize now time variable */
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();

  /* get saved start time */
  var startTime = document.getElementById('stretchStartTime');
  var startStamp = startTime.dataset.myTimeStamp;

  /* set end time variables */
  var endStamp = today.getTime();

  /* calculate the total time difference */
  var diff_msec = (endStamp - startStamp);
  var hh = Math.floor(diff_msec / 1000 / 60 / 60);
  diff_msec -= hh * 1000 * 60 * 60;
  var mm = Math.floor(diff_msec / 1000 / 60);
  diff_msec -= mm * 1000 * 60;
  var ss = Math.floor(diff_msec / 1000);
  diff_msec -= ss * 1000;
  document.getElementById('totalTime').value = mm + ":" + ss;

  /* calculate just the exercise time */
  var set1diff = document.getElementById('set1endTimeMinusStart');
  var set2diff = document.getElementById('set2endTimeMinusStart');
  var set3diff = document.getElementById('set3endTimeMinusStart');
  var ssetdiff = document.getElementById('specialsetendTimeMinusStart');
  var totalExercise = set1diff.dataset.diffTimeStamp + set2diff.dataset.diffTimeStamp + set3diff.dataset.diffTimeStamp + ssetdiff.dataset.diffTimeStamp;

  var mm = Math.floor(totalExercise / 1000 / 60);
  totalExercise -= mm * 1000 * 60;
  var ss = Math.floor(totalExercise / 1000);
  if(totalExercise < 60000) mm= 0 ;
  document.getElementById('totalExerciseTime').value = mm + ":" + ss;
}

function setComment(selectedComment)
{
  var comment = document.getElementById('comment');
  comment.dataset.currentComment = selectedComment;
  comment.innerHTML = selectedComment;
}

function fillComment(selectedInput)
{
  var comment = document.getElementById('comment');
  var myInput = document.getElementById(selectedInput);
  myInput.value = comment.innerHTML;
}
