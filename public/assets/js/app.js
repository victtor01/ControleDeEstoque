import { search } from './search.js'

export function app()
{
    var searchButton = document.querySelector('#searchButton');
    var liSearch = document.getElementsByClassName("liSearch");

    for (var li of liSearch) {
        li.addEventListener('click', function() {
        search(this.name, this.value); 
        })
    }

    searchButton.addEventListener('click', () => {
        search(searchButton.name, 1);
    })  
}

app();
