<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 27/04/2018
 * Time: 16:04
 */

require_once __DIR__.'/../database/conexao.php';
session_start();

class Login {

    private $conexao = null;

    function __construct() {

        $this->conexao = Conexao::getConexao();

    }

    public function logar($email, $senha){

        $sql = ("SELECT us_idusuario, us_senha FROM usuario WHERE us_email = '$email'");
        $usuario = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

        //if para us_senha

        if (password_verify($senha, $usuario['us_senha'])){
            $_SESSION['us_idusuario'] = $usuario['us_idusuario'];

            $us_idtipo = $this->getTipoUsuario($_SESSION['us_idusuario']);

            if ($us_idtipo === 'Administrador' OR $us_idtipo === 'Professor'){
                header("Location: ../controller/controlador_painel.php?requisicao=painelAdministrador");
            }elseif ($us_idtipo === 'Aluno'){
                header("Location: ../controller/controlador_usuario.php?acao=index");
            }
        }else {
            header('Location: ../view/login.php?mensagem=Usuário ou Senha Incorretos!');
        }

    }

    public static function isLogado()
    {

        if (!isset($_SESSION['us_idusuario'])) {
            header("Location: ../view/login.php");


        } else {

        }
    }

    public function getTipoUsuario($us_idusuario){
        $sql = ("SELECT us_idusuario, us_idtipo, tu_descricao FROM usuario, tipo_usuario WHERE us_idusuario = $us_idusuario AND usuario.us_idtipo = tipo_usuario.tu_id");
        $usuario = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);
            return $_SESSION['usuario_tipo'] = $usuario['tu_descricao'];

    }
    public function deslogar(){

        session_destroy();


    }
}