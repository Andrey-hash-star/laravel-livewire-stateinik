## Cайт - статейник на Laravel.

1. Клонировать проект с GitHab: Git clone https://github.com/Andrey-hash-star/laravel-stateinik.git
2. Загрузить зависимости через Composer: composer install
3. Создать .env и скопировать туда информацию из env.example 
4. Создать базу данных и прописать в .env соединение 
5. Сгенерировать ключ: php artisan key:generate
6. Произвести миграции: php artisane migrate
7. Запускаем сиды: php artisan db:seed
7. Запустить сервер: php artisan serve
8. В .env проставить APP_DEBUG=false, чтобы отключить Laravel Debugbar, если нужно
9. Запустить сайт: http://127.0.0.1:8000

---

### Использовал при создании проекта
- Laravel 7.30.4
- PHP 7.4.0
- laravel-sluggable версии 7.0: https://github.com/cviebrock/eloquent-sluggable
- Livewire версии 2.5: https://github.com/livewire/livewire