<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Aplicación desarrollada bajo el framwork de php LARAVEL en su versión 8.
Base de datos utilizada MySql en su versión 5.7

Esta aplicación fue creada como parte de las pruebas t�cnicas enviadas por B conect Konecta.

Para hacer uso de la aplicación se debe clonar el repositorio y ejecutar los siguientes comandos:

Ejecutar 'composer install' para instalar dependencias.

Copiar el archivo '.env.example' a '.env'

Ejecutar 'php artisan key:generate' para generar la llave de cifrado.

Ejecutar 'npm install && npm run prod'

Ejecutar comando 'php artisan migrate:fresh --seed' para crear las tablas y poblarlas con datos de prueba.

Ejecutar 'php artisan serve' para montar el servidor


Hay dos tipos de usuarios, 'user' con acceso solo para 'comprar' productos y 'admin' el cual puede crear, editar o eliminar productos. 
Usuario:admin
Pass:admin

Usuario:user
Pass:user

