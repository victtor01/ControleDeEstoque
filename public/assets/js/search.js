import { showInTable, showFooterBar} from './requests/show.js';
import { app } from '../js/app.js'

function search(tbody, pag = 1)
{
    var busca = document.querySelector('#busca').value;
    $.post(`/${tbody}/search`, {busca: busca, pag : pag}, function(data)
    {
        try 
        {
            let dados = JSON.parse(data);
            var data = dados.data;
            var page = dados.page;
            var fields = dados.fields;

            for(let i = 0; i < data.length; i++)
            {
                for(let j = 0; j < fields.length; j++)
                {
                    data[i][fields[j]] = fields[j] != 'valor_venda' ? data[i][fields[j]] : (data[i][fields[j-1]]/100 * data[i][fields[j-2]]) + parseInt(data[i][fields[j-2]])
                }
            }

            showInTable(data, tbody, fields);
            showFooterBar('ul-pagination', page.numPages);
            app();
        } 
        catch (error) 
        {
            console.log('Houve algum erro na jquery');
        }
    })
    return;
}

export { search }