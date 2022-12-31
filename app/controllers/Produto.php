<?php

namespace app\controllers;

class Produto
{
    public function index()
    {
        return
        [
            'view' => 'produtos.php',
            'data' => [
                'title' => 'produtos',
                'produto' => getAll('produto')
            ]
        ];
    }
}