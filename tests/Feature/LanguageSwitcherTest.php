<?php

it('sets the language correctly', function () {
    $response = $this->post('/language', [
        'language' => 'de'
    ]);

    $response->assertSessionHas('language', 'de')
        ->assertStatus(302);
});

it('sets the default language if the chosen language is not valid', function () {
    $response = $this->post('/language', [
        'language' => 'fr'
    ]);

    $response->assertSessionHas('language', app()->getLocale())
        ->assertStatus(302);
});
