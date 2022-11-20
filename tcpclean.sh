#!/bin/bash

rm captureFile
rm TCP
rm PayLoad

mysql -uroot -p12345678 capture -e "truncate tcpcapture;"
