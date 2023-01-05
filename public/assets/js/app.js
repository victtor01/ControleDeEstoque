function buscar(pag){

    let busca = window.document.getElementById("busca").value;

    console.log(busca);

    $.post('/produtos/search', {busca: busca, pag : pag}, function(data){

        var dados = JSON.parse(data);
        console.log(dados);
        var produtos = dados.data.produto;
        console.log(produtos);
        var inner = '';

        for(var i = 0; i < produtos.length; i++){

            inner += '<tr>';

                inner += "<td> <input type='checkbox' style='width: 70%; height: 70%; border-radius: 5px'" +
                `name='checkbox_id[$id]' value= ${produtos[i].id_produto} </td>`;
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].nome}`;
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].categoria}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].tamanho}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].quantidade}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].valor_investido}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].lucro_esperado}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].data_produto}`
                inner += '</td>';

                inner += '<td>';
                    inner += `${produtos[i].data_produto}`
                inner += '</td>';

                inner += "<td class='justifycenter' style='justify-content: space-around;'>"+
                    "<button class='fullscreenn' style='padding: 6px; border-radius: 4px; background-color: green'>" +
                        "<a href='/produto/editar/'> <ion-icon name='create-outline'></ion-icon> </a>" +
                    "</button>" +
                    "<button class='fullscreenn' style='padding: 6px; border-radius: 4px; background-color: red'>"+
                        "<a href='/produto/excluir/'> <ion-icon name='trash-bin-outline'></ion-icon></a>"+
                    "</button>"+
                "</td>"

            inner += '</tr>';

        }

        tbody = window.document.getElementById('produtos');
        tbody.innerHTML = inner;


    });
    
}