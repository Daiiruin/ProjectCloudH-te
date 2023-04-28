useradd -m $1
echo "$1:$2" | sudo chpasswd
sed -e "s/MYUSERNAME/$1/" -e "s/MYDOMAIN/$3/" /etc/nginx/templateSite > /etc/nginx/sites-enabled/$3
#BDD MySQL
#La créer mysql
mysql -e "CREATE DATABASE $1;"
#Create user dans la bdd mysql
mysql -e "CREATE USER '$1'@'localhost' IDENTIFIED BY '$2';"
#Affecter les droits mysql
mysql -e "GRANT ALL PRIVILEGES ON $1.* TO '$1'@'localhost';"

mysql -e "USE user;"

mysql -e "INSERT INTO users (username, password) VALUES ('$1','$2');"
