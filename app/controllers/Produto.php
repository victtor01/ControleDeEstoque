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

        read(table: 'produto P, fornecedor F, categoria C', 
        fields: 'P.*, F.nome as nome_fornecedor, C.nome as nome_categoria');

        like(field: 'P.nome', value: 'biquini');

        andWhere(field: 'P.fornecedor',  value: 'F.id_fornecedor');

        andWhere(field: 'P.categoria', value: 'C.id_categoria');

        var_dump(execute());

        /* $field = [
            'P.* ,',
            'F.nome as nome_fornecedor ,', 
            'C.nome as nome_categoria'
        ];
        $tables = [
            'produto P',
            'fornecedor F',
            'categoria C'
        ];
        $fields = [ 
            'id_produto', 
            'nome', 
            'nome_categoria', 
            'tamanho', 
            'quantidade', 
            'valor_investido',
            'lucro_esperado', 
            'lucro_esperado', 
            'data_produto'
        ];

        $where = "P.nome LIKE '%{$search}%' 
        AND P.fornecedor = F.id_fornecedor 
        AND P.categoria = C.id_categoria";

        $fetch = JoinAll($tables, $field, $where, $pag, $fields);
        echo json_encode($fetch); */
    } 
}