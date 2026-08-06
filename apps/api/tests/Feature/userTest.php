<?php

test('user created', function () {
    $this->assertDatabaseMissing('users', 0);

    //chamada principal

    $this->assertDatabaseHas('users');
});
