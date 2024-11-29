# Instalación de Laravel con Breeze

Este documento proporciona una guía paso a paso para instalar Laravel con Breeze, un paquete de autenticación simple y ligero para Laravel.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- [PHP](https://www.php.net/downloads) (versión 8.0 o superior, se recomienda 8.2 o superior)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/) (versión 14 o superior)
- [NPM](https://www.npmjs.com/get-npm) (incluido con Node.js)
- [Herd para Laravel](https://github.com/laravel/herd) (opcional, pero recomendado para gestionar entornos de desarrollo)

## Clonar el repositorio

Clona el repositorio de GitHub utilizando el siguiente comando:

```bash
git clone https://github.com/abitae/metronic_admin.git
cd metronic_admin
composer install
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
php artisan migrate
php artisan serve