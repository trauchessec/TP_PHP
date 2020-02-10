#TP_PHP Romain Trauchessec

composer require symfony/web-server-bundle
php bin/console about
php bin/console debug:router
php bin/console make:entity
composer require --dev orm-fixtures
php bin/console doctrine:fixtures:load
php bin/console server:run
