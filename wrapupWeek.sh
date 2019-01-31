#!/bin/bash

echo "Welcome, from wrapupWeek.sh, the script to move the weekending directory under the save directory";
echo "I need some help with naming the directory in the new location.";
echo "The most recently added name is ...";
ls -lrt ~/exercise/save|tail -n 1;
echo "Please enter the name you want for the current weekending directory.";
read newName;

#a new weekending directory needs to be created
mv ~/exercise/weekending ~/exercise/save/$newName
mkdir ~/exercise/weekending
cp ~/exercise/mweek.sh ~/exercise/weekending

echo "You are ready for a new week.  Happy exercising.";
