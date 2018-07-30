<?php

define('USERNAME', 'example@gmail.com');
define('PASSWORD', '123456');

$user = [
        'error' => null,
        'user' => ['id' => 1, 'email' => 'example@gmail.com'],
        'profile' => ['first_name' => 'Elad', 'last_name' => 'Dahan']
];

$error = [
        'error' => ['code'=> 2, 'description' => 'password or email is incorrect']
];

$password_changed = [
        'error' => null
];
?>