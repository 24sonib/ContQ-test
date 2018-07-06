#!/bin/bash
shellinaboxd -t -s /:root:root:HOME:'docker run -it centos' -p 4250 > /dev/null &
