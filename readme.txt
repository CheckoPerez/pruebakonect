Aplicaci�n desarrollada bajo el framwork de php LARAVEL en su versi�n 8.
Base de datos utilizada MySql en su versi�n 5.7

Esta aplicaci�n fue creada como parte de las pruebas t�cnicas enviadas por B conect Konecta.

Para hacer uso de la aplicaci�n se debe clonar el repositorio y ejecutar los siguientes comandos:
Ejecutar �composer install� para instalar dependencias.
Copiar el archivo �.env.example� a �.env�
Ejecutar �php artisan key:generate� para generar la llave de cifrado.
Ejecutar npm install && npm run prod
Ejecutar comando �php artisan migrate:fresh --seed� para crear las tablas y poblarlas con datos de prueba.
Ejecutar �php artisan serve� para montar el servidor

Hay dos tipos de usuarios, �user� con acceso solo para �comprar� productos y �admin� el cual puede crear, editar o eliminar productos. 
Usuario:admin
Pass:admin

Usuario:user
Pass:user
