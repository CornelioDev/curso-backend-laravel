# Requerimiento

Implementa la confirmación de una reserva de forma **atómica**: al confirmar,
debes descontar el saldo del wallet del usuario **y** crear la reserva, como una
sola operación todo-o-nada.

## Resultado esperado

Crea una acción `App\Actions\ConfirmReservation` con un método:

```php
public function handle(User $user, Event $event, int $seats): Reservation
```

que:

1. Calcule el costo (`seats` × precio del evento).
2. Si el wallet **no** tiene saldo suficiente, lance
   `App\Exceptions\InsufficientFundsException` y **no deje ningún rastro**: ni
   reserva creada ni saldo modificado.
3. Si hay saldo, descuente el costo del wallet y cree la reserva, ambas cosas
   dentro de la misma transacción.
4. Devuelva la `Reservation` creada.

## Comandos nuevos en esta sesión

Ninguno nuevo. (Usarás clases y artisan que ya conoces.)

## Criterio de aceptación

El test `tests/Feature/ConfirmReservationTest.php` (provisto) debe pasar en
verde. Para correrlo:

```bash
php artisan test --filter=ConfirmReservation
```

> Lee bien las aserciones: no basta con que "funcione el caso feliz". El test
> también verifica que un fallo a mitad **no deje datos parciales**. Ahí está la
> lección.
