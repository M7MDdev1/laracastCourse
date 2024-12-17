<?php

use Core\Validator;

test('string validation', function () {
    expect(Validator::string('hota'))->toBeTrue();
    expect(Validator::string(false))->toBeFalse();
    expect(Validator::string(true))->toBeFalse();
    expect(Validator::string(''))->toBeFalse();


});
