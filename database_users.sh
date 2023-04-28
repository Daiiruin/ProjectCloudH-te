mysql -u root -p

mysql -e "USE user;"

mysql -e "INSERT INTO users (pseudo, password) VALUES ('$1','$2');"
