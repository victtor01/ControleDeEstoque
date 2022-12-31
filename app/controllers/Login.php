<?php

namespace app\controllers;

class Login
{
    public function index()
    {
        if(isset($_SESSION['user']))
        {
            redirect('/');
            die();
        }

        return 
        [
            'view' => 'login.php',
            'data' => [
                'title' => 'Login'
            ]
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha' , FILTER_DEFAULT);

        $user = findBy([
            'table' => 'funcionarios',
            'field' => 'email',
            'value' => $email
        ]);

        if(!$user)
        {
            return redirect('/login');
        }

        password_verify($senha, $user['senha']) ?  
        $_SESSION['user'] = $user 
        : redirect('/login');

        return redirect('/');
    }

    public function logout()
    {
        session_destroy();
        return redirect('/login');
    }

}

