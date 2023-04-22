# SimplePhpServer

## Creación de la máquina virtual
![](imgs/azure-01-create-VM.png)

habilitar puertos 80(http), 5432(postgres)
![](imgs/azure-02-ports.png)

## Conexión a la máquina virtual

Conexión a través de ssh.
```bash
ssh Administrador@20.226.56.19
```
![](imgs/shh-01-connect.png)

Actualización del Sistema operativo.

![](imgs/ssh-02-update.png)

## Configuración de la capa de datos
Instalación de Postgres 12.
```bash
sudo apt install postgresql postgresql.contrib
```
![](imgs/ssh-03-i-postgres.png)

Start progresql.service.

![](imgs/ssh-04-start-postgres.png)

Habilitar conexiónes a la base de datos.

> host  all  all  0.0.0.0/0  md5

![](imgs/ssh-05-config.png)

Configurar usuario postgres y crear base de datos `osjob`.

![](imgs/ssh-06-config-user-database.png)

Crear tablas y insertar datos con el archivo <a href="https://gist.github.com/ggonzalesd/0039bfbc64b0c484819ed6948274aff7">dataserver.sql</a>

![](imgs/ssh-07-init-database.png)

Conectarse a la base de datos desde la computadora local y mostrar las tablas.

![](imgs/ssh-08-show-database.png)

## Configuración de capa de aplicación

Instalación de `apache2` `php7.4` y el adaptador para `postgres12`

![](imgs/ssh-09-Install-apache2.png)

Configuración de Apache para reconocer archivos `php`

```xml
<FilesMatch ".php$">
  SetHandler "proxy:unix:/var/run/php/php7.4-fpm.sock|fcgi://localhost"
</FilesMatch>
```
![](imgs/ssh-10-config-apach2.png)

Configuración del php para utilizar el adaptador de `Postgres`

![](imgs/ssh-11-config-php-for-postgres.png)

Configurar `/var/www/html`

![](imgs/ssh-12-init-App-Layer.png)

Clonar el <a href="https://github.com/ggonzalesd/SimplePhpServer">repositorio</a> de la app

![](imgs/ssh-13-get-projecto-from-github.png)

Configurar la conexión a la base de datos

![](imgs/ssh-16-confg-conexion.png)

## Screenshots

![](imgs/ssh-17-01-view.png)
![](imgs/ssh-17-02-view.png)

![](imgs/img-01-phone.jpeg)
![](imgs/img-02-pc.jpeg)
![](imgs/img-03-laptop.jpeg)
![](imgs/img-04-laptop.jpeg)
![](imgs/img-05-laptop.jpeg)
![](imgs/img-06-laptop.png)
![](imgs/img-07-laptop.png)
![](imgs/img-08-laptop.png)
