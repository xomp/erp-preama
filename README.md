
sudo dpkg -l | grep php | tee packages.txt

sudo apt install apt-transport-https

PHP Ctype
PHP cURL
PHP DOM
PHP Fileinfo
PHP Filter
PHP Hash
PHP Mbstring
PHP OpenSSL
PHP PCRE
PHP PDO
PHP Session
PHP Tokenizer
PHP XML

sudo apt install php8.2-xml
sudo apt install php8.2-dom
sudo apt install php8.2-mysql
sudo apt install php8.2-curl

git clone https://github.com/xomp/erp-preama.git .

php artisan migrate
php artisan key:generate
php artisan config:cache»

ln -s public public_html

sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache


prod:
composer install --optimize-autoloader --no-dev
npm run build