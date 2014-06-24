#!/usr/bin/env bash

echo "------------------ Good morning, Let's get to work. Installing now. ------------------"
echo "------------------ Updating packages list ------------------"
sudo apt-get update

echo "------------------ MySQL time ------------------"
#USERNAME
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
#PASSWORD
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'

echo "------------------ Installing base packages ------------------"
sudo apt-get install -y vim curl wget python-software-properties unzip

echo "------------------ Updating packages list ------------------"
sudo apt-get update

echo "------------------ We want the bleeding edge of PHP, right ------------------"
sudo add-apt-repository -y ppa:ondrej/php5

echo "------------------ Updating packages list ------------------"
sudo apt-get update

echo "------------------ Installing PHP-specific packages ------------------"
sudo apt-get install -y php5 apache2 libapache2-mod-php5 php5-curl php5-gd php5-mcrypt php5-readline mysql-server-5.5 php5-mysql git-core

echo "------------------ Installing and configuring Xdebug ------------------"
sudo apt-get install -y php5-xdebug

cat << EOF | sudo tee -a /etc/php5/mods-available/xdebug.ini
xdebug.default_enable = 1
xdebug.idekey = "vagrant"
xdebug.remote_enable = 1
xdebug.remote_autostart = 0
xdebug.remote_port = 9000
xdebug.remote_handler=dbgp
xdebug.remote_log="/var/log/xdebug/xdebug.log"
xdebug.remote_host=10.0.2.2
EOF


echo "------------------ Enabling mod-rewrite ------------------"
sudo a2enmod rewrite


echo "------------------ Enabling mod-xsendfile ------------------"
sudo apt-get update
sudo apt-get install libapache2-mod-xsendfile
sudo a2enmod xsendfile
sudo invoke-rc.d apache reload

echo "------------------ Setting document root ------------------"
sudo rm -rf /var/www
sudo ln -fs /vagrant /var/www
:


echo "------------------ Set DocumentRoot to public ------------------"
sudo sed -i "s#.*DocumentRoot /var/www/html#\tDocumentRoot /var/www/public#" /etc/apache2/sites-enabled/000-default.conf
sudo sed -i "s#\#ServerName www.example.com#ServerName localhost#" /etc/apache2/sites-enabled/000-default.conf


echo "------------------ What developer codes without errors turned on? Not you ------------------"
sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php5/apache2/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php5/apache2/php.ini

sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

echo "------------------ You like to tinker, don't you ------------------"
sed -i "s/disable_functions = .*/disable_functions = /" /etc/php5/cli/php.ini


echo "------------------ Set up php.ini (both cli and apache2) ------------------"

echo "------------------ post_max_size ------------------"
sudo sed -i "s/.*post_max_size.*/post_max_size = 2G/" /etc/php5/cli/php.ini
sudo sed -i "s/.*post_max_size.*/post_max_size = 2G/" /etc/php5/apache2/php.ini

echo "------------------ upload_max_filesize ------------------"
sudo sed -i "s/.*upload_max_filesize.*/upload_max_filesize = 2G/" /etc/php5/cli/php.ini
sudo sed -i "s/.*upload_max_filesize.*/upload_max_filesize = 2G/" /etc/php5/apache2/php.ini

echo "------------------ max_input_time ------------------"
sudo sed -i "s/.*max_input_time.*/max_input_time = 9000/" /etc/php5/apache2/php.ini
sudo sed -i "s/.*max_input_time.*/max_input_time = 9000/" /etc/php5/apache2/php.ini

echo "------------------ max_file_uploads ------------------"
sudo sed -i "s/.*max_file_uploads.*/max_file_uploads = 100/" /etc/php5/apache2/php.ini
sudo sed -i "s/.*max_file_uploads.*/max_file_uploads = 100/" /etc/php5/apache2/php.ini

echo "------------------ memory_limit  ------------------"
sudo sed -i "s/.*memory_limit .*/memory_limit = 1G/" /etc/php5/apache2/php.ini
sudo sed -i "s/.*memory_limit .*/memory_limit = 1G/" /etc/php5/apache2/php.ini

echo "------------------ Restarting Apache ------------------"
sudo service apache2 restart

echo "------------------ Composer is the future. But you knew that did you Nice job. ------------------"
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "------------------ Correct Time  ------------------"
echo "America/Denver" | sudo tee /etc/timezone
sudo dpkg-reconfigure --frontend noninteractive tzdata
