<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 09/05/2018
 * Time: 14:39
 */
//Chamo o arquivo Login.php
require_once __DIR__.'/../model/login.php';
//Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
Login::isLogado();

require_once __DIR__ . "/../dao/dao_area.php";
require_once __DIR__."./../dao/dao_aluno.php";
require_once __DIR__."./../dao/dao_turma.php";
require_once __DIR__."/../dao/dao_categoria.php";

//Função Index me redireciona para minha página principal
function index(){
    //Incluo o inicioDisciplinas
    include_once __DIR__."/../view/menu.php";
    include_once __DIR__.'/../view/inicioDisciplinas.php';
}

function getTurmaDescricao($tu_idturma){
    $daoTurma   = new DaoTurma();
    $dadosturma = $daoTurma->getTurma($tu_idturma);
    $turma      = $dadosturma->getTuDescricao();
    return $turma;
}

function getTurmaAnoEscolar($tu_idturma){
    $daoTurma   = new DaoTurma();
    $dadosturma = $daoTurma->getTurma($tu_idturma);
    $turma      = $dadosturma->getTuAnoescolar();
    return $turma;
}

function getQuantidadeQuestoesArea($ar_idarea){
    $daoArea = new DaoArea();
    return $daoArea->getQuantidadeQuestoesArea($ar_idarea);
}

function getQuantidadeQuestoesRespondidasArea($al_idusuario, $ar_idarea){
    $daoAluno = new DaoAluno();
    return $daoAluno->getQuantidadeQuestoesRespondidasArea($al_idusuario, $ar_idarea);
}
function getErrosAlunoArea($al_idusuario, $ar_idarea){
    $daoAluno = new DaoAluno();
    return $daoAluno->getErrosAlunoArea($al_idusuario, $ar_idarea);
}

function getAcertosAlunoArea($al_idusuario, $ar_idarea){
    $daoAluno = new DaoAluno();
    return $daoAluno->getAcertosAlunoArea($al_idusuario, $ar_idarea);
}

function getQuantidadeQuestoesRespondidas($al_idusuario){
    $daoAluno = new DaoAluno();
    return $daoAluno->getQuantidadeQuestoesRespondidas($al_idusuario);
}
//Se a variável $_GET['acao'] estiver DIFERENTE de vazia e ela estiver SETADA
if (isset($_GET['acao']) && !empty($_GET['acao'])) {
    $acao = $_GET['acao'];
}

    switch ($acao){
        case 'sair':
            //Destruo a sessão atual
            session_destroy();
            //Chamo a função Index
            index();
            break;

        case 'index':

            $daoArea = new DaoArea();
            $areas = $daoArea->getAreas();

            include_once __DIR__."/../view/menu.php";
            include_once __DIR__.'/../view/inicioDisciplinas.php';
            include_once __DIR__.'/../view/rodape.php';

            break;

        case 'perfil':

            $daoArea = new daoArea();
            $areas = $daoArea->getAreas();

            include_once __DIR__."/../view/menu.php";
            include_once __DIR__."/../view/perfil.php";
            include_once __DIR__."/../view/rodape.php";
            break;

        case 'ranking':

            $daoAluno   = new DaoAluno();
            $alunos     = $daoAluno->getRanking();
            include_once __DIR__."/../view/menu.php";
            include_once __DIR__."/../view/ranking.php";
            include_once __DIR__."/../view/rodape.php";

            break;

        case'categorias':
            $ar_idarea = $_GET['area'];
            $daoCategoria = new DaoCategoria();

            $categorias   = $daoCategoria->getCategoriasByIdArea($ar_idarea);

            $areaDescricao= $_GET['areaDescricao'];

            include_once __DIR__."/../view/menu.php";
            include_once __DIR__."/../view/categorias.php";
            include_once __DIR__."/../view/rodape.php";
            break;
        case'':
            index();
            break;

    }