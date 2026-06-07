# Sesión 14 · Transacciones atómicas (ACID)

## Concepto

Una **transacción** agrupa varias operaciones de base de datos en una sola unidad
*todo-o-nada*. Si cualquiera falla a mitad del camino, se revierte todo
(*rollback*); si todas tienen éxito, se confirma el conjunto (*commit*). Es la
**A** de ACID: atomicidad.

Sin transacciones, un fallo a medias deja datos corruptos. En nuestro dominio:
cobraste el wallet pero no creaste la reserva (el usuario pagó por nada), o
creaste la reserva pero no cobraste (entraste gratis). Ninguno de los dos estados
parciales debe poder existir jamás.

En Laravel se expresa con `DB::transaction()`. La clave —y el *gotcha* más común—
es entender **cómo decide la base de datos hacer rollback**: necesita que una
excepción *escape* del bloque transaccional. Si la capturas dentro, la base de
datos cree que todo salió bien y confirma los cambios parciales.

## Por qué importa

La integridad de los datos es el contrato más sagrado del backend. Un sistema que
puede dejar estados inconsistentes ante un fallo no es confiable, por muy rápido o
bonito que sea. Las transacciones son la herramienta fundamental para garantizar
que las operaciones de negocio que tocan varias tablas sean indivisibles.

> Contexto del proyecto: en sesiones previas ya creaste los modelos `User`,
> `Wallet` (con `balance`), `Event` y `Reservation`.
