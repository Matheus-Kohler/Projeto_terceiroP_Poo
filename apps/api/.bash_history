clear
./vendor/bin/pest
clear
exit
exit
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
docker exec -it poo_web_quasar bash
exit
