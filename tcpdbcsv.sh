#!/bin/bash

mysql -uroot -p12345678 capture -e "select * from tcpcapture into outfile '/var/lib/mysql-files/tcp.csv' fields terminated by ',' enclosed by \"'\"";


