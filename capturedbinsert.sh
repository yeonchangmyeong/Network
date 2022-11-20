#!/bin/bash

mysql -uroot -p12345678 capture -e "load data local infile '/var/www/localhost/nmt/captureFile' into table capture fields terminated by '\n' lines terminated by '\n' ignore 0 lines;;"
