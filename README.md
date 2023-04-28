# CourseApi
Esta aplicación está construida con laravel.

En la aplicación se combina los patrones de arquitectura MVC (Modelo vista controlador), DTO (Data Transfer Object), fachada y SOLID (Single responsibility, Open-closed, Liskov substitution, Interface segregation and Dependency inversion), esto asegurando su mantenibilidad y escalabilidad.


## Requisitos previos

### Programas
1. [x] Composer https://getcomposer.org/
2. [x] MariaDB https://mariadb.org/
3. [x] GIT https://git-scm.com/

### Versiones
1. [x] Composer v2.3.2
2. [x] PHP v8.1.9
3. [x] MariaDB v10.8.3
4. [x] Laravel Framework v10

## Instalación
1. [x] Descargar el repositorio de https://github.com/luissantaospina/course-api con el comando `git clone https://github.com/luissantaospina/course-api.git`
2. [x] Moverse a la carpeta del proyecto `cd course-api`
3. [x] Instalar dependencias `composer install`
4. [x] Entrar al proyecto y duplicar el archivo `.env.example` renombrelo así `.env`
5. [x] **_IMPORTANTE_** en su ambiente local debe crear una base de datos vacia de mariaDB llamada `course`
6. [x] Ejecutar migraciones y seeders para crear y llenar las tablas en la base de datos anteriormente creada con `php artisan migrate --seed`

## Inicio
1. [x] Iniciar el servidor con `php artisan serve`
2. [x] Generalmente se despliega en http://localhost:8000/ (verificar puesto que esto puede cambiar)
