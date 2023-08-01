function MostrarSenha (){
    var alterar = document.getElementById('senha');
    if(alterar.type === 'password'){
        alterar.type = 'text';
    } else{
        alterar.type = 'password';
    }
}