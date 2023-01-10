<?php

return [
    'POST' => 
    [
        '/login' => 'Login@store',
        '/produto/search' => 'Produto@search'
    ],
    'GET' => 
    [
        '/' => 'Home@index',
        '/user' => 'User@index',
        '/login' => 'Login@index',
        '/logout' => 'Login@logout',
        '/produtos' => 'Produto@index',
    ]
    
];