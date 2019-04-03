#!/usr/bin/env bash

weekDir=~/exercise/weekending
ls -lrt ~/exercise/save|tail -n 1;
default=$(ls -rt ~/exercise/save|tail -n 1);
echo "Please enter the date for the last week processed";
read -e -p "Enter: " -i "$default" newName;

echo $newName;
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

