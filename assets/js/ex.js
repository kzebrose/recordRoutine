function sillyPopup()  //javascript
{
   alert("Go Girl!! You Got This!");
}
<!-- prevent submit on enter as I keep doing that by mistake -->
function enterKeyFunction(evt) 
{
   var evt = (evt) ? evt : ((event) ? event : null);
   var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
   if ((evt.keyCode == 13) && (node.type=="text"))  
   {
      sillyPopup();
      return false;
   }
}

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById('exerciseCode');
  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

function startOneClockTime()
{
  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  document.getElementById('clock1').value = today.toLocaleDateString("en-US",options);
  var t = setTimeout(startTime, 6000);
}

//called by firstPage and mainPage to start clocks
function onceOnLoad()
{

  var myTitle = document.title;
  var arrTitle = myTitle.split(" ");
  if(arrTitle[0] == "firstPage")
  {
    setLinkPath("/metrics.html","metricLink");
    setPTimage("Gretchen-Photo-302x336.jpg");
  }
  if(arrTitle[0] == "mainPage")
  {
    setPTimage("Gretchen-Photo-302x336.jpg");
  }
   setTimeExercise("set1startTime");
   startTime();
   document.onkeypress = enterKeyFunction;
}

//called by first_action.php
function firstOnLoad()
{
  setPTimage("Gretchen-Photo-302x336.jpg");
  setLinkPath("/worksheet.html","worksheetLink");
}

function startTime()
{
  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  document.getElementById('clock1').value = today.toLocaleDateString("en-US",options);
  document.getElementById('clock2').innerHTML = ":" + twoChar(m) + ":" + twoChar(s);
  document.getElementById('clock3').innerHTML = twoChar(h) + ":" + twoChar(m) + ":" + twoChar(s);
  var t = setTimeout(startTime, 6000);
}

function prettyClock()
{
  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  document.getElementById('clock1').value = today.toLocaleDateString("en-US",options);
  document.getElementById('clock2').value = twoChar(h) + ":" + twoChar(m) + ":" + twoChar(s);
}

function setTimeExercise(timeName)
{
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var myTime = document.getElementById(timeName);
  myTime.value = h + ":" + m;
  myTime.dataset.myTimeStamp = today.getTime();
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
  endTime.dataset.myTimeStamp= today.getTime();

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
  var mm = twoChar(Math.floor(msec / 1000 / 60));
  return mm;
}

function setTotalExerciseTime()
{

  /* get saved start time */
  var startTime = document.getElementById('set1startTime');
  var startStamp = Number(startTime.dataset.myTimeStamp);

  /* get saved end time */
  var endTime = document.getElementById('set4endTime');
  var endStamp = Number(endTime.dataset.myTimeStamp);

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
  var ssetdiff = document.getElementById('set4endTimeMinusStart');
  var totalExercise = Number(set1diff.dataset.diffTimeStamp) + Number(set2diff.dataset.diffTimeStamp) +
                      Number(set3diff.dataset.diffTimeStamp) + Number(ssetdiff.dataset.diffTimeStamp);

  var mm = Math.floor(totalExercise / 1000 / 60);
  if(totalExercise < 60000) mm= 0 ;
  totalExercise -= mm * 1000 * 60;
  var ss = Math.floor(totalExercise / 1000);
  document.getElementById('totalExerciseTime').value = twoChar(mm) + ":" + twoChar(ss);
}

function setComment(selectedComment)
{
  var comment = document.getElementById('comment');
  comment.dataset.currentComment = selectedComment;
  comment.innerHTML = selectedComment;
  comment.style.backgroundColor = "lightgreen";
  comment.style.fontSize = "20px";
}


function addComment(selectedComment)
{
  var comment = document.getElementById('comment');
  var currComment = comment.dataset.currentComment;
  comment.dataset.currentComment = currComment + ' ' + selectedComment;
  comment.innerHTML =  currComment + '&nbsp;' + selectedComment;
  comment.style.backgroundColor = "lightgreen";
  comment.style.fontSize = "20px";
}

function fillEndComment(selectedInput,startTime,endTime)
{
   fillComment(selectedInput);
   setEndTimeExercise(startTime,endTime);
}

function fillComment(selectedInput)
{
  //check start time was filled in and set if still default
  var setTag = selectedInput.slice(0, 3);
  var setNumber = selectedInput.slice(3, 4);
  if(setTag == "set")
  {
    var IdName = 'set'+setNumber+'startTime';
    var startTimeElement = document.getElementById(IdName);
    if(typeof startTimeElement.value !== 'undefined' && startTimeElement.value !== null)
    {
      if(startTimeElement.value == "00:00")
      {
        setTimeExercise(IdName);
      }
    }
  }
  var comment = document.getElementById('comment');
  var myInput = document.getElementById(selectedInput);
  myInput.value = comment.dataset.currentComment;
}

function twoChar(number)
{
  var ret = "0" + number;
  if(number > 9) ret = number;
  return ret;
}
function clearGoal(tag)
{
  var goal = document.getElementById('goal' + tag);
  goal.innerHTML = "_______";
  goal.style.backgroundColor = "white";
  goal.style.fontSize = "30px";
}
function setGoal(tag,minGoal,secGoal)
{
/* first clear all goals */
  clearGoal('2min');
  clearGoal('1min');
  clearGoal('30sec');

  var myDate = document.getElementById('clock1').value;
  var myTime = document.getElementById('clock3').innerHTML;
  var goal = document.getElementById('goal' + tag);
  var today = new Date(myDate + " " + myTime);
  var sumSec = today.getSeconds() + Number(secGoal);
  var sumMin = today.getMinutes() + Number(minGoal) + Math.floor(sumSec/60);
  var s = sumSec % 60;
  var m = sumMin % 60;
  var h = today.getHours() + Math.floor(sumMin/60);
  goal.innerHTML = twoChar(h) + ":" + twoChar(m) + ":" + twoChar(s);
  goal.style.backgroundColor = "lightyellow";
  goal.style.fontSize = "30px";
}

function setLinkPath(localPath,idName)
{
    siteName = window.location.hostname;
  var myElement = document.getElementById(idName);
  if(siteName == "zebrose.com")
  {
     myElement.href = "http://zebrose.com/exercise" + localPath;
  }
  else
  {
     myElement.href = "http://exercise.org" + localPath;
  }
}

function setPTimage(name)
{
  siteName = window.location.hostname;
  var ptImg = document.getElementById('PT');
  if(siteName == "zebrose.com")
  {
     ptImg.src = "/exercise/assets/images/" + name;
  }
  else
  {
     ptImg.src = "/assets/images/" + name;
  }
}
