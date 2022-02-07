<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Crud Laravel 8 Factura

ejemplo de  unsistema de factura usando laravel


## Pre Requisitos

Laravel 8+
Git
Mysql

## Instalacion

abre un terminal y Copia

```
git clone https://github.com/shiroiokamiart/laravel8_crud_registro.git
```

una ves descargado ejecuta

```
cd laravel8_crud_registro
```

una ves dentro de la carpeta del proyecto ejecuta

```
composer update
```

cuando haya finalizado crea una base de datos en mysql con el nombre app
luego ejecuta el siguiente comando dependiendo tu sistema operativo

### Windows

```
copy .env.example .env
```

### linux

```
cp .env.example .env
```

Una ves copiado el archivo .env ejecuta

```
php artisan migrate
```

este comando nos creara las tablas en la base de datos, cuando haya terminado
ejecuta

```
php artisan db:seed
```

nos creara algunos registros de prueba.
ahora ejecuta

```
php artisan serve
```

y luego 

```
127.0.0.1:8000
```

hay dos usuarios en este pequeño ejemplo uno es

user: admin@prueba.com
pass: 123456

y el cliente

user: cliente@prueba.com
pass: 123456

puedes crearte un cliente en la parte de registro

# Imagenes

![Alt text](/public/img/login.png)
![Alt text](/public/img/admin.png)
![Alt text](/public/img/cliente.png)