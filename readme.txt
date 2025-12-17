

// for vite setup:
npm install
npm run build

// make components:
php artisan make:component Layout

php artisan make:model Profile -mf

php artisan make:model Post -mf  

// install pest:
composer require pestphp/pest --dev --with-all-dependencies
composer require pestphp/pest-plugin-laravel --dev
./vendor/bin/pest --init

// make tests:
php artisan make:test PostBehaviorTest
php artisan make:test LikeBehaviorTest

// run tests:
php artisan test

// php artisan migrate