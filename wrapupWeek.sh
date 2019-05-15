#!/usr/bin/env bash

weekDir=~/exercise/weekending
echo "Welcome to wrapupWeek.sh, the script to move the weekending directory under the save directory";
default=$(ls -rt ~/exercise/save|tail -n 1);
echo "I have calculated that $default is the Saturday date for the last week processed.";
echo "If the date looks correct type enter to confirm.";
echo "If this is wrong then correct the date";
read -e -p "Enter: " -i "$default" newName;

#a new weekending directory needs to be created
mv $weekDir ~/exercise/save/$newName;
mkdir $weekDir;
cp ~/exercise/makeThisWeek.sh $weekDir;
echo "I will now copy files from the following week into the new weekending directory";
./moveFiles.sh
echo "You are ready for a new week.  Happy exercising.";
