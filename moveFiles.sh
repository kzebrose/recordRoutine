#!/usr/bin/env bash

weekDir=~/exercise/weekending
echo "Welcome to moveFiles!  I will help you move files into the weekending directory.";
default=$(ls -rt ~/exercise/save|tail -n 1);
echo "I have calculated that $default is the Saturday date for the last week processed.";
echo "If the date looks correct type enter to confirm.";
echo "If this is wrong then correct the date";
read -e -p "Enter: " -i "$default" newName;

echo $newName;
sunStr=$(php -f nextWeek.php $newName 1);
for f in *$sunStr*; do
  ## Check if glob gets expanded to file.
  [ -e "$f" ] && flag=0 || flag=1
  break;
done
if [ $flag == 0 ]; then
  mv *$sunStr* $weekDir;
  echo "move Sunday files";
else
  echo "no Sunday file to move";
fi
monStr=$(php -f nextWeek.php $newName 2);
for f in *$monStr*; do
  ## Check if glob gets expanded to file.
  [ -e "$f" ] && flag=0 || flag=1
  break;
done
if [ $flag == 0 ]; then
  mv *$monStr* $weekDir;
  echo "move Monday files";
else
  echo "no Monday file to move";
fi
tueStr=$(php -f nextWeek.php $newName 3);
for f in *$tueStr*; do
  ## Check if glob gets expanded to file.
  [ -e "$f" ] && flag=0 || flag=1
  break;
done
##only mv files if files exist
if [ $flag == 0 ]; then
  mv *$tueStr* $weekDir;
  echo "move Tuesday file";
else
  echo "no Tuesday file to move";
fi
wedStr=$(php -f nextWeek.php $newName 4);
for f in *$wedStr*; do
  ## Check if glob gets expanded to file.
  [ -e "$f" ] && flag=0 || flag=1
  break;
done
##only mv files if files exist
if [ $flag == 0 ]; then
  mv *$wedStr* $weekDir;
  echo "move Wednesday files";
else
  echo "no Wednesday file to move";
fi
thuStr=$(php -f nextWeek.php $newName 5);
if [ $flag == 0 ]; then
  mv *$thuStr* $weekDir;
  echo "move Thursday files";
else
  echo "no Thursday file to move";
fi
friStr=$(php -f nextWeek.php $newName 6);
if [ $flag == 0 ]; then
  mv *$friStr* $weekDir;
  echo "move Friday files";
else
  echo "no Friday file to move";
fi
satStr=$(php -f nextWeek.php $newName 7);
if [ $flag == 0 ]; then
  mv *$satStr* $weekDir;
  echo "move Saturday files";
else
  echo "no Saturday file to move";
fi

