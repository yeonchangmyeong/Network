#!/bin/bash

rm captureFile
rm ICMP
rm PayLoad

mysql -uroot -p12345678 capture -e "truncate icmpcapture;"
