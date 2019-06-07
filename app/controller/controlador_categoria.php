<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 10/09/2018
 * Time: 16:04
 */
//Chamos os arquivos Login.php, dao_alternativa.php, dao_questao.php e dao_resposta.php
require_once __DIR__."/../model/Login.php";
////Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
login::isLogado();
require_once __DIR__."/../dao/dao_categoria.php";

if (isset($_GET['acao']) && !empty($_GET['acao'])) {
    $acao = $_GET['acao'];
}

switch ($acao){
    case 'cadastrarCategoria':
        $ca_idarea      = $_POST['ca_idarea'];
        $ca_descricao   = $_POST['ca_descricao'];

        $categoria = new Categoria(null, $ca_idarea, $ca_descricao);
        $daoCategoria = new DaoCategoria();
        $daoCategoria->cadastrarCategoria($categoria);
        header('Location:../view/painelAdministrador.php?requisicao=CategoriasCadastradas');
        break;
}
