<?php

function pagination($table, $numPorPagina, $pag){

    $SQL = "SELECT * FROM " . $table;
    $query = mysqli_query(connect(), $SQL);

    $totalProducts = mysqli_num_rows($query) > 0 ? mysqli_num_rows($query) : die('Nenhum Produto cadastrado');

    $num_paginas = ceil($totalProducts/$numPorPagina);
    $inicio = ($numPorPagina * $pag) - $numPorPagina;

    return [
        'start' => $inicio,
        'numPages' => $num_paginas, 
        'numPorPagina' => $numPorPagina
    ];
}
