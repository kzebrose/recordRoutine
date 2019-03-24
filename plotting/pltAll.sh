#!/bin/bash

# update plt files with todays date
# this extends the x range to today

#get string with todays date in required format
today=$(php -f getToday.php)

#use templates to create updated plt files
sed "s/TODAY/$today/" 25ftwalk.template>25ftwalk.plt
sed "s/TODAY/$today/" 2minWalk.template>2minWalk.plt
sed "s/TODAY/$today/" tug.template>tug.plt

#use plt files to create png files
gnuplot "25ftwalk.plt"
gnuplot "2minWalk.plt"
gnuplot "tug.plt"
