<?php

namespace app\controllers;

class Produto
{
    public function index($params)
    {

        return
        [
            'view' => 'produtos.php',
            'data' => 
            [
                'config' => getall('produto'),
                'title' => 'produtos',
                'name' => 'produto'
            ]
        ];
    }

    public function search()
    {

        $pag = isset($_POST['pag']) ? $_POST['pag'] : 1;     
        $search = isset($_POST['busca']) ? $_POST['busca'] : ' ';

        $table = "produto P 
        INNER JOIN fornecedor F 
        INNER JOIN categoria C 
        WHERE P.nome LIKE '%{$search}%' 
        AND P.fornecedor = F.id_fornecedor 
        AND P.categoria = C.id_categoria";

        $field = "P.*, F.nome as nome_fornecedor, C.nome as nome_categoria";

        $data = getAll($table, $pag ,$field);

        echo $search = json_encode(
            [
                'data' => $data['refactor'],
                'page' => 
                [
                    'start' => $data['start'], 
                    'numPages' => $data['numPages']
                ],
                'fields' => 
                [
                    0 => 'id_produto', 
                    1 => 'nome', 
                    2 => 'nome_categoria', 
                    3 => 'tamanho', 
                    4 => 'quantidade', 
                    5 => 'valor_investido', 
                    6 => 'lucro_esperado',
                    7 => 'valor_venda',
                    8 => 'data_produto'
                ]   
            ]
        ); 

        return $search;
    }
}