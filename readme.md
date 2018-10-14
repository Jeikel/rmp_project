<h2>Earth Virtual</h2>


Para instalar este proyecto sólo tienes que seguir una serie de pasos bastante sencillos y estándares, cómo te mostraremos en este tutorial de ayuda, de esta forma puedes evadir muchos de los problemas comunes al realizar esta tarea.

<h3>Servidor web</h3>

Lo primero que debes tener en cuenta es que Laravel es un framework para PHP, por lo cual debes contar con un servidor web.

Es recomendable, indiferentemente del servidor que estés usando, que configures adicionalmente un virtualhost en lugar de trabajar con el directorio local (localhost/tuproyecto).

Esto te puede ahorrar muchos problemas referentes al uso de rutas y path’s en tu proyecto. Para crear un virtualhost puedes seguir este link:

https://styde.net/creando-virtual-hosts-con-apache-en-windows-para-wamp-o-xampp/

<h3>Clonando un nuevo proyecto</h3>

Debes clonar este proyecto a tu repositorio local. Si no sabes como hacerlo puedes seguir este tutorial:

https://styde.net/clone-y-fork-con-git-y-github/

<h3>Permisos de escritura</h3>

Según la documentación oficial de Laravel

Después de instalar Laravel, tal vez debas configurar algunos permisos, Los directorios entre storage y la carpeta bootstrap/cache deben tener permisos de escritura por el servidor web.

Asegúrate de configurar esto correctamente usando:

sudo chmod -R 755 storage

<h3>Instalando dependencias con Composer</h3>

Recuerda que previamente debes haber instalado Composer en tu maquina. 

Lo primero que debes hacer luego de descargar un proyecto existente a tu maquina local y después de haber configurado tu virtualhost, es instalar las dependencias del proyecto con Composer.

Esto lo puedes hacer usando el siguiente comando en la consola, dentro de la carpeta raíz del proyecto:

$ composer install

De esta forma se instalarán todas las dependencias necesarias para el proyecto que fueron definidas en el archivo composer.json durante el desarrollo.

<h3>Archivo de configuración de Laravel</h3>

Cada nuevo proyecto con Laravel, por defecto tiene un archivo .env con los datos de configuración necesarios para el mismo, cuando utilizamos un sistema de control de versiones como git, este archivo se excluye del repositorio por medidas de seguridad .

Sin embargo existe un archivo llamado .env.example que es un ejemplo de como crear un el archivo de configuración, podemos copiar este archivo desde la consola con:

$ cp .env.example .env

En este archivo debemos configurar la conexion a la base de datos, la conexion al servidor de correo electronico y el nombre del proyecto.

De esta forma ya tenemos el archivo de configuración de nuestro proyecto.

<h3>Creando un nuevo API key</h3>

Por medidas de seguridad cada proyecto de Laravel cuenta con una clave única que se crea en el archivo .env al iniciar el proyecto. En caso de que el desarrollador no te haya proporcionado están información, puedes generar una nueva API key desde la consola usando:

$ php artisan key:generate

<h3>Base de datos y migraciones</h3>

Por lo general las bases de datos en los proyectos de Laravel se crean haciendo uso de las migraciones.

Debes primero crear la Base de datos MYSQL en tu servidor local.

Posteriormente debes agregar las credenciales al archivo .env

DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=

Finalmente estarás habilitado para ejecutar la migración desde la consola usando artisan

$ php artisan migrate 

<h3>Puesta en marcha</h3>

Finalmente después de revisar cada una de estas configuraciones y haber ejecutado todos los comandos necesarios, puedes ingresar a la url de tu proyecto y no deberías tener ningún problema para verlo en funcionamiento.
