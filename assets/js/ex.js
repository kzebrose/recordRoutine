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

function setStretch()
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  document.getElementById('stretchStartTime').value = h + ":" + m;
}

function setTimeExercise(timeName)
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  document.getElementById(timeName).value = h + ":" + m;
}



