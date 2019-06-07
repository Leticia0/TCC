<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 10/04/2018
 * Time: 08:56
 */
//Chamo o arquivo Login.php
require_once __DIR__.'/../model/login.php';
//A variável $login recebe uma instância da Classe Login
$login = new Login();
//Se minha $_GET['acao'] for igual a logar
if ($_GET['acao'] == "logar"){
    //A variável $login chama a função logar() da minha Classe Login e os parâmetros passados são o email e a senha por método POST
    $login->logar($_POST['us_email'], $_POST['us_senha']);
    $login->getTipoUsuario($_SESSION['usuario_id']);
    //Se minha $_GET['acao'] for igual a sair
} elseif ($_GET['acao'] == "sair"){
    //A variável $login chama minah função deslogar() e nenhum parâmetro é requerido
    $login->deslogar();
    //E então redireciono para a página de login para o login ser realizado novamente
    header('Location:../view/login.php');
}