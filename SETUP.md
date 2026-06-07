# SETUP — Preparar el entorno

El curso corre dentro de un **Dev Container**: un entorno con PHP, Composer y Node
ya pineados, idéntico para todos. Esto evita el clásico "en mi máquina funciona".

Elige **uno** de estos tres caminos. Cuando termines, vuelve a `README.md` y di a
Claude Code: **"empecemos la sesión 1"**.

---

## Opción A · GitHub Codespaces (cero instalación — la más rápida)

No instalas nada local; el contenedor corre en la nube.

1. Sube este repo a tu cuenta de GitHub.
2. En la página del repo: botón **Code** → pestaña **Codespaces** →
   **Create codespace on main**.
3. Espera a que construya el contenedor (lee `.devcontainer/devcontainer.json`
   solo). Te deja en un VS Code en el navegador, ya dentro del entorno.
4. En la terminal, verifica:
   ```bash
   php -v && composer --version && node -v
   ```
5. Listo. Inicia Claude Code ahí y di "empecemos la sesión 1".

> Codespaces tiene horas gratis al mes; pasadas esas, es de pago.

---

## Opción B · Docker local + VS Code (entorno reproducible en tu máquina)

### 1. Instala Docker
- **Windows / macOS:** Docker Desktop → https://www.docker.com/products/docker-desktop/
  (en Windows, deja activado el backend **WSL2** cuando lo pida).
- **Linux:** Docker Engine → https://docs.docker.com/engine/install/
  Luego, para usarlo sin `sudo`:
  ```bash
  sudo usermod -aG docker $USER   # cierra sesión y vuelve a entrar
  ```

Verifica que el demonio está corriendo:
```bash
docker run --rm hello-world
```

### 2. Instala VS Code + la extensión Dev Containers
- VS Code → https://code.visualstudio.com/
- Dentro de VS Code, instala la extensión **Dev Containers**
  (id: `ms-vscode-remote.remote-containers`).

### 3. Abre el proyecto en el contenedor
1. Abre la carpeta del repo en VS Code.
2. `Ctrl/Cmd + Shift + P` → escribe y elige
   **Dev Containers: Reopen in Container**.
3. La primera vez tarda unos minutos (descarga la imagen y construye). Al
   terminar, la barra inferior izquierda dirá *Dev Container: Backend con Laravel*.
4. En la **terminal integrada** (ya dentro del contenedor), verifica:
   ```bash
   php -v && composer --version && node -v
   ```
5. Inicia Claude Code en esa terminal y di "empecemos la sesión 1".

---

## Opción C · Local sin Docker (solo si ya manejas tu entorno PHP)

No usa contenedor. Pierdes la garantía de "mismo entorno que todos", pero funciona.

Instala a mano:
- **PHP 8.3+** con las extensiones comunes (`mbstring`, `xml`, `curl`, `sqlite3`,
  `pdo_sqlite`, `bcmath`, `intl`).
- **Composer** → https://getcomposer.org/download/
- **Node 20+** y npm → https://nodejs.org/

Verifica:
```bash
php -v && composer --version && node -v
```
Si las versiones cuadran, inicia Claude Code y di "empecemos la sesión 1".

---

## Más adelante: los servicios (base de datos real, Redis, colas)

Las primeras fases corren con **SQLite** (un archivo, cero servicios) y los tests
usan **SQLite en memoria**. Cuando lleguemos a las fases de asincronía y caché,
**Laravel Sail** levanta los servicios (MySQL/PostgreSQL, Redis) como contenedores
Docker. El Dev Container ya viene con *docker-in-docker* habilitado, así que Sail
funciona dentro de él sin configuración extra. Esa sesión te guía cuando toque.

---

## Problemas comunes

- **"Cannot connect to the Docker daemon":** Docker no está corriendo. Abre Docker
  Desktop (Win/Mac) o `sudo systemctl start docker` (Linux).
- **En Windows, el contenedor no arranca:** asegúrate de tener **WSL2** instalado y
  seleccionado como backend en Docker Desktop.
- **"Reopen in Container" no aparece:** falta la extensión Dev Containers, o no
  abriste la carpeta raíz del repo (la que contiene `.devcontainer/`).
- **Permiso denegado al usar `docker` en Linux:** te falta el paso `usermod -aG
  docker` de arriba, o no reiniciaste la sesión.
