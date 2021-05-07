#!/bin/sh

echo "CREATE DATABASE IF NOT EXISTS \`test_sample\` ;" | "${mysql[@]}"
echo "GRANT ALL ON \`test_sample\`.* TO '"$MYSQL_USER"'@'%' ;" | "${mysql[@]}"
echo 'FLUSH PRIVILEGES ;' | "${mysql[@]}"

"${mysql[@]}" < /docker-entrypoint-initdb.d/test_sample.sql_