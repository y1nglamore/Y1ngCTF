#!/usr/bin/env sh
mysql -e "create database 36d_CTF; use 36d_CTF;source /db.sql;" -uroot -proot
rm -rf /db.sql
rm -rf /flag.sh
