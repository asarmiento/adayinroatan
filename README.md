<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About A day in Roatan

- Crear subdominio en servidor
- Crear base de datos para el sistema
- Inicializar git en la carpeta del subdominio por la terminal **git init**
- Agregar el remote del repositorio **git remote add origin git@github.com:asarmiento/adayinroatan.git**
- Ejecutar pull **git pull origin master**
- Copiar el archivo de conexión de la base de datos **cp .env.example .env** y agregar los datos de conexión a la base de datos
- Crear el archivo **.htaccess**
- Agregar este código al htaccess **RewriteEngine On**       **RewriteRule ^(.*)$ public/$1 [L]**
- Ejecutar composer **composer install**
- Correr migraciones **php artisan migrate --seed**
- Listo para usar
- Usuario: **soporte@sistemasamigableslatam.com** password: **12345678**


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
