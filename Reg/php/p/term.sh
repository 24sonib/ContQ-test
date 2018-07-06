#!/bin/bash
shellinaboxd -t -s /:root:root:HOME:'docker run -it centos' -p 4235 > /dev/null &
