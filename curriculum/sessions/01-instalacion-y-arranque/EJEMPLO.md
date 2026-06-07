# Ejemplo genérico

> Esto ilustra la *forma* de los comandos. No es la solución; tu requerimiento
> tiene detalles propios (starter kit de Livewire, SQLite, etc.).

Crear un proyecto Laravel nuevo con el instalador oficial:

```bash
# El instalador te pregunta interactivamente el starter kit y opciones.
laravel new mi-app

cd mi-app
```

Configurar la base de datos en `.env` (ejemplo con SQLite):

```dotenv
DB_CONNECTION=sqlite
# (se borran las líneas DB_HOST, DB_PORT, etc.)
```

Preparar y arrancar:

```bash
touch database/database.sqlite
php artisan migrate
npm install && npm run build
php artisan serve
```

Correr la suite de tests que trae el proyecto:

```bash
php artisan test
```
