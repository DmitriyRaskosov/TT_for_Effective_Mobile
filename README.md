Команды для запуска проекта в Docker:

docker-compose up --build

docker exec laravel-app php artisan route:clear

docker exec laravel-app php artisan cache:clear

docker-compose exec laravel-app php artisan migrate

docker exec laravel-app php artisan db:seed --class=TasksSeeder

// Провалиться в MySQL
docker exec -it mysql mysql -u laravel laravel -p
пароль: secret

@

Было бы лучше сделать валидацию как отдельный инструмент, но я не стал этого делать из-за простоты проекта.

Так же написал версию на нативном PHP.
https://github.com/DmitriyRaskosov/TT_for_Effective_Mobile_2
