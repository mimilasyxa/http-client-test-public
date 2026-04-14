#!/bin/bash

# Массив с папками для обработки
DIRECTORIES=("docker" "app")

# Название исходного и целевого файлов
SOURCE_FILE_NAME=".env.example"
TARGET_FILE_NAME=".env"

# Проход по каждой папке
for DIR in "${DIRECTORIES[@]}"; do
    SOURCE_FILE="${DIR}/${SOURCE_FILE_NAME}"
    TARGET_FILE="${DIR}/${TARGET_FILE_NAME}"

    # Проверяем, существует ли исходный файл
    if [ ! -f "$SOURCE_FILE" ]; then
        echo "Файл $SOURCE_FILE не найден в папке $DIR. Пропускаем."
        continue
    fi

    # Проверяем, существует ли целевой файл
    if [ -f "$TARGET_FILE" ]; then
        echo "Файл $TARGET_FILE уже существует в папке $DIR. Пропускаем копирование."
    else
        # Копируем файл, если его нет
        cp "$SOURCE_FILE" "$TARGET_FILE"
        echo "Файл $TARGET_FILE успешно скопирован из $SOURCE_FILE в папке $DIR."
    fi
done

# Переход в папку docker и запуск Docker Compose
echo "Переходим в папку docker и запускаем Docker Compose..."
cd docker || { echo "Не удалось перейти в папку docker."; exit 1; }
docker compose up -d --build

