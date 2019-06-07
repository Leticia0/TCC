<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 19/10/2018
 * Time: 21:17
 */
//Chamo uma vez o arquivo dao_turma.php
require_once __DIR__.'/../dao/dao_turma.php';

//Função para cadastrar turma
function cadastrarTurma(){
    //Recebo via método POST os seguintes dados e nomeio eles por questões de organização
    $tu_descricao  = $_POST['tu_descricao'];
    $tu_anoletivo  = $_POST['tu_anoletivo'];
    $tu_anoescolar = $_POST['tu_anoescolar'];
//Instancio um objeto do tipo turma
    $turma = new Turma(null, $tu_descricao, $tu_anoletivo, $tu_anoescolar);
//Instancio um objeto do tio Dao Turma (Data Access Object)
    $daoTurma = new DaoTurma();
    //Chamo a função cadastrar turma para cadastrar a turma
    $daoTurma->cadastrarTurma($turma);
}
//Verifica se a $_GET['acao'] existe e não está vazia, se estiver dentro dos parâmetros
if (isset($_GET['acao']) && !empty($_GET['acao'])) {
//    Recebo ela e nomeio simplesmente para $acao
    $acao = $_GET['acao'];
}


//Se minha ação for igual a cadastrarTurma, realize os comandos:
if ($acao == 'cadastrarTurma'){
//    Chame a função cadastrar Turma
    cadastrarTurma();
//    Redirecione para o painel do administrador com as turmas cadastradas
    header('Location:../view/painelAdministrador.php?requisicao=turmasCadastradas ');
}