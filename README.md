# ProyectoLaravelPHP
Proyecto con Framework Laravel donde se crea una DB y a traves de un Controlador PHP se guardan los datos, además usa modelos y vistas

# Tabla de contenidos.
---------------------------

 1. ¿Qué necesitas para probar este proyecto?.
 2. Pasos para probar este proyecto.


# 1. ¿Qué necesitas para probar este proyecto?.
----------------------------
Necesitas tener una base de datos instalada en tu máquina, da igual la que sea, MySQL, PostgreSQL, etc...

Necesitas tener instalado Laravel, esto lo debes hacer usando composer.

Tener instalado php en la version 7 en adelante.


# 2. Pasos para probar el proyecto.
Primero debes crearte una DB y dejarla en principio solo creada.

Después debes de modificar los datos del archivo .env que se encuentra en el directorio raiz, para adaptarlos a los de tu base de datos.

Debes de crearte un proyecto nuevo laravel y coger la carpeta vendor y copiarla en el raiz de este proyecto.

Una vez hecho esto en el directorio raiz debes de hacer: php artisan migrate , esto hará que se creen las tablas necesarias en nuestra DB.

Acto seguido debemos de hacer algunos insert en nuestra DB.

Esto lo podemos hacer con el comando: php artisan tinker, se nos abrirá una shell en la que podremos trabajar.

La creación de personas será:

>>> use App\Models\Person

>>> $p1 = new Person();

>>> $p1->name = 'alejandro';

>>> $p1->country = 'spain';

>>> $p1->save();

Si la shell nos responde true, habremos hecho bien la inserción.

Podemos añadir tantas personas como queramos.

Ya tan solo nos queda lanzar el proyecto, para esto abriremos otra terminal y ejecutaremos el comando php artisan serve

Si todo esta bien, se lanzara la aplicación y podremos ir a comprobarla a la URL que nos ha devuelto el comando que será normalmente localhost:8000/persons

Con esto se podrá probar la aplicacion