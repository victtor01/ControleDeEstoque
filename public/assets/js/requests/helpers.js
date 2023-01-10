export function refactorVetorToObject(size)
{
    var object = [];
    for(let i = 0; i < size; i++)
    {  
        object[i] = []; 
    }
    return object;
}