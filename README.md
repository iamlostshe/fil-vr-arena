# vr-arena

## Инструкция по развёртыванию на сервере

### 0. Установка зависимостей

**Ubuntu/Debian:**
```bash
sudo apt update
sudo apt upgrade

sudo apt install php-mbstring php-xml php-bcmath php-cli composer curl php-mysql php-intl mariadb-server
```

### 1. Настройка базы данных

**MySQL/MariaDB:**
```bash
# Запуск и включение MariaDB
sudo systemctl start mariadb
sudo systemctl enable mariadb

# Создание базы данных и пользователя
sudo mysql -e "CREATE DATABASE laravel; CREATE USER 'laravel'@'localhost' IDENTIFIED BY 'your_password'; GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost'; FLUSH PRIVILEGES;"
```

### 2. Клонирование репозитория

```bash
git clone https://github.com/iamlostshe/fil-vr-arena.git
cd fil-vr-arena
```

### 3. Установка зависимостей PHP

```bash
composer install --ignore-platform-req=ext-intl --ignore-platform-req=ext-exif
```

### 4. Настройка окружения

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Настройка подключения к базе данных

Отредактируйте `.env` файл:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=your_password
```

### 6. Установка и настройка Filament

```bash
php artisan filament:install --panels
php artisan migrate
```

### 7. Создание администратора

```bash
php artisan make:filament-user
```

Следуйте инструкциям для создания администратора.

### 8. Настройка прав доступа

```bash
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

### 9. Запуск сервера

**Для разработки:**
```bash
php artisan serve
```

**Для продакшена (Apache/Nginx):**
- Настройте web-сервер на директорию `public/`
- Убедитесь, что `.htaccess` (Apache) или конфигурация Nginx правильно настроены

### 10. Доступ к админ-панели

- URL: `http://your-domain.com/admin`
- Войдите с созданными учетными данными администратора

## Требования

- PHP 8.1+
- MySQL/MariaDB 5.7+
- Composer 2.0+
- Расширения PHP: mbstring, xml, bcmath, intl, pdo_mysql
