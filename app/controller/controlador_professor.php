<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 10/04/2018
 * Time: 08:56
 */
//Chamo os arquivos dao_professor.php e Login.php
require_once __DIR__.'/../dao/dao_professor.php';
require_once __DIR__.'/../model/Login.php';
////Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
Login::isLogado();
//Cadastrar Professor, nenhum parâmetro requerido e retorno vazio
function cadastrarProfessor():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $us_nome           = $_POST['us_nome'];
    $us_email          = $_POST['us_email'];
    $us_senha           = password_hash($_POST['us_senha'], PASSWORD_DEFAULT);
    $us_datanascimento = $_POST['us_datanascimento'];
    $us_idtipo         = 2;
    $us_ativo          = 1;
    $pr_matricula      = $_POST['pr_matricula'];
    $pr_area           = $_POST['pr_area'];
    //Variável $professor recebe uma instância da Classe Professor, sendo seus parâmetros as variáveis criadas anteriormente
    $professor = new Professor(null, $us_nome, $us_email, $us_senha, $us_datanascimento, $us_idtipo, $us_ativo,null, $pr_matricula, $pr_area);
    //Variável $daoProfessor recebe uma instância da Classe DaoProfessor
    $daoProfessor = new DaoProfessor();
    //Variável $daoProfessor chama a função cadastrarProfessor() e o parâmetro passado é a variável $professor do tipo Professor
    $daoProfessor->cadastrarProfessor($professor);
}
//Editar Professor, nenhum parâmetro requerido e retorno vazio
function editarProfessor():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $us_idusuario      = $_POST['us_idusuario'];
    $us_nome           = $_POST['us_nome'];
    $us_email          = $_POST['us_email'];
    $us_senha          = $_POST['us_senha'];
    $us_datanascimento = $_POST['us_datanascimento'];
    $us_idtipo         = 2;
    $us_ativo          = $_POST['us_ativo'];
    $pr_matricula      = $_POST['pr_matricula'];
    $pr_area           = $_POST['pr_area'];
        //Variável $professor recebe uma instância da Classe Professor, sendo seus parâmetros as variáveis criadas anteriormente
    $professor = new Professor($us_idusuario, $us_nome, $us_email, $us_senha, $us_datanascimento, $us_idtipo, $us_ativo, $us_idusuario, $pr_matricula, $pr_area);
    //Variável $daoProfessor recebe uma instância da Classe DaoProfessor
    $daoProfessor = new DaoProfessor();
    //Variável $daoProfessor chama a função editarProfessor() e o parâmetro passado é a variável $professor do tipo Professor
    $daoProfessor->editarProfessor($professor);
}
//Excluir professor, nenhu parâmetro requerido e retorno vazio
function desativarProfessor():void
{
    //Variável $pr_idusuairo recebe por método GET o seguinte dado atribuído através da URL
    $pr_idusuario = $_GET['pr_idusuario'];
    //Variável $professor recebe uma instância da Classe DaoProfessor
    $professor = new DaoProfessor();
    //Variável $professor chama a função deletarProfessor() e é passado a variável $pr_idusuario como parâmetro
    $professor->desativarProfessor($pr_idusuario);

}
function ativarProfessor():void{
    $pr_idusuario = $_GET['pr_idusuario'];
    $professor = new DaoProfessor();
    $professor->ativarProfessor($pr_idusuario);
}

function promoverProfessor(){
    $pr_idusuario = $_GET['pr_idusuario'];
    $professor = new DaoProfessor();
    $professor->promoverProfessor($pr_idusuario);
}

function despromoverProfessor(){
    $pr_idusuario = $_GET['pr_idusuario'];
    $professor = new DaoProfessor();
    $professor->despromoverProfessor($pr_idusuario);
}


//Rotas. Se a minha variável $_GET['acao'] for DIFERENTE de vazia e está SETADA
if (!empty($_GET['acao']) && isset($_GET['acao'])) {
    //variável $acao recebe $_GET'acao']
    $acao = $_GET['acao'];
    switch ($acao){
        case 'cadastrarProfessor':
            //Chamo a função cadastrarProfessor()
            cadastrarProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case 'editarProfessor':
            //Chamo a função editarProfessor()
            editarProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case 'desativarProfessor':
            //Chamo a função desativarProfessor()
            desativarProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case 'ativarProfessor':
            //Chamo a função ativarProfessor()
            ativarProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case 'promoverProfessor':
            //Chamo a função ativarProfessor()
            promoverProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case 'despromoverProfessor':
            //Chamo a função ativarProfessor()
            despromoverProfessor();
            //Redireciono para o Painel do Adminitrados com os professores cadastrados
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');
            break;
        case '':
            header('Location: controlador_painel.php?requisicao=professoresCadastrados');

    }
}
