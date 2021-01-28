## Запуск

```
cp .env.example .env
php artisan sail:install
./vendor/bin/sail up
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
./vendor/bin/sail artisan key:generate
```
