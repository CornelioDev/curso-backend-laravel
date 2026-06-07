# Backend a profundidad con Laravel

Un curso práctico para aprender **backend de verdad**, usando PHP + Laravel como
vehículo. No es un curso de Laravel: es un curso de backend que *usa* Laravel.
Vas a construir, sesión a sesión, una plataforma de venta de boletos para
eventos —con wallet de créditos e impresión de boletas— mientras aprendes
HTTP, datos, arquitectura, APIs, auth, asincronía, caché, concurrencia y
operación.

## Cómo funciona

El curso es **TDD aplicado al aprendizaje** y se corre dentro de **Claude Code**:

1. Pides la siguiente sesión.
2. Lees un **concepto**, un **ejemplo genérico** y un **requerimiento** sobre el
   proyecto.
3. Hay un **test que empieza en rojo**.
4. **Tú** escribes el código. Claude Code te da **pistas, nunca la solución**.
5. Verde → se commitea, se actualiza tu progreso, y la sesión se cierra.

Una sesión a la vez. Tu avance queda persistido en `bitacora/` y en el historial
de git.

## Prerrequisitos y entorno

El curso corre dentro de un **Dev Container** (PHP, Composer y Node pineados), así
todos tienen el mismo entorno. **Sigue la guía paso a paso en
[`SETUP.md`](SETUP.md)** — cubre tres caminos:

- **GitHub Codespaces** — cero instalación, corre en la nube.
- **Docker local + VS Code** — el entorno reproducible en tu máquina.
- **Local sin Docker** — PHP/Composer/Node a mano, como escape.

> Los **tests** corren sobre SQLite en memoria (cero setup). Los **servicios** del
> desarrollo (base de datos real, Redis, colas) llegan vía Laravel Sail cuando las
> fases los necesiten; el Dev Container ya lo soporta.

## Arranque

1. **Prepara el entorno siguiendo [`SETUP.md`](SETUP.md)** y ábrelo en el Dev
   Container.
2. Inicia Claude Code y dile: **"empecemos la sesión 1"**.
3. La Sesión 1 te guía a instalar Laravel desde cero. A partir de ahí, el curso
   fluye solo.

Para retomar más tarde, abre Claude Code y di "siguiente sesión": leerá tu
`STATE.json` y sabrá exactamente dónde quedaste.

## Tu página de progreso (GitHub Pages)

El repo incluye `docs/index.html`: una página que muestra tu avance en el curso.
Se regenera sola cada vez que cierras una sesión. Para publicarla como **tu
página personal, pública y compartible**:

1. Sube el repo a tu cuenta de GitHub.
2. Settings → **Pages** → *Deploy from a branch* → rama `main`, carpeta `/docs`.
3. Tu página queda en `https://<tu-usuario>.github.io/<tu-repo>/`.
4. Pega esa URL en el **website** del repo (sección *About*).
5. Cada vez que termines una sesión y hagas `git push`, tu página se actualiza
   sola. Compártela: es tu *badge* de avance ("voy 14 de 50").

> ¿No usas GitHub? La misma página funciona con doble clic local, o publicada en
> GitLab Pages / tu propio servidor. Solo esta función asume GitHub; el resto del
> curso es agnóstico al host.

## Si te trabas: pide ayuda sin spoilear

La comunidad (Issues / Discussions / chat) se rige por una norma simple, espejo
de cómo trabaja Claude Code:

> **Pistas, no soluciones.** Ayuda señalando el concepto, el archivo o el error
> —nunca pegando el código que pasa el test—. Usa la etiqueta de spoiler si vas
> a mostrar algo sensible.

Como cada sesión está numerada y su test tiene nombre, alguien puede ayudarte con
precisión: "estoy trabado en la Sesión 14, `ConfirmReservationTest` falla en la
segunda aserción" significa lo mismo para todos.

## Estructura del repo

```
.
├── CLAUDE.md              # el contrato que rige a Claude Code
├── README.md              # este archivo
├── SETUP.md               # cómo instalar Docker / abrir el Dev Container
├── bitacora/
│   ├── STATE.json         # tu progreso (verdad de máquina)
│   └── log.md             # tu diario de aprendizaje
├── curriculum/
│   ├── MANIFEST.md        # el mapa completo del curso
│   └── sessions/<id>/     # concepto, ejemplo, requerimiento y test de cada sesión
├── docs/index.html        # tu página de progreso (GitHub Pages)
└── .devcontainer/         # entorno reproducible
```
