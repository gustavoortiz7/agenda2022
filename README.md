## Sistema de manejo de agendas

## Primeros Pasos
Configurar el .env la base de datos

### Crear Modelo, migracion, controlador, recursos

php artisan make:model Persona -mcr


### ejecutar migracion

php artisan migrate

### anular migracion
php artisan migrate:rollback

### forzar migracion total

php artisan migrate:fresh

## crear seeder 
php artisan make:seeder PersonaSeeder

## crear factory
php artisan make:factory PersonaFactory

### crear todalabd y llenar con datos
php artisan migrate:fresh --seed

### Subir a repositorio proyecto existente
git init

git add .

git commit -m "primer commit"

git remote add origin https://github.com/cmontellanob/agenda2022

git push -u origin master
