#!/bin/bash

# update plt files with todays date
# this extends the x range to today
today=$(php -f getToday.php)

gnuplot "25ftwalk.plt"
gnuplot "2minWalk.plt"
gnuplot "tug.plt"
