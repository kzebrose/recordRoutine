#!/bin/bash

# update plt files with endXranges date
# this extends the x range to endXrange

#get string with endXranges date in required format
endXrange=$(php -f getEndDate.php)

#use templates to create updated plt files
sed "s/END_RANGE/$endXrange/" 25ftwalk.template>25ftwalk.plt
sed "s/END_RANGE/$endXrange/" 2minWalk.template>2minWalk.plt
sed "s/END_RANGE/$endXrange/" tug.template>tug.plt

#use plt files to create png files
gnuplot "25ftwalk.plt"
gnuplot "2minWalk.plt"
gnuplot "tug.plt"

#remove plt files so you don't edit the plt file instead of 
# the template files !!
rm 25ftwalk.plt
rm 2minWalk.plt
rm tug.plt


