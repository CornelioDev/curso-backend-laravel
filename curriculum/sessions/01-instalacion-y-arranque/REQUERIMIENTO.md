# Requerimiento

Instala una aplicación Laravel **en este mismo repositorio**, usando el starter
kit de **Livewire**, configurada para arrancar y testear.

## Resultado esperado

1. La app Laravel vive en la **raíz del repo** (conviviendo con `curriculum/`,
   `bitacora/`, `docs/`).
2. Usa el **starter kit de Livewire** (Blade + Livewire + Flux, con la auth que
   trae por defecto).
3. La base de datos de desarrollo es **SQLite**.
4. Los **tests** corren sobre **SQLite en memoria** (configurado en
   `phpunit.xml`).
5. La app arranca y la ruta `/login` responde correctamente.
6. Se commitean los **lockfiles** (`composer.lock`, `package-lock.json`) para
   fijar versiones del resto del curso.

## Comandos nuevos en esta sesión

```bash
laravel new ...        # crear el proyecto (elige el starter kit Livewire)
php artisan migrate    # ejecutar migraciones
php artisan serve      # levantar el servidor de desarrollo
php artisan test       # correr la suite de tests
npm install            # instalar dependencias de front
npm run build          # compilar assets con Vite
```

## Pista de arranque (no es la solución)

El instalador no escribe sobre una carpeta no vacía. Como este repo ya tiene
archivos, tendrás que instalar en un directorio temporal y mover el resultado a
la raíz (cuidando de no pisar `curriculum/`, `bitacora/`, `docs/`, `.devcontainer`
ni `CLAUDE.md`/`README.md`), o usar la opción del instalador para una carpeta
existente. Resuelve eso como parte del requerimiento.

## Criterio de aceptación

El test `tests/Feature/SmokeTest.php` (provisto) debe pasar en verde. Verifica
que la app arranca y que la ruta de login responde. Para correrlo:

```bash
php artisan test --filter=Smoke
```
