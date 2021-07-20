<?php
function defineCategoriaCompetidor(string $nome, string $idade) :? string
{

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';
    $categorias[] = 'Sem categoria definida';

    if(validaNome($nome) && validadeIdade($idade)){
        removerMensagemErro();
        if($idade <= 5){
            for($i = 0; $i <= count($categorias);$i++){
                if($categorias[$i] == 'Sem categoria definida'){
                    setarMensagemSucesso("O nadador " .$nome. " não poderá competir, pois não há categoria definida para esta idade!") ;
                return null;
                }
            }
        }

        else if($idade >= 6 && $idade <=12){
            for($i = 0; $i <= count($categorias);$i++){
                if($categorias[$i] == 'Infantil'){
                    setarMensagemSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".");
                    return null;
                }         
            }    
        }

        else if($idade >= 13 && $idade <=18){
            for($i = 0; $i <= count($categorias);$i++){
                if($categorias[$i] == 'Adolescente'){
                    setarMensagemSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".");
                    return null;
                }           
            }
        }

        else if($idade >= 19){
            for($i = 0; $i <= count($categorias);$i++){
                if($categorias[$i] == 'Adulto'){
                setarMensagemSucesso("O nadador " .$nome. " compete na categoria " .$categorias[$i]. ".");
                return null;
                }
            }
        }
    }
    else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
    
}

