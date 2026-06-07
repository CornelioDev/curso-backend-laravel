# MANIFEST — Mapa del curso

50 sesiones en 10 fases, de lo más básico a lo más avanzado. Cada sesión enseña
**un concepto de backend** y lo aplica al proyecto guiado (plataforma de venta de
boletos + wallet de créditos + impresión de boletas).

El **hilo de Git** (🔀) aparece de forma transversal donde se cruza con
preocupaciones de backend, no como una fase aparte.

Estado actual: ver `bitacora/STATE.json`.

---

## Fase 0 · Fundamentos y entorno
- **01** · Instalación desde cero y arranque
- **02** · Anatomía de un proyecto Laravel (estructura, autoload, Artisan)
- **03** · El ciclo de vida de un request a fondo (`index.php` → kernel → providers → pipeline)
- **04** · 🔀 Workflow de trabajo: ramas, commits atómicos, el bucle del curso

## Fase 1 · La capa HTTP
- **05** · Routing y tu primer endpoint
- **06** · Controllers y la responsabilidad de la capa HTTP
- **07** · Request y Response: status codes, headers, content negotiation
- **08** · Middleware: el pipeline y los cross-cutting concerns
- **09** · Idempotencia y semántica de los métodos HTTP

## Fase 2 · Datos y persistencia
- **10** · 🔀 Modelado relacional y migraciones (el esquema como código versionado)
- **11** · Eloquent: el ORM y el SQL que genera por debajo
- **12** · Relaciones y eager vs lazy loading
- **13** · El problema N+1 y cómo cazarlo
- **14** · Transacciones atómicas (ACID)
- **15** · Locking: optimista vs pesimista y las race conditions
- **16** · Índices y performance de queries

## Fase 3 · Arquitectura de aplicación
- **17** · Validación con Form Requests
- **18** · Service layer y Action classes
- **19** · DTOs y el flujo de datos entre capas
- **20** · El contenedor IoC y la inyección de dependencias
- **21** · Binding de interfaces e inversión de dependencias
- **22** · Repository pattern (y cuándo NO usarlo)
- **23** · Eventos de dominio para desacoplar

## Fase 4 · Diseño de APIs
- **24** · REST y diseño de recursos
- **25** · API Resources: serialización
- **26** · Versionado de API
- **27** · Paginación, filtrado y ordenamiento
- **28** · Contrato de errores (problem+json)
- **29** · Rate limiting

## Fase 5 · Auth y seguridad
- **30** · Entender el auth heredado (guards, providers, sessions)
- **31** · Autorización del dominio: Gates y Policies (RBAC)
- **32** · Tokens de API con Sanctum
- **33** · Seguridad: mass assignment, SQLi, CSRF, XSS
- **34** · 🔀 Secretos y `.env` (qué nunca se commitea)
- **35** · Hardening: rate limiting de login y signed URLs

## Fase 6 · Asincronía y eventos
- **36** · Events & Listeners
- **37** · Queues y Jobs
- **38** · Workers y el ciclo de una cola (Redis)
- **39** · Jobs idempotentes, reintentos y manejo de fallos
- **40** · Notifications y Mail (capturados con Mailpit)
- **41** · Scheduler: tareas programadas

## Fase 7 · Generación de boletas (fase integradora)
- **42** · Storage / Filesystem y URLs firmadas y temporales
- **43** · Generación de PDF de la boleta como job en cola
- **44** · QR firmado y validación de uso único en la puerta (concurrencia + estado)

## Fase 8 · Caché, performance y concurrencia
- **45** · Estrategias de caché con Redis (cache-aside, invalidación)
- **46** · Atomic locks para concurrencia
- **47** · Profiling: N+1, Telescope y optimización de queries

## Fase 9 · Observabilidad y operación
- **48** · Logging estructurado y manejo central de errores
- **49** · 🔀 CI como quality gate (los tests corren al hacer push)
- **50** · 🔀 Deploy: migraciones en producción y zero-downtime (capstone)

---

> Las sesiones se publican en releases etiquetados. La fundación (Fase 0 + la
> Sesión 14 de ejemplo) viene completa; el resto crece por fase. Quien está en un
> tag tiene exactamente el mismo contenido que cualquier otro en ese tag.
