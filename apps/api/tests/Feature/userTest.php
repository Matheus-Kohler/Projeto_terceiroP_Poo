<?php

test('user created', function () {
    $this->assertDatabaseMissing('users');

    //chamada principal

    $this->assertDatabaseHas('users');
});
