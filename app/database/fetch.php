<?php

function getAll($table, $pag = 1, $field = '*', $pagination = 5)
{
    $pagination = pagination($table, $pagination, $pag);
    $options = "LIMIT $pagination[start], $pagination[numPorPagina]";
    $SQL = "SELECT {$field} FROM {$table} " . "{$options}";
    $query = connect()->query($SQL);
    $query->fetch_all();
    
    $refactor = [];

    foreach($query as $chave => $data)
    {
        $refactor[$chave] = $data;
    } 

    return 
    [
        'refactor' => $refactor,
        'numPages' => $pagination['numPages'],
        'start' => $pagination['start']
    ];

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