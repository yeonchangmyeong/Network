#!/bin/bash

mysql -uroot -p12345678 capture -e "create table icmpcapture(Type varchar(20),Code varchar(20),Checksum varchar(20));"
