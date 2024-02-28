# minds_laravel


REQUISITOS

 - Docker
 - Docker-compose

INSTRUÇOES

docker-compose build
docker-compose up -d
docker-compose exec web bash
docker network create minds_laravel_app_network

php artisan key:generate

chmod -R 775 storage/logs
chown -R www-data:www-data storage/logs

chmod -R 775 storage/framework/sessions
chown -R www-data:www-data storage/framework/sessions

chmod -R 775 storage/framework/views
chown -R www-data:www-data storage/framework/views

php artisan config:clear
php artisan cache:clear


php artisan db:seed --class=states
php artisan db:seed --class=cities
php artisan db:seed --class=address


exit
docker-compose restart