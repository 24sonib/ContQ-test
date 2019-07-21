#!/bin/bash 
docker ps | awk '{print $1}' > /home/blogger/basic_script/idfile 
vim.tiny -c '%s/CONTAINER\n//g | wq'  /home/blogger/basic_script/idfile
while read LINE
    do docker kill $LINE 
done < /home/blogger/basic_script/idfile
