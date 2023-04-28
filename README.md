# PAGODAHUB

## Prerequisitos

1. tener instalado laravel 9
2. tener instalado posgtresql
3. haber instalado Idempiere
4. tener instalado Node.js (v18)
5. tener instalado NPM (version 8.12 minima)

## Instalación:

1. descargar PAGODAHUB del repositorio
2. instalar las dependencias
```bash
  composer require laravel/ui
  composer install
  npm run build
```
3. cambiar el archivo .env en la parte de DB_CONNECTION cambiar por 
```bash
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=pagodahub
    DB_USERNAME=adempiere
    DB_PASSWORD=adempiere
```
4. crear el usuario adempiere con contraseña adempiere
5. crear la base de datos "pagodahub" en posgtresql
6. correr las migraciones
```bash
  php artisan migrate
```
## Uso

una vez configurado el proyecto ya se puede correr con normalidad el proyecto con el comando
```bash
  php artisan serve
```

## Pasos extra

esta seccion es para pasos que puede o no necesites

si al ejecutar el programa te ocurre un error en el curl debes hacer lo siguiente
1. descargar el archivo cacert.pem de https://curl.se/docs/caextract.html
2. crear una carpeta en tu proyecto llamada certs y poner el archivo adentro
3. configurar tu archivo php.ini en la linea ";curl.cainfo" con la ruta al cacert asi 
```bash
 curl.cainfo = "C:\laravel\proyecto\certs\cacert.pem"
```

