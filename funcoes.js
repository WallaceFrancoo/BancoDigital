function MostrarSenha (){
    var alterar = document.getElementById('senha');
    if(alterar.type === 'password'){
        alterar.type = 'text';
    } else{
        alterar.type = 'password';
    }
}

function Acessar(){
    var nomeAcesso = document.getElementById('nomeLogin').value;
    if (nomeAcesso.toLowerCase() === 'wallace'){
        window.alert("Você tem acesso ao sistema")
    } else {
        window.alert("Você não tem acesso nesse sistema!!")
        
    }
}