<?php

function transformInnerJoin($tables)
{
    $innerJoin = ''; 
    $i = 0;

    while($i < count($tables))
    { 
        $innerJoin .= "INNER JOIN $tables[$i] "; 
        $i++;
    }

    return $innerJoin = ltrim($innerJoin, "INNER JOIN");
}

function refactorQuery($query)
{
    $refactor = [];
    foreach($query as $chave => $data)
    {
        $refactor[$chave] = $data;
    } 
    return $refactor;
}