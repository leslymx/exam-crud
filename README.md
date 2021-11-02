# Titulo: EXAMEN CRUD CON LARAVEL
---
## Problema a resolver
Objetivo: Realizar un CRUD (Creación, Lectura, Actualización y Eliminación) de empresarios en Laravel haciendo uso de un Webservice para validar cierta información. 


## Instalacion
Clona el repositorio y ubicate dentro de la carpeta:
```
    git clone git@github.com:leslymx/exam-crud.git
```

Instala las dependencias con:
```
    composer install
```

E instala las dependencias de npm con:
```
    npm run install
```

### Conectar a la DB

- Busca el **.env.example** y renombralo por **.env**
- Crea una base de datos con el gestor que uses y nombrala como **exam_crud**
- Busca en el .env **DB_DATABSE** y coloca el nombre de tu DB (exam_crud)


Crea la base de datos con el nombre **exam_crud** y ejecuta las migraciones con
```
    php artisan migrate
```

### Servidor
Levanta el servidor de artisan con:
```
php artisan serve
```
Ingresa a la ip local de http://127.0.0.1:8000/customers para ver la vista y comienza a interactuar con tus customers, te pedira un usuario y contraseña por lo que puedes crear uno e ir nuevamente a la ruta de customers.

![](https://i.imgur.com/0RR0AOM.png)
![](https://i.imgur.com/RVze7MA.png)
