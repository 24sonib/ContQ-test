#!/bin/bash
d_id=`docker run -d -it bhanucontq1`
d_ip=`docker exec $d_id cat /etc/hosts | awk 'FNR==7 {print $1}'` 
docker exec $d_id cat /etc/hosts | awk 'FNR==7 {print $1}' 
