<?php

use Inertia\Testing\AssertableInertia;

it('contains a list of available languages', function () {
    $response = $this->get('/')
        ->assertInertia(function (AssertableInertia $page) {
            $page->where('languages.0.label', 'English')
                ->where('languages.0.value', 'en');
        });

    $response->assertStatus(200);
});
