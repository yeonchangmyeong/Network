#!/bin/bash
  
mysql -uroot -p12345678 -e "create database login";
mysql -uroot -p12345678 -e "GRANT ALL PRIVILEGES ON login.* to root@localhost"

mysql -uroot -p12345678 login -e "create table users(users varchar(20),password varchar(20));"

