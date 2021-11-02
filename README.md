# Titulo: EXAMEN CRUD CON LARAVEL
---
## Overview: Problema a resolver
Objetivo: Realizar un CRUD (Creación, Lectura, Actualización y Eliminación) de empresarios en Laravel haciendo uso de un Webservice para validar cierta información. 


## Instalacion
Clona el repositorio y ubicate en la carpeta
```
    git clone git@github.com:leslymx/exam-crud.git
```
- Busca el **.env.example** y renombralo por **.env**
- Crea una base de datos con el gestor que uses y nombrala como **exam_crud**
- Busca en el .env **DB_DATABSE** y coloca el nombre de tu DB

Ahora en la consola ejecuta las migraciones para tu base de datos

```
    npm run install; npm run dev    
```

Crea la base de datos con el nombre **exam_crud** y ejecuta las migraciones con
```
    php artisan migrate
```

Levanta el servidor de artisan con
```
php artisan serve
```
Ingresa a la ip local de http://127.0.0.1:8000/customers para ver la vista y comienza a interactuar con tus customers