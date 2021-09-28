php artisan make:model Airport -m 

php artisan make:model Flight -m 

php artisan make:model Customer -m

php artisan make:migration create_flight_customer

php artisan migrate

composer require laravel/helpers

php artisan db:seed

#Start making API

php artisan make:controller v1/FlightController --resource

php artisan make:provider v1/FlightServiceProvider

php artisan serve

http://127.0.0.1:8000/api/v1/flights in the browser