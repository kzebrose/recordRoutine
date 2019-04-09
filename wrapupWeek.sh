#!/usr/bin/env bash

weekDir=~/exercise/weekending
echo "Welcome, from wrapupWeek.sh, the script to move the weekending directory under the save directory";
echo "I need some help with naming the directory in the new location.";
echo "The most recently added name is ...";
ls -lrt ~/exercise/save|tail -n 1;
default=$(ls -rt ~/exercise/save|tail -n 1);
echo "Please enter the name you want for the current weekending directory.";
read -e -p "Enter: " -i "$default" newName;

#a new weekending directory needs to be created
mv $weekDir ~/exercise/save/$newName;
mkdir $weekDir;
cp ~/exercise/makeThisWeek.sh $weekDir;
# nextWeek.php returns the date $newName + ? days 
sunStr=$(php -f nextWeek.php $newName 1);
if [ -f ${sunstr} ];
then
  mv $sunStr $weekDir;
fi
monStr=$(php -f nextWeek.php $newName 2);
if [ -f ${monstr} ];
then
  mv $monStr $weekDir;
fi
tueStr=$(php -f nextWeek.php $newName 3);
if [ -f ${tuestr} ];
then
  mv $tueStr $weekDir;
fi
wedStr=$(php -f nextWeek.php $newName 4);
if [ -f ${wedstr} ];
then
  mv $wedStr $weekDir;
fi
thuStr=$(php -f nextWeek.php $newName 5);
if [ -f ${thustr} ];
then
  mv $thuStr $weekDir;
fi
friStr=$(php -f nextWeek.php $newName 6);
if [ -f ${fristr} ];
then
  mv $friStr $weekDir;
fi
satStr=$(php -f nextWeek.php $newName 7);
if [ -f ${satstr} ];
then
  mv $satStr $weekDir;
fi

echo "You are ready for a new week.  Happy exercising.";
