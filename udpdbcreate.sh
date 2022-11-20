#!/bin/bash

mysql -uroot -p12345678 capture -e "create table udpcapture(SourcePort varchar(20),DestPort varchar(20),UdpLength varchar(20),UdpChecksum varchar(20));"
