<?php
/* 
Composer va nous servir pour créer un autoloader, outil téléchargeable
pour l'installer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

puis pour l utiliser
php composer.phar 
php composer.phar init

dans le composer.json
setup l'autoload dans psr4
exemple
"App\\":"class/"

ensuite
php composer.phar dump autoload

en parrallèle on pourra instaler l extension namespace de Mehedi
en faisant ctrl shift P il importera automatiquement la classe adaptée
ctrl alt i pour automatiser

Dans le cas d un partage de code sans le vendor
php composer install
*/