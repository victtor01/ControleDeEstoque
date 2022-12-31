<?php

function controller($matchedUri, $params)
{
    [$controller, $method] = explode('@', array_values($matchedUri)[0]);
    $controllerNameSpace = CONTROLLER_PATCH.$controller;

    if(! class_exists($controllerNameSpace))
    {
        die("Controller {$controllerNameSpace} não existe!");
    }

    $controllerInstance = new $controllerNameSpace;

    if(! method_exists($controllerInstance, $method))
    {
        die("Metodo {$method} não existe!");
    }

    $controller = $controllerInstance->$method($params);

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        die();
    }

    return $controller;
}