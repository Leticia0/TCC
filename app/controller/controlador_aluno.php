<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 09/05/2018
 * Time: 14:36
 */
//Incluir arquivos dao_aluno.php e Login.php
require_once __DIR__.'/../dao/dao_aluno.php';
require_once __DIR__.'/../model/Login.php';
//Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
Login::isLogado();
//Function index  me leva para a página principal
function index(){
    include_once __DIR__.'/../view/inicioDisciplinas.php';
}
//Cadastrar aluno, nenhum parâmetro requerido e o retorno é vazio
function cadastrarAluno():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $us_nome            = $_POST['us_nome'];
    $us_email           = $_POST['us_email'];
    $us_senha           = password_hash($_POST['us_senha'], PASSWORD_DEFAULT);
    $us_datanascimento  = $_POST['us_datanascimento'];
    $us_idtipo          = 1;
    $us_ativo           = $_POST{'us_ativo'};
    $al_matricula       = $_POST['al_matricula'];
    $al_turma           = $_POST['al_turma'];
    $al_pontos          = 0;
    $al_nivel           = $_POST['al_nivel'];
    //Variável aluno recebe uma instância da Classe aluno sendo seus parâmetros as variáveis criadas anteriormente
    $aluno = new Aluno(null, $us_nome, $us_email, $us_senha, $us_datanascimento, $us_idtipo, $us_ativo,null, $al_matricula, $al_turma, $al_pontos, $al_nivel);
    //Variável daoProfessor recebe uma instância da Classe DaoProfessor
    $daoAluno = new DaoAluno();
    //Variável daProfessor chama a função cadastrarAluno(), onde o parâmetro é a variável $aluno do tipo Aluno
    $daoAluno->cadastrarAluno($aluno);

}
//Editar aluno, nenhum parâmetro requerido e o retorno é vazio
function editarAluno():void
{
    //Envio através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $us_idusuario       = $_POST['us_idusuario'];
    $us_nome            = $_POST['us_nome'];
    $us_email           = $_POST['us_email'];
    $us_senha           = $_POST['us_senha'];
    $us_datanascimento  = $_POST['us_datanascimento'];
    $us_idtipo          = 1;
    $us_ativo           = $_POST['us_ativo'];
    $al_matricula       = $_POST['al_matricula'];
    $al_turma           = $_POST['al_turma'];
    $al_pontos          = $_POST['al_pontos'];
    $al_nivel           = $_POST['al_nivel'];

    //Variável aluno recebe uma instância da Classe aluno sendo seus parâmetros as variáveis criadas anteriormente
    $aluno = new Aluno($us_idusuario, $us_nome, $us_email, $us_senha, $us_datanascimento, $us_idtipo, $us_ativo, $us_idusuario, $al_matricula, $al_turma, $al_pontos, $al_nivel);
    //daoProfessor recebr uma instância da Class DaoProfessor
    $daoAluno = new DaoAluno();
    //Variável $daoProfessor chamada a função editarAluno(), onde o parâmetro é a variável $aluno do tipo Aluno
    $daoAluno->editarAluno($aluno);

}

//Ativar Aluno, nenhum parâmetro requerido e o retorno é vazio
function ativarAluno():void
{
    //Variável $al_idusuairo recebe por método GET o seguinte dado atribuído através da URL
    $al_idusuario = $_GET['al_idusuario'];
    //$aluno recebe uma insância da classe DaoAluno
    $aluno = new DaoAluno();
    //Variável $aluno chama a função ativarAluno() e seu parâmetro é a variável $al_idusuario
    $aluno->ativarAluno($al_idusuario);

}

//Desativar Aluno, nenhum parâmetro requerido e o retorno é vazio
function desativarAluno():void
{
    //Variável $al_idusuairo recebe por método GET o seguinte dado atribuído através da URL
    $al_idusuario = $_GET['al_idusuario'];
    //$aluno recebe uma insância da classe DaoAluno
    $aluno = new DaoAluno();
    //Variável $aluno chama a função desativarAluno() e seu parâmetro é a variável $al_idusuario
    $aluno->desativarAluno($al_idusuario);

}

//Rotas. Se a $_GET['acaol estiver DIFERENTE de vazia e ela está SETADA
if (!empty($_GET['acao']) && isset($_GET['acao'])) {
    //variável $acao recebe $_GET'acao']
    $acao = $_GET['acao'];
    //Se minha $acao for igual a cadastrarAluno
    if ($acao == 'cadastrarAluno'){
        //Chamo a função cadastrarAluno()
        cadastrarAluno();
        //Redireciono para o Painel do Adminitrados com os alunos cadastrados
        header('Location: ../controller/controlador_painel.php?requisicao=alunosCadastrados');
        //Senão se minha $acao for igual a editarAluno
    }elseif($acao == 'editarAluno'){
        //Chamo a função editarAluno()
        editarAluno();
        //Redireciono para o Painel do Administrador com os alunos cadastrados
        header('Location: controlador_painel.php?requisicao=alunosCadastrados');
        //Senão, se minha $acao for igual a excluirAluno
    }elseif($acao == 'desativarAluno'){
        //Chamo a função excluirAluno()
        desativarAluno();
        //Redireciono para o Painel do Administrador com os alunos Cadastrados
        header('Location: ../controller/controlador_painel.php?requisicao=alunosCadastrados');
    }elseif($acao == 'ativarAluno'){
        //Chamo a função excluirAluno()
        ativarAluno();
        //Redireciono para o Painel do Administrador com os alunos Cadastrados
        header('Location: ../controller/controlador_painel.php?requisicao=alunosCadastrados');
    }
}
