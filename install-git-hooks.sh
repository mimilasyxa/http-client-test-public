#!/bin/bash

# Убедитесь, что скрипт запускается из корня проекта
if [ ! -d ".git" ]; then
  echo "Ошибка: скрипт должен быть выполнен из корня git-репозитория."
  exit 1
fi

# Путь к git-хуку
HOOK_DIR=".git/hooks"
HOOK_FILE="$HOOK_DIR/pre-push"

# Команда, которая будет выполняться перед пушем
GIT_HOOK_COMMAND="docker exec mpk_php /bin/bash -c './vendor/bin/pint'"

# Создаем или перезаписываем pre-push хук
cat > $HOOK_FILE <<EOL
#!/bin/sh
# Запуск Pint через Docker контейнер
$GIT_HOOK_COMMAND
EOL

# Даем права на выполнение хука
chmod +x $HOOK_FILE

echo "Git pre-push hook установлен успешно."