<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 07/11/2018
 * Time: 08:17
 **/
//Chamo o arquivo Login.php
require_once __DIR__.'/../model/Login.php';

//Dados do professor
require_once __DIR__ . "/../dao/dao_professor.php";
require_once __DIR__ . "/../dao/dao_area.php";

//Dados do aluno
require_once __DIR__."/../dao/dao_aluno.php";
require_once __DIR__."/../dao/dao_turma.php";

//Dados da questão
require_once __DIR__."/../dao/dao_questao.php";
require_once __DIR__."/../dao/dao_nivel.php";

require_once __DIR__."/../dao/dao_resposta.php";

require_once __DIR__."/../dao/dao_categoria.php";
require_once __DIR__."/../dao/dao_alternativa.php";





//A variável $login recebe uma instância da Classe Login
login::isLogado();
$login = new Login();

$us_idtipo = $login->getTipoUsuario($_SESSION['us_idusuario']);

//Funções para buscar um professor baseado no que foi inserido no campo de busca
function buscarProfessorPorNome($pr_nome): Array
{

    $daoProfessor = new DaoProfessor();
    $professores = $daoProfessor->getProfessorPorNome($pr_nome);
    return $professores;
}
//Função para pegar o nome do Professor baseado no ID do professor
function getNomeProfessor($pr_idusuario): string
{
    $daoProfessor = new DaoProfessor();
    $dadosProfessor = $daoProfessor->getProfessor($pr_idusuario);

    $professor = $dadosProfessor->getUsNome();
    return $professor;
}
//Função para pegar a descrição da área baseado no ID da área
function getAreaDescricao($ar_idarea): string
{
    $daoArea = new DaoArea();
    $dadosNivel = $daoArea->getArea($ar_idarea);
    $area = $dadosNivel->getArDescricao();

    return $area;
}


//Função para pegar a descrição da turma baseado no ID da turma
function getTurmaDescricao($tu_idturma):string{
    $daoTurma   = new DaoTurma();
    $dadosturma = $daoTurma->getTurma($tu_idturma);
    $turma      = $dadosturma->getTuDescricao();
    return $turma;
}
//Função para pegar o ano escolar da turma baseado no ID da turma
function getTurmaAnoEscolar($tu_idturma){
    $daoTurma   = new DaoTurma();
    $dadosturma = $daoTurma->getTurma($tu_idturma);
    $turma      = $dadosturma->getTuAnoescolar();
    return $turma;
}
//Função para pegar um aluno beseado no que foi inserido no campo de busca
function buscarAlunoPorNome($al_nome):Array{
    $daoAluno = new DaoAluno();
    $alunos   = $daoAluno->getAlunoPorNome($al_nome);
    return $alunos;
}


//Função para pegar uma questão baseado no que foi inserido no campo de busca
function buscarQuestaoPorNome($qu_textoQuestao):Array{

    $daoQuestao = new DaoQuestao();
    $questoes        = $daoQuestao->getQuestaoPorNome($qu_textoQuestao);
    return $questoes;
}
//Função para pegar a descricão do nível baseado no ID do nível
function getNivelDescricao($ni_nivel):string{
    $daoNivel = new DaoNivel();
    $dadosNivel = $daoNivel->getNivel($ni_nivel);
    $nivel = $dadosNivel->getNiDescricao();

    return $nivel;
}


function getQuantidadeAlunosTurma($tu_idturma){
    $daoAluno = new DaoAluno();
    return $daoAluno->getQuantidadeAlunosTurma($tu_idturma);
}
function getAlunosTurma($tu_idturma){
    $daoTurma = new daoTurma();
    return $daoTurma->getAlunosTurma($tu_idturma);
}
function getTurma($tu_idturma){
    $daoTurma = new DaoTurma();
    return $daoTurma->getTurma($tu_idturma);
}

function getRespostas($al_idusuario){
    $daoRespostas = new DaoResposta();
    return $daoRespostas->getRespostas($al_idusuario);

}
//Função para pegar o nome do aluno baseado no ID do aluno
function getNomeAluno($al_idusuario){
    $daoAluno = new DaoAluno();
    $aluno    = $daoAluno->getAluno($al_idusuario);
    return $aluno->getUsNome();
}
//Função para pegar o Texto da questão baseado no ID da questão
function getTextoQuestao($qu_idquestao){
    $daoQuestao = new DaoQuestao();
    $questao    = $daoQuestao->getQuestao($qu_idquestao);

    return $questao->getQuTextoquestao();
}
//Função para pegar o texto da alternativa que o aluno respondeu baseado no ID da alternativa
function getTextoAlternativa($al_idAlternativa)
{
    $daoAlternativa = new DaoAlternativa();
    $alternativa    = $daoAlternativa->getAlternativa($al_idAlternativa);
    return $alternativa->getAlTexto();
}
//Função para verificar se a alternartiva é correta ou não baseada no ID da alternativa
function getAlCorreta($al_idAlternativa)
{
    $daoAlternativa = new DaoAlternativa();
    $alternativa    = $daoAlternativa->getAlternativa($al_idAlternativa);
    $correta        = $alternativa->getAlCorreta();
    if ($correta == 1){
        return "Correta";
    } else{
        return "Incorreta";
    }
}
//Função para pegar a alternativa correta da questão respondida
function getAlternativaCorreta($qu_idquestao){
    $daoAlternativa = new DaoAlternativa();
    $idAlternativa  = $daoAlternativa->verificaAlternativa($qu_idquestao);
    $alternativa    = $daoAlternativa->getAlternativa($idAlternativa);

    return $alternativa->getAlTexto();

}

if (isset($_GET['requisicao']) && !empty($_GET['requisicao'])) {
    $requisicao = $_GET['requisicao'];
}

