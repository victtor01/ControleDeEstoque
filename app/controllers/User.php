<?php

namespace app\controllers;

class User
{
    public function index($params)
    {
        validate();

        return 
        [
            'view' => 'user.php',
            'data' => [
                'title' => 'Home'
            ]
        ];
    }
}