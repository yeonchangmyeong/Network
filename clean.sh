#!/bin/bash

rm captureFile
rm TCP
rm UDP
rm ICMP
rm PayLoad
rm allFile
mysql -uroot -p12345678 capture -e "truncate capture;"
mysql -uroot -p12345678 capture -e "truncate icmpcapture;"
mysql -uroot -p12345678 capture -e "truncate udpcapture;"
mysql -uroot -p12345678 capture -e "truncate tcpcapture;"
