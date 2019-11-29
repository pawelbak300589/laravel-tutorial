#!/usr/bin/env bash

# Update repositories
sudo apt-get update && sudo apt-get upgrade -y

# Install Apache, PHP5 and MySQL
#sudo apt-get install -y apache2
#if ! [ -L /var/www ]; then
#  sudo rm -rf /var/www
#  sudo ln -fs /vagrant /var/www
#fi

# install php

https://ayesh.me/Ubuntu-PHP-7.3

#MYSQL_ROOT_PASSWORD='' # this is just a local test server
#echo debconf mysql-server/root_password password $MYSQL_ROOT_PASSWORD | sudo debconf-set-selections
#echo debconf mysql-server/root_password_again password $MYSQL_ROOT_PASSWORD | sudo debconf-set-selections
#sudo apt-get -y install mysql-server

# Get the correct version of PHPUnit for our tests
#sudo wget https://phar.phpunit.de/phpunit-7.5.1.phar
#sudo chmod +x phpunit-7.5.1.phar
#sudo mv /usr/bin/phpunit /usr/bin/phpunitOLD
#sudo mv phpunit-7.5.1.phar /usr/bin/phpunit

# Set the hostname to localhost - fixes some intersystem communications
#sudo hostname localhost

#sudo a2enmod rewrite

# cd /etc/apache2/sites-available
# albo bardziej nawet apache2.conf ???? - zerknij na pliki boxsetup z S.H. vagrantbuitd praca...
# sudo nano 000-default.conf
#DocumentRoot /srv/www/htdocs
#<Directory "/srv/www/htdocs">
#    AllowOverride All
#    Require all granted
#</Directory>

#sudo dpkg --configure -a

# Download Phalcon devtools
#cd /home/vagrant
#sudo rm -rf phalcon-devtools
#sudo git clone https://github.com/phalcon/phalcon-devtools.git
#cd phalcon-devtools
#sudo ln -sf $(pwd)/phalcon.php /usr/bin/phalcon
#sudo chmod ugo+x /usr/bin/phalcon

# Get and install Codeception
#sudo curl -LsS http://codeception.com/releases/2.5.2/codecept.phar -o /usr/local/bin/codecept
#sudo chmod a+x /usr/local/bin/codecept

# Create the required mrbevan_paulc user and grant all the privileges
# The last command doesn't seem to be strictly necessary, but just in case...
#mysql -u root -p"" -h localhost -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY '';"
#mysql -u root -p"" -h localhost -e "FLUSH PRIVILEGES"
## Turn off only_full_group_by which causes us problems
#mysql -u root -p"" -h localhost -e "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))"
#mysql -u root -p"" -h localhost -e "SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode,'STRICT_TRANS_TABLES', ''))"
#
## Drop the old databases
#mysql -u root -p"password" -h localhost -e "DROP DATABASE IF EXISTS climbing_equipments"
#
## Import the test databases
#mysql -u root -p"password" -h localhost -e "CREATE DATABASE climbing_equipments"
#
#mysql -u root -p"password" climbing_equipments < /srv/www/htdocs/mysql/database.sql

# Enable mod-rewrite for Phalcon to work
sudo service apache2 restart