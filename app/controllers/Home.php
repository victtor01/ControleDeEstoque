<?php 

namespace app\controllers;

class Home
{
    function index()
    {
        validate();
        return 
        [
            'view' => 'home.php',
            'data' => [
                'title' => 'Home'
            ],
        ];
    }
}