#!/bin/bash

rm captureFile
rm UDP
rm PayLoad

mysql -uroot -p12345678 capture -e "truncate udpcapture;"
