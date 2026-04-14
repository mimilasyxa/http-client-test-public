#!/bin/bash

# Определите имя контейнера вашего Laravel приложения
CONTAINER_NAME="mpk_php"

# Выполнение сидеров через контейнер
docker exec -it $CONTAINER_NAME bash -c "php artisan db:seed --class=PostSeeder"
docker exec -it $CONTAINER_NAME bash -c "php artisan db:seed --class=DivisionSeeder"
docker exec -it $CONTAINER_NAME bash -c "php artisan db:seed --class=EmployeeSeeder"

echo "Сидеры выполнены успешно."