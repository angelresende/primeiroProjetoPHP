<?php

include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');