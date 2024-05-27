<?php

use App\Lang\Lang;

test('can get an associated language label', function () {
    expect(Lang::from('de')->label())->toBe('Deutsch');
});
