#!/usr/bin/env bash

weekDir=~/exercise/weekending
echo "Welcome to wrapupWeek.sh, the script to move the weekending directory under the save directory";
echo "-------------------------------------------------------------------------------------------";
echo "Process Summary"
echo "++ create and review thisWeek_exercise.html";
echo "++ print thisWeek_exercise.html as PDF";
echo "++ store PDF in donShare/exercise";
echo "++ run this program to ...";
echo "            archive the weekending files under the save directory";
echo "            move the following weeks files into the weekending directory";
echo "-------------------------------------------------------------------------------------------";
echo "";
#This script should be run after a week report has been assembled and printed
#There should be a thisWeek_exercise.html that was printed as a PDF and is reading
#for the source files to be archived
#expand glob to a list of files in array list
echo "Check there is a thisWeek_exercise.html as a quick sanity check.";
tWeGlob=(/home/kate/exercise/weekending/thisWeek_exercise.html);
num=${#tWeGlob[@]};
if [[ $num != 1 ]]; then
  echo "thisWeek_exercise.html is missing";
  echo "you need to investigate why";
  echo "sorry I can't be of more help.";
  exit 99;
fi;
lastweekProcessed=$(ls -rt ~/exercise/save|tail -n 1);
nextweek=$(php -f nextWeek.php $lastweekProcessed 7 dir);
#check if nextWeek detected an error
if [[ $nextweek == *"ERROR"* ]]; 
  then 
    echo $nextweek;
    exit 99;
fi

#weekending directory should have all the files ready to archive the next week
#the following code checks that is true
nextSat=$(php -f nextWeek.php $lastweekProcessed 7 file);
#check if nextWeek detected an error
if [[ $nextSat == *"ERROR"* ]]; 
  then 
    echo $nextSat;
    exit 99;
fi
#expand glob to a list of files in array list
echo "Check there is a Sat file as a quick sanity check.";
satGlob=(/home/kate/exercise/weekending/*$nextSat*);
num=${#satGlob[@]};
if [[ "/home/kate/exercise/weekending/*$nextSat*" = ${satGlob[@]} ]]; then
  echo "there are no saturday files";
  echo "you need to investigate why $satGlob didn't expand to any files";
  echo "sorry I can't be of more help.";
  exit 99;
fi;
if [[ $num == 1 ]]; then 
  echo "there is one file";
else
  if [[ $num > 1 ]]; then 
    echo "there are $num files";
  fi;
fi;
for file in "${satGlob[@]}"; do 
  echo "$file in weekending as expected"; 
done
echo "";
#the auto checks passed, now confirm with a human
echo "I have calculated that $nextweek is the Saturday date for the next week to archive.";
echo "If the date looks correct type enter to confirm.";
echo "If this is wrong then correct the date or exit using ^C and investigate";
read -e -p "Enter: " -i "$nextweek" newName;
read -e -p "OK to mv $weekDir to ~/exercise/save/$newName?[Y/n]" answer;
if [ $answer != "Y" ]; then exit;
fi;

#a new weekending directory needs to be created
mv $weekDir ~/exercise/save/$newName;
mkdir $weekDir;
cp ~/exercise/makeThisWeek.sh $weekDir;

echo "I will now move files from the following week into the weekending directory";
./moveFiles.sh anything
retn_code=$?
if [[ $retn_code == 99 ]]
then
  echo "moveFiles.sh returned ERROR, you should check how files were left.";
else
  echo "You are ready for a new week.  Happy exercising.";
fi
