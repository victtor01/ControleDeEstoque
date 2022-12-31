<?php

function connect()
{
    try 
    {
        return new mysqli('localhost', 'root', 'root', 'controleestoque');
    } 
    catch (\Throwable $th) 
    {
        die('Erro em tentar conectar-se ao banco de dados! ' . $th);
    }
}
