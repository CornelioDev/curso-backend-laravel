<?php

/**
 * Sesión 01 · Smoke test
 *
 * Verifica que la instalación quedó bien: la app arranca y la ruta de login
 * (que trae el starter kit de Livewire) responde. Se activa copiándolo a
 * tests/Feature/ una vez instalada la app.
 */

it('arranca y sirve la página de login', function () {
    $response = $this->get('/login');

    $response->assertOk();
});

it('expone la ruta de salud por defecto del framework', function () {
    // Laravel 11+ registra /up como health check.
    $this->get('/up')->assertOk();
});
