function showInTable(object, tbody, fields)
{
    var table = window.document.querySelector(`#${tbody}`);
    tbody = '';
    for (var i = 0; i < object.length; i++)
    {
        tbody += '<tr>';
            tbody += "<td> <input type='checkbox' style='width: 70%; height: 70%; border-radius: 5px'" +
            `name='checkbox_id[$id]' value= ${object[i][0]} </td>`;
            tbody += '</td>';
            for(let j = 1; j < fields.length ; j++)
            {
                tbody += '<td>';
                    tbody += `${object[i][fields[j]]}`
                tbody += '</td>';
            }
            tbody += 
            "<td class='justifycenter' style='justify-content: space-around;'>" +
                "<button class='fullscreenn' style='padding: 6px; border-radius: 4px; background-color: green'>" +
                    "<a href='/produto/editar/'> <ion-icon name='create-outline'></ion-icon> </a>" +
                "</button>" +
                "<button class='fullscreenn' style='padding: 6px; border-radius: 4px; background-color: red'>" +
                    "<a href='/produto/excluir/'> <ion-icon name='trash-bin-outline'></ion-icon></a>" +
                "</button>"+
            "</td>"
        tbody += '</tr>';
    }
    table.innerHTML = tbody; 
    return;
}

function showFooterBar(footerID, numPages)
{
    var footer = document.getElementById(`${footerID}`);
    var conteudo = '';

    conteudo += 
    "<li class='page-item'>" + 
        "<button class='page-link' type='button' style='width: 100%; height: 100%'>" +
            "<a href='/produtos/page/'> <ion-icon name='chevron-back-outline'></ion-icon> </a>" +
        "</button>" +
    "</li>";

    for(let i = 1; i < numPages + 1; i++)
    {
        conteudo += 
        "<li class='page-item'>" +
            `<button class="page-link liSearch" name="produto" value="${i}" type="button" style="width: 100%; height: 100%">` +
                `${i}`+
            "</button>" +
        "</li>";
    }

    conteudo += 
    "<li class='page-item'>" + 
        "<button class='page-link' type='button' style='width: 100%; height: 100%'>" +
            "<a href='/produtos/page/'> <ion-icon name='chevron-forward-outline'></ion-icon> </a>" +
        "</button>" +
    "</li>";
    
    footer.innerHTML = conteudo;
}

export { showInTable, showFooterBar }