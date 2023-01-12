<?php
//query completa
function getAll($table, $pag = 1, $field = '*', $pagination = 5)
{
    $pagination = pagination($table, $pagination, $pag);
    $options = "LIMIT $pagination[start], $pagination[numPorPagina]";
    $SQL = "SELECT {$field} FROM {$table} " . "{$options}";
    $query = connect()->query($SQL);
    $refactor = refactorQuery($query);
    
    return 
    [
        'data' => $refactor,
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

function joinAll($tables, $field, $where, $pag, $fields, $pagination = 5)
{
    try
    {
        $field = implode('', $field);

        $innerJoin = transformInnerJoin($tables);

        $pagination = pagination("produto", $pagination, $pag);

        $SQL = "SELECT {$field} FROM {$innerJoin} WHERE {$where} 
        LIMIT $pagination[start], $pagination[numPorPagina]";
        $query = connect()->query($SQL);
        $query->fetch_all();
        
        return [
            'data' => refactorQuery($query),
            'pages' => [ 'numPages' => $pagination['numPages'] , 'start' => $pagination['start']],
            'fields' => $fields
        ];
    }
    catch (\Throwable $th) 
    {
        echo "Algo de errado na query!";
        die();
    }
}


$query = [];
//query builder
function read(string $table, string $fields = '*')
{
    global $query;
    $query['sql'] = "SELECT {$fields} FROM $table ";
}  

function where(string $field, string $value, string $option = "=")
{
    global $query;
    $query['where'] = true;
    $query['sql'] .= "WHERE {$field} {$option} {$value} ";
}

function andWhere(string $field, string $value, string $option = "=")
{
    global $query;

    if(! $query['where'])
    {
        die('O andWhere tem que ser executado após o where!');
    }

    $query['sql'] .= "AND {$field} {$option} {$value} ";
}


function like(string $field, string $value)
{
    global $query;

    $query['where'] = true;

    $query['sql'] .= "WHERE {$field} LIKE '%{$value}%' ";
}

function execute()
{
    global $query;
    var_dump($query['sql']);
    return $query;
}
