#!/usr/bin/env bash

#first message doesn't make sense if called from wrapweek.sh
#adding any argument removes the first message
CALL_FROM_WRAPWEEK=${1}
if [ -z ${CALL_FROM_WRAPWEEK} ];
then
  echo "Welcome to moveFiles!  I will help you move files into the weekending directory.";
fi

#nullglob effects how shell behaves when a 'glob' such as kat* does not match any file
#my experiments indicate this setting works for my shell zsh
#it allows me to get the length of a null list without an error
shopt -s  nullglob
weekDir=~/exercise/weekending
default=$(ls -rt ~/exercise/save|tail -n 1);
echo "I have calculated that $default is the Saturday date for the last week processed.";
echo "If the date looks correct type enter to confirm.";
echo "If this is wrong then correct the date";
read -e -p "Enter: " -i "$default" newName;
echo $newName;

### processes Sunday files ###
sunStr=$(php -f nextWeek.php $newName 1 file);
#check if nextWeek detected an error
if [[ $sunStr == *"ERROR"* ]]; 
  then 
    echo $sunStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$sunStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no sunday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv *$file $weekDir;
done

### processes Monday files ###
monStr=$(php -f nextWeek.php $newName 2 file);
#check if nextWeek detected an error
if [[ $monStr == *"ERROR"* ]]; 
  then 
    echo $monStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$monStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no monday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done

### processes Tuesday files ###
tueStr=$(php -f nextWeek.php $newName 3 file);
#check if nextWeek detected an error
if [[ $tueStr == *"ERROR"* ]]; 
  then 
    echo $tueStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$tueStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no tuesday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done

### processes Wednesday files ###
wedStr=$(php -f nextWeek.php $newName 4 file);
#check if nextWeek detected an error
if [[ $wedStr == *"ERROR"* ]]; 
  then 
    echo $wedStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$wedStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no wednesday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done

### processes Thursday files ###
thuStr=$(php -f nextWeek.php $newName 5 file);
#check if nextWeek detected an error
if [[ $thuStr == *"ERROR"* ]]; 
  then 
    echo $thuStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$thuStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no thursday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done

### processes Friday files ###
friStr=$(php -f nextWeek.php $newName 6 file);
#check if nextWeek detected an error
if [[ $friStr == *"ERROR"* ]]; 
  then 
    echo $friStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$friStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no friday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done


### processes Saturday files ###
satStr=$(php -f nextWeek.php $newName 7 file);
#check if nextWeek detected an error
if [[ $satStr == *"ERROR"* ]]; 
  then 
    echo $satStr;
    exit 99;
fi
#expand glob to a list of files in array list
list=(*$satStr*);
num=${#list[@]};
if [[ ${#list[@]} == 0 ]]; then echo "there are no saturday files";else echo "there are $num files";fi;
for file in "${list[@]}"; do 
  echo "move $file to $weekDir"; 
  mv $file $weekDir;
done
exit 1;
