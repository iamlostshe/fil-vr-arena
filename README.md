# vr-arena

## Инструкция по развёртыванию на сервере

0. Установим всё необходимое:

``` bash
sudo apt update
sudo apt upgrade

sudo apt install php-mbstring php-xml php-bcmath php-cli composer curl
```

1. Клонируем репозиторий и переходим в него:

``` bash
git clone https://.../vr-arena
cd vr-arena
```

2. Композер.

``` bash
composer install
```

3. Настройка окружения.

``` bash
cp .env.example .env
php artisan key:generate
```

4. Установка и настройка Filament (админ-панель).

``` bash
php artisan filament:install
php artisan migrate
```
