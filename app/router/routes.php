<?php

return [
    'POST' => [
        '/login' => 'Login@store'
    ],
    'GET' => [
        '/' => 'Home@index',
        '/user' => 'User@index',
        '/login' => 'Login@index',
        '/logout' => 'Login@logout',
        '/produtos' => 'Produto@index'
    ]
    
];