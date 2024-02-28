# minds_laravel


REQUISITOS

 - Docker
 - Docker-compose

INSTRUÇOES

criar arquivo .env baseado em .env.example

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


REQUESTS:

GET --listagem de usuários
localhost:8000/api/users/
localhost:8000/api/users/2

localhost:8000/api/address/
localhost:8000/api/address/2

localhost:8000/api/city/
localhost:8000/api/city/2

localhost:8000/api/state/
localhost:8000/api/state/2

PUT --edição de usuários
localhost:8000/api/users/
    params:
    {
        "user_id": 2
        "email": "testeh@hotmail.com.br",
        "name": "teste",
        "password": "123457"
        "address_id": '1',
        "city_id": "1",
        "state_id": "1"
    }

POST -- criação de usuários
localhost:8000/api/users/
    params:
    {
        "email": "testeh@hotmail.com.br",
        "name": "teste",
        "password": "123457"
        "address_id": '1',
        "city_id": "1",
        "state_id": "1"
    }

DELETE -- deleção de usuários
localhost:8000/api/users/2
