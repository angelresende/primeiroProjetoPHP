<?php

function validaNome(string $nome) : bool
{
    if(empty($nome)){
        setarMensagemErro(mensagem: 'Não é possível seguir com a inscrição, pois não consta o nome do competidor')  ;
        return false;
    }
    
    else if(strlen($nome )<5){
        setarMensagemErro(mensagem: 'O nome deve conter mais de cinco caracteres.');
        return false;
    }
    
    else if(strlen($nome )>50){
        setarMensagemErro(mensagem: 'O nome é muito extenso, o memso deve conter até cinquenta caracteres.');
        return false;
    }
    return true;
}

function validadeIdade(string $idade){
    if(!is_numeric($idade)){
        setarMensagemErro(mensagem: 'Informe um número para idade.');
        return false;
    }
    return true;
}





