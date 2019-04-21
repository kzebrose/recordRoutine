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
if [ -f ${sunStr} ]; then
  mv $sunStr $weekDir;
else
  echo "no Sunday file to move";
fi
monStr=$(php -f nextWeek.php $newName 2);
if [ -f ${monStr} ]; then
  mv $monStr $weekDir;
else
  echo "no Monday file to move";
fi
tueStr=$(php -f nextWeek.php $newName 3);
if [ -f ${tueStr} ]; then
  mv $tueStr $weekDir;
else
  echo "no Tuesday file to move";
fi
wedStr=$(php -f nextWeek.php $newName 4);
if [ -f ${wedStr} ]; then
  mv $wedStr $weekDir;
else
  echo "no Wednesday file to move";
fi
thuStr=$(php -f nextWeek.php $newName 5);
if [ -f ${thuStr} ]; then
  mv $thuStr $weekDir;
else
  echo "no Thursday file to move";
fi
friStr=$(php -f nextWeek.php $newName 6);
if [ -f ${friStr} ]; then
  mv $friStr $weekDir;
else
  echo "no Friday file to move";
fi
satStr=$(php -f nextWeek.php $newName 7);
if [ -f ${satStr} ]; then
  mv $satStr $weekDir;
else
  echo "no Saturday file to move";
fi

