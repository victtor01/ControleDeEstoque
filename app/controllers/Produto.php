<?php

namespace app\controllers;

class Produto
{
    public function index($params)
    {

        $pag = isset($params['page']) ? $params['page'] : 1; 
        $data = getAll('produto P INNER JOIN fornecedor F INNER JOIN categoria C WHERE P.fornecedor = F.id_fornecedor AND P.categoria = C.id_categoria', $pag ,'P.*, F.nome as nome_fornecedor, C.nome as nome_categoria');

        return
        [
            'view' => 'produtos.php',
            'data' => 
            [
                'title' => 'produtos',
                'produto' => $data['refactor'],
                'page' => 
                [
                    'start' => $data['start'],
                    'numPages' => $data['numPages']
                ]
            ]
        ];
    }

    public function search()
    {

        $pag = isset($_POST['pag']) ? $_POST['pag'] : 1;     
        $search = isset($_POST['busca']) ? $_POST['busca'] : ' ';
        $data = getAll("produto P INNER JOIN fornecedor F INNER JOIN categoria C WHERE P.nome LIKE '%{$search}%' AND P.fornecedor = F.id_fornecedor AND P.categoria = C.id_categoria", $pag ,'P.*, F.nome as nome_fornecedor, C.nome as nome_categoria');

        echo $search = json_encode(
            [
                'data' => 
                [
                    'produto' => $data['refactor'], 
                    'page' => 
                    [
                        'start' => $data['start'], 
                        'numPages' => $data['numPages']
                    ]
                ]
            ]
        ); 

        return $search;
    }
}