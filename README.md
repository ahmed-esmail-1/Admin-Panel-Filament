php artisan make:filament-user
php artisan filament:install --panels
php artisan make:filament-resource User 


<!-- New model, then resource -->
php artisan make:model Customer -m
php artisan make:filament-resource Customer