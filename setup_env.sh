#!/bin/bash

# Копируем .env.example в .env, если .env еще не существует
if [ ! -f .env ]; then
    cp ./docker/.env.example ./docker/.env
    echo ".env создан на основе .env.example"
fi

# Функция для запроса и установки значений
set_value() {
    local var_name="$1"
    local default_value="$2"

    # Получаем текущее значение из .env
    local current_value=$(grep -E "^$var_name=" .env | cut -d '=' -f 2-)

    # Если текущего значения нет, то использовать дефолт
    if [ -z "$current_value" ]; then
        current_value="$default_value"
    fi

    # Запрашиваем новое значение
    read -p "Введите значение для $var_name (текущее: $current_value, по умолчанию: $default_value): " new_value

    # Если новое значение пустое, то оставляем текущее или дефолтное
    if [ -z "$new_value" ]; then
        new_value="$current_value"
    fi

    # Обновляем строку в .env
    if [[ "$OSTYPE" == "darwin"* ]]; then
        # Для macOS
        sed -i '' "s/^$var_name=.*/$var_name=$new_value/" .env
    else
        # Для Linux
        sed -i "s/^$var_name=.*/$var_name=$new_value/" .env
    fi
}

# Список переменных, которые нужно запросить
set_value "PROJECT_NAME" "base-laravel"
set_value "NGINX_PORT" "8080"
set_value "PHP_PORT" "9000"
set_value "MYSQL_PORT" "3306"
set_value "REDIS_PORT" "6379"
set_value "MYSQL_ROOT_PASSWORD" "root"
set_value "MYSQL_DATABASE" "laravel"
set_value "MYSQL_USER" "user"
set_value "MYSQL_PASSWORD" "password"

echo "Настройки успешно обновлены в .env"
