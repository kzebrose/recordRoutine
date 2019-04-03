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
sunStr=$(php -f nextWeek.php $newName 1);
mv $sunStr $weekDir;
monStr=$(php -f nextWeek.php $newName 2);
mv $monStr $weekDir;
tueStr=$(php -f nextWeek.php $newName 3);
mv $tueStr $weekDir;
wedStr=$(php -f nextWeek.php $newName 4);
mv $wedStr $weekDir;
thuStr=$(php -f nextWeek.php $newName 5);
mv $thuStr $weekDir;
friStr=$(php -f nextWeek.php $newName 6);
mv $friStr $weekDir;
satStr=$(php -f nextWeek.php $newName 7);
mv $satStr $weekDir;

echo "You are ready for a new week.  Happy exercising.";
