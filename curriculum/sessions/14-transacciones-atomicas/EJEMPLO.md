# Ejemplo genérico

> Ilustra el concepto con una transferencia entre dos cuentas cualesquiera. **No
> es la solución** de tu requerimiento (reserva + wallet); es solo la forma de
> usar una transacción.

```php
use Illuminate\Support\Facades\DB;

DB::transaction(function () use ($from, $to, $amount) {
    if ($from->balance < $amount) {
        throw new InsufficientFundsException();
    }

    $from->decrement('balance', $amount);
    $to->increment('balance', $amount);
});
```

Puntos a notar:

- Todo lo que ocurre dentro del closure es atómico.
- Si se lanza una excepción **y esta escapa del closure**, Laravel hace rollback
  automáticamente: ni el `decrement` ni el `increment` quedan.
- Si el closure termina sin excepción, se hace commit.
- `DB::transaction()` también reintenta ante deadlocks si le pasas un segundo
  argumento con el número de intentos.
