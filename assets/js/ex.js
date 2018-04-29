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
  document.getElementById('clock1').innerHTML = today;
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
  alert("Fred is waiting" + myTime.dataset.myTimeStamp);
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
  document.getElementById(subLabel).value = mm + ":" + ss;
}



