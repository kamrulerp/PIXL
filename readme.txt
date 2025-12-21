

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
php artisan make:test FollowBehaviorTest

// run tests:
php artisan test

// php artisan migrate

// seed database:
php artisan db:seed

// migrate fresh with seed:
php artisan migrate:fresh --seed

// make post component:
php artisan make:component Post

// make reply component with class:
php artisan make:component Reply

php artisan make:component Profile/Header --view