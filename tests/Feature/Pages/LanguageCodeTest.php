<?php

use App\Models\User;

it('returns a successful response for the language codes page', function () {
    $response = $this->get(route('language_codes.index'));
    
    $response->assertStatus(200);
});