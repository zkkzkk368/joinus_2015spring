#!/bin/bash

USER="root"
PASSWORD="123456"
DATABASE="join"
HOST="localhost"
OPTIONS="-h$HOST -u$USER -p$PASSWORD $DATABASE"

DATE=`date '+%Y%m%d-%H%M'`
BACKUP_DIR=/home/zk/mysql_back/
DUMPFILE=$DATE.sql

cd $BACKUP_DIR
mysqldump $OPTIONS > $DUMPFILE
