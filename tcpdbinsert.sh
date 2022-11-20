#!/bin/bash
mysql -uroot -p12345678 capture -e "load data local infile '/var/www/localhost/nmt/TCP' into table tcpcapture fields terminated by '\n' lines terminated by '\n' ignore 0 lines;;"

cp /var/lib/mysql/capture/tcp.csv tcp.csv
