<?php

use App\Actions\ConfirmReservation;
use App\Exceptions\InsufficientFundsException;
use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Wallet;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

it('confirma la reserva y descuenta el wallet en el caso feliz', function () {
    $user  = User::factory()->has(Wallet::factory()->state(['balance' => 100]))->create();
    $event = Event::factory()->create(['price' => 30]);

    $reservation = app(ConfirmReservation::class)->handle($user, $event, seats: 2);

    expect($reservation)->toBeInstanceOf(Reservation::class);
    expect(Reservation::count())->toBe(1);
    expect($user->wallet->fresh()->balance)->toBe(40); // 100 - (2 * 30)
});

it('no deja reserva ni toca el saldo si el débito falla', function () {
    $user  = User::factory()->has(Wallet::factory()->state(['balance' => 10]))->create();
    $event = Event::factory()->create(['price' => 30]);

    // 2 asientos × 30 = 60 > 10 disponibles → debe fallar y revertir todo.
    expect(fn () => app(ConfirmReservation::class)->handle($user, $event, seats: 2))
        ->toThrow(InsufficientFundsException::class);

    expect(Reservation::count())->toBe(0);              // nada quedó a medias
    expect($user->wallet->fresh()->balance)->toBe(10);  // el saldo, intacto
});
