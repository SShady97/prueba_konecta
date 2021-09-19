Dentro del directorio blog_server ejecutar el siguiente comando:

$docker-compose up --build

Y esperar a que los servicios inicialicen.

Para ejecutar las migraciones abrir otra terminal en la misma ubicación y ejecutar:

$docker-compose exec app php artisan migrate:fresh --seed

URL:
http://localhost:3000
