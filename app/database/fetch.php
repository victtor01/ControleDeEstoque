<?php

function getAll($table, $field = '*')
{
    $SQL = "SELECT {$field} FROM {$table}";
    $query = connect()->query($SQL);
    $query->fetch_assoc();
    $refactor = [];

    foreach($query as $chave => $data)
    {
        $refactor[$chave] = $data;
    }
    
    return $refactor;

    /* SELECT P.*, F.nome, C.nome FROM produto P INNER JOIN fornecedor F  INNER JOIN categoria C WHERE P.fornecedor = F.id_fornecedor AND P.categoria = C.id_categoria */ 
}

function findBy($data)
{
    extract($data);
    $fields = isset($fields) ? $fields : '*';
    $fields = is_array($fields) ? implode(', ' , $fields) : $fields;
    $SQL = "SELECT {$fields} FROM {$table} WHERE {$field} = '{$value}'";
    $query = connect()->query($SQL);
    return $query->fetch_assoc();
}