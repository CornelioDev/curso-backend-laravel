# Sesión 01 · Instalación desde cero y arranque

## Concepto

Antes de escribir backend, necesitas un proyecto donde escribirlo. Un proyecto
Laravel no es "unos archivos PHP": es una aplicación con una estructura, un
autoloader (Composer/PSR-4), un punto de entrada único (`public/index.php`) y un
conjunto de dependencias declaradas. Instalarlo bien es el primer acto de
disciplina de backend.

En este curso usamos el **starter kit de Livewire**, el camino nativo de Laravel
para construir interfaces sin salir de PHP (Blade + Livewire). Trae además
autenticación lista (login, registro, recuperación) — que NO reescribiremos,
porque en un equipo real nadie reescribe el login a mano. Más adelante
aprenderás a *entenderla y extenderla*, que es el trabajo real de backend.

Conceptos clave de esta sesión:
- **Composer** gestiona las dependencias PHP y el autoloading.
- **El punto de entrada único:** todo request entra por `public/index.php`.
- **`.env`:** la configuración por entorno; nunca se commitea.
- **Migraciones:** el esquema de base de datos como código ejecutable.
- **SQLite:** una base de datos en un solo archivo, ideal para arrancar y para
  tests.

## Por qué importa

Un entorno reproducible es lo que separa "me funciona en mi máquina" de un equipo
que trabaja sin fricción. Al fijar versiones (lockfiles) y correr todo dentro de
un Dev Container, garantizas que tu instalación se comporte igual que la de
cualquier otra persona del curso. Esa es la base de la consistencia.
