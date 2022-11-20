#!/bin/bash

mysql -uroot -p12345678 capture -e "create table capture(EthernetType varchar(20) not null,SrcMacAddr varchar(20),DstMacAddr varchar(20),IPversion varchar(20),IpHeaderLength varchar(20),TypeOfService varchar(20),IpTotalLength varchar(20),Identification varchar(20),TimetoLive varchar(20),Protocol varchar(20),IpChecksum varchar(20),SrcIpAddr varchar(20),DstIpAddr varchar(20));"
