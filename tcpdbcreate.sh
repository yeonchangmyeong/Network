#!/bin/bash

mysql -uroot -p12345678 capture -e "create table tcpcapture(SourcePort varchar(20),DestPort varchar(20),SequenceNumber varchar(20),AcknowledgeNumber varchar(20),OffSetHeaderLength varchar(20),URGFlag varchar(20),AckFlag varchar(20),PushFlag varchar(20),ResetFlag varchar(20),SynFlag varchar(20),FinishFlag varchar(20),windowSize varchar(20),TcpChecksum varchar(20),UrgPointer varchar(20));"