switch ($us_idtipo){
    case 'Aluno':
        header('Location: controlador_usuario.php?acao=index');
        break;
    case 'Administrador' OR 'Professor':
        switch ($requisicao) {
            case "painelAdministrador":
                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/painelAdministrador.php";
                include_once __DIR__."/../view/rodape.php";
                break;
            case "professoresCadastrados":

                if (isset($_GET['pr_nome']) && !empty($_GET{'pr_nome'})) {
                    $pr_nome = $_GET['pr_nome'];
                }

                if(isset($pr_nome) && !empty($pr_nome)){
                    $professores = buscarProfessorPorNome($pr_nome);

                } else {
                    $daoProfessor = new DaoProfessor();
                    $professores  = $daoProfessor->getProfessores();
                }

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/professoresCadastrados.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "alunosCadastrados":

                if (isset($_GET['al_nome']) && !empty($_GET{'al_nome'})) {
                    $al_nome = $_GET['al_nome'];
                }

                if (isset($al_nome) && !empty($al_nome)){
                    $alunos = buscarAlunoPorNome($al_nome);

                } else {
                    $daoAluno = new DaoAluno();
                    $alunos = $daoAluno->getAlunos();
                }
                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/alunosCadastrados.php";
                include_once __DIR__."/../view/rodape.php";

                break;
            case "questoesCadastradas":

                //O arquivo dao_professor se faz necessário para as questões também

                if (isset($_GET['qu_textoquestao']) && !empty($_GET['qu_textoquestao'])) {
                    $qu_textoQuestao = $_GET['qu_textoquestao'];
                }if (isset($qu_textoQuestao) && !empty($qu_textoQuestao)){
                $questoes = buscarQuestaoPorNome($qu_textoQuestao);

            } else {
                $daoQuestao = new DaoQuestao();
                $questoes   = $daoQuestao->getQuestoes();
            }

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/questoesCadastradas.php";
                include_once __DIR__."/../view/rodape.php";
                break;

            case "turmasCadastradas":

                $daoTurma = new DaoTurma();
                $turmas = $daoTurma->getTurmas();

                if (isset($_GET['acao']) && !empty($_GET['acao'])) {
                    $acao = $_GET['acao'];
                }

                if (isset($_GET['tu_idturma']) && !empty($_GET['tu_idturma'])){
                    $turma = $_GET['tu_idturma'];
                }

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/turmasCadastradas.php";
                include_once __DIR__."/../view/rodape.php";

                break;


            case "visualizarAlunos":

                if (isset($_GET['acao']) && !empty($_GET['acao'])) {
                    $acao = $_GET['acao'];
                }

                if (isset($_GET['tu_idturma']) && !empty($_GET['tu_idturma'])){
                    $turma = $_GET['tu_idturma'];
                }

                $daoTurma = new DaoTurma();
                $alunos = $daoTurma->getAlunosTurma($turma);
                $turma    = $daoTurma->getTurma($turma);

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/visualizarAlunos.php";
                include_once __DIR__."/../view/rodape.php";
                break;

            case "visualizarRespostasAluno":
                if (isset($_GET['acao']) && !empty($_GET['acao'])) {
                    $acao = $_GET['acao'];
                }

                $al_idusuario = $_GET['al_idusuario'];
//                $tu_idturma   = $_GET['tu_idturma'];

                $daoResposta = new DaoResposta();
                $respostas   = $daoResposta->getRespostas($al_idusuario);

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/respostasCadastradas.php";
                include_once __DIR__."/../view/rodape.php";

                break;


            case "cadastrarAluno":

                //Pegar as áreas para cadastro da pergunta e do professor
                $daoArea = new DaoArea();
                $areas   = $daoArea->getAreas();
                //Pegar os níveis disponívels para o cadastro da pergunta
                $daoNivel = new DaoNivel();
                $niveis   = $daoNivel->getNiveis();
                //Pegar as categorias.css para o cadastro da pergunta
                $daoCategoria = new DaoCategoria();
                $categorias   = $daoCategoria->getCategorias();
                //Pegar as turmas para o cadastro do aluno
                $daoTurma = new DaoTurma();
                $turmas   = $daoTurma->getTurmas();

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/cadastroAluno.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "cadastrarProfessor":
                //Pegar as áreas para cadastro do professor
                $daoArea = new DaoArea();
                $areas   = $daoArea->getAreas();

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/cadastrarProfessor.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "cadastrarQuestao":
                //Pegar as áreas para cadastro da pergunta
                $daoArea = new DaoArea();
                $areas   = $daoArea->getAreas();
                //Pegar os níveis disponívels para o cadastro da pergunta
                $daoNivel = new DaoNivel();
                $niveis   = $daoNivel->getNiveis();
                //Pegar as categorias para o cadastro da pergunta
                $daoCategoria = new DaoCategoria();
                $categorias   = $daoCategoria->getCategorias();

                $qu_idusuario = $_SESSION['us_idusuario'];

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/cadastrarQuestao.php";
                include_once __DIR__."/../view/rodape.php";
                break;

            case "cadastrarCategoria":

                $daoArea = new DaoArea();
                $areas   = $daoArea->getAreas();

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/cadastrarCategoria.php";
                include_once __DIR__."/../view/rodape.php";
                break;

            case "cadastrarTurma":

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/cadastrarTurma.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "editarAluno":

                $al_idusuario = $_GET['al_idusuario'];
                $daoAluno = new DaoAluno();
                $aluno    = $daoAluno->getAluno($al_idusuario);

                $daoTurma = new DaoTurma();
                $turmas   = $daoTurma->getTurmas();
                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/editarAluno.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "editarProfessor":
                $daoArea = new DaoArea();
                $areas   = $daoArea->getAreas();
                $pr_idusuario = $_GET['pr_idusuario'];
                $daoProfessor = new DaoProfessor();
                $professor    = $daoProfessor->getProfessor($pr_idusuario);

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/editarProfessor.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "editarQuestaoAlternativa":

                $qu_idquestao    = $_GET['qu_idquestao'];
                //Pegar a questão
                $daoQuestao      = new DaoQuestao();
                $questao         = $daoQuestao->getQuestao($qu_idquestao);
                //Pegar os níveis disponívels para a edição da pergunta
                $daoNivel        = new DaoNivel();
                $niveis          = $daoNivel->getNiveis();
                //Pegar as categorias.css para a edição da pergunta
                $daoCategoria    = new DaoCategoria();
                $categorias      = $daoCategoria->getCategorias();
                //Pegar o ID da CATEGORIA de onde está a pergunta e pegar a ÁREA da qual essa CATEGORIA pertence
                $idCategoria     = $questao->getQuIdcategoria();
                $idAreaCategoria = $daoCategoria->getIdAreaCategoria($idCategoria);
                //Pegar as áreas
                $daoArea         = new DaoArea();
                $areas           = $daoArea->getAreas();
                //Pegar as Alternativas
                $daoAlternativa  = new DaoAlternativa();
                $alternativas    = $daoAlternativa->getAlternativas($qu_idquestao);

                include_once __DIR__."/../view/menu.php";
                include_once __DIR__."/../view/editarQuestaoAlternativa.php";
                include_once __DIR__."/../view/rodape.php";

                break;

            case "this":
                echo "Do this";
                break;
        }

        break;

    case '':

        switch ($requisicao) {
            case "cadastrarAluno":
                //Pegar as áreas para cadastro da pergunta e do professor
                $daoArea = new DaoArea();
                $areas = $daoArea->getAreas();
                //Pegar os níveis disponívels para o cadastro da pergunta
                $daoNivel = new DaoNivel();
                $niveis = $daoNivel->getNiveis();
                //Pegar as categorias.css para o cadastro da pergunta
                $daoCategoria = new DaoCategoria();
                $categorias = $daoCategoria->getCategorias();
                //Pegar as turmas para o cadastro do aluno
                $daoTurma = new DaoTurma();
                $turmas = $daoTurma->getTurmas();

                include_once __DIR__ . "/../view/menu.php";
                include_once __DIR__ . "/../view/cadastroAluno.php";

                break;
        }
        break;
}

//Rotas
