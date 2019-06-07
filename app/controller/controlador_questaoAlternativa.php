<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 22/05/2018
 * Time: 08:46

 */
//Chamos os arquivos Login.php, dao_alternativa.php, dao_questao.php e dao_resposta.php
require_once __DIR__."/../model/Login.php";
////Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
login::isLogado();
require_once __DIR__."/../dao/dao_alternativa.php";
require_once __DIR__.'/../dao/dao_questao.php';
require_once __DIR__.'/../dao/dao_resposta.php';
require_once __DIR__.'/../dao/dao_alternativa.php';
require_once __DIR__.'/../dao/dao_aluno.php';
require_once __DIR__.'/../dao/dao_categoria.php';

//Pegar a questão, nenhum parâmetro requerido e o seu retorno será uma Classe do tipo Questão
function getQuestao(): Questao
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $qu_idarea        = $_POST['qu_idarea'];
    $qu_ano           = $_POST['qu_ano'];
    $qu_idnivel       = $_POST['qu_idnivel'];
    $qu_idusuario     = $_POST['qu_idusuario'];
    $qu_textoquestao  = $_POST['qu_textoquestao'];
    $qu_pontosquestao = $_POST['qu_idnivel'];
    $qu_ativo         = $_POST['qu_ativo'];
    //Variável $questao recebe uma instância da Classe Questao, sendo seus parâmetros as variáveis criadas anteriormente
    $questao = new Questao(null, $qu_idarea, $qu_ano, $qu_idnivel, $qu_idusuario, $qu_pontosquestao, $qu_textoquestao, $qu_ativo);
    //Faço o retorno da variável $questao para ser utilizada posteriormente
    return $questao;
}
//Cadastrar questão, nenhum parâmetro requerido e o retorno é vazio
function cadastrarQuestao():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $qu_idcategoria     = $_POST['qu_idcategoria'];
    $qu_ano             = $_POST['qu_ano'];
    $qu_idnivel         = $_POST['qu_idnivel'];
    $qu_idusuario       = $_POST['qu_idusuario'];
    $qu_textoquestao    = $_POST['qu_textoquestao'];
    $qu_pontosquestao   = $_POST['qu_idnivel']*5;
    $qu_ativo           = 1;
    //Variável $questao recebe uma instância da Classe Questao, sendo seus parâmetros as variáveis criadas anteriormente
    $questao = new Questao(null, $qu_idcategoria, $qu_ano, $qu_idnivel, $qu_idusuario, $qu_pontosquestao, $qu_textoquestao, $qu_ativo);
    //Variável $daoQuestao recebe uma instância da Classe DaoQuestao
    $daoQuestao = new DaoQuestao();
    //Variável $daoQuestao chama a função cadastrarQuestao() e o parâmetro passado é a variável $questao do tipo Questao
    $daoQuestao->cadastrarQuestao($questao);
}
//Editar Questão, nenhum parâmetro requerido e o retorno é vazio
function editarQuestao():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $qu_idquestao         = $_POST['qu_idquestao'];
    $qu_idcategoria       = $_POST['qu_idcategoria'];
    $qu_ano               = $_POST['qu_ano'];
    $qu_idnivel           = $_POST['qu_idnivel'];
    $qu_idusuario         = $_POST['qu_idusuario'];
    $qu_pontosquestao     = $_POST['qu_idnivel']*5;
    $qu_textoquestao      = $_POST['qu_textoquestao'];
    $qu_ativo             = $_POST['qu_ativo'];
    //Variável $questao recebe uma instância da Classe Questao, sendo seus parâmetros as variáveis criadas anteriormente
    $questao = new Questao($qu_idquestao, $qu_idcategoria, $qu_ano, $qu_idnivel, $qu_idusuario, $qu_pontosquestao, $qu_textoquestao, $qu_ativo);
    //Variável $daoQuestao recebe uma instância da Classe DaoQuestao
    $daoQuestao = new DaoQuestao();
    //Variável $daoQuestao chama a função editarQuestao() e o parâmetro passado é a variável $questao do tipo Questao
    $daoQuestao->editarQuestao($questao);
}
//desativar questão, nenhum parâmetro requerido e o retorno é vazio
function desativarQuestao():void
{
    //Variável $qu_idquestao recebe por método GET o seguinte dado atribuído através da URL
    $qu_idquestao = $_GET['qu_idquestao'];
    //Variável $questao recebe uma instância da Classe DaoQuestao
    $questao = new DaoQuestao();
    //Variável $questao chama a função desativarQuestao() e é passado a variável $qu_idquestao como parâmetro
    $questao->desativarQuestao($qu_idquestao);
}
//ativar questão, nenhym parâmetro requerido e o retorno é vazio
function ativarQuestao():void
{
    //Variável $qu_idquestao recebe por método GET o seguinte dado atribuído através da URL
    $qu_idquestao = $_GET['qu_idquestao'];
    //Variável $questao recebe uma instância da Classe DaoQuestao
    $questao = new DaoQuestao();
    //Variável $questao chama a função ativarQuestao() e é passado a variável $qu_idquestao como parâmetro
    $questao->ativarQuestao($qu_idquestao);
}
//Pegar as Alternativas, nenhum parâmetro requerido e o retorno será um Array
function getAlternativas():Array
{
    //A variável $daoQuestao recebe uma instância da classe DaoQuestao
    $daoQuestao = new DaoQuestao();
    //A variável qu_idquestao chama a função getLastQuestao(); da classe DaoQuestao para pegar o ID da última questão cadastrada
    $qu_idquestao = $daoQuestao->getLastQuestao();
    //Recebo atavés de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $al_texto     = $_POST['al_texto'];
    $al_correta   = $_POST['al_correta'];
    //Variável $al_idquestao recebe a variável qu_idquestao, que é o ID da última questão cadastrada
    $al_idquestao = $qu_idquestao;
    //um Array vazio com o nome de $alternativas é criado
    $alternativas = [];
    //Variável $i recebe 0, enquanto a variável $i for menor do que a quantidade de textos que eu tenho, soma-se 1 à variável $i
    for ($i = 0; $i < count($al_texto); $i++) {
        //Variável $encontrou procura no array em qual posição, sendo baseada na variável $i, está SETADA a variável $al_correta
        $encontrou = in_array($i, $al_correta);
        //Variável $alternativas[] vai receber uma nova alternativa, os parâmetros requeridos são os dados recebidos anteriormente
        //por método POST
        $alternativas[] = new Alternativa(null, $al_texto[$i], $al_idquestao, $encontrou);
    }
    //Ao terminar o loop, retorno o Array $alternativas
    return $alternativas;
}
//Cadastrar alternativas, nenhum parâmetro requerido e o retorno será vazio
function cadastrarAlternativas():void
{
    //Variável $alternativas chama a função getAlternativas()
    $alternativas = getAlternativas();
    //Variável daoAlternativa instancia a Classe DaoAlternativa()
    $daoAlternativa = new DaoAlternativa();
    //Para cada $Alternativas como $Alternativa
    foreach ($alternativas as $alternativa) {
        //A variável $daoAlternativa chama a função cadastrarAlternativa sendo o parâmetro a variavel $alternativa do tipo Alternativa
        $daoAlternativa->cadastrarAlternativa($alternativa);
    }
}
//Editar alternativas, nenhum parâmetro requerido e o retorno será vazio
function editarAlternativas():void
{
    //Recebo através de um método POST os seguintes dados e atribuo eles a uma variável, por questões de organização
    $al_idalternativa = $_POST['al_idalternativa'];
    $al_texto         = $_POST['al_texto'];
    $al_correta       = $_POST['al_correta'];
    $al_idquestao     = $_POST['qu_idquestao'];

    //uUm array vazio com o nome de $alternativas é criado
    $alternativas = [];
    //A variável $i recebe 0, enquanto variável $i for menor que a quantidade de textos que eu tenho, soma-se 1 à variável $i
    for ($i = 0; $i < count($al_texto); $i++) {
        //Variável $encontrou chama a função in_array() e recebe os parâmetros as variáveis $al_idalternativa[$i],
        //ou seja, o ID da minha alternativa na posição $i do meu Array que foi enviado através do método POST
        //e a variável al_correta apenas diz se a altrnativa é a correta ou não, então
        //Procure para mim no Array se existe o valor da variável $al_correta  na variável $al_idalternativa no valro da variável $i
        $encontrou = in_array($al_idalternativa[$i], $al_correta);
        //Array $alternativas recebe a instância da Classe Alternativa sendo os parâmetros passados os recebidos anteriormente
        $alternativas[] = new Alternativa($al_idalternativa[$i], $al_texto[$i], $al_idquestao, $encontrou);
    }
    //Variável $daoAltenrativa recebe uma instância da Classe DaoAlternativa
    $daoAlternativa = new DaoAlternativa();
    //Para cada $alternativas (meu array) com o nome de $alternativa
    foreach ($alternativas as $alternativa) {
        //Variável $daoAlternativa chama a função editarAlternativa() sendo o parâmetro passado uma Classe do tipo Alternativa
        $daoAlternativa->editarAlternativa($alternativa);
    }
}
//Excluir Alternativas, nenhum parâmetro requerido e o retorno é vazio
function excluirAlternativas():void
{
    //Recebo o id da minha qustão por método GET e atribuo ela à variável $qu_idquestao
    $qu_idquestao = $_GET['qu_idquestao'];
    //Variável daoAlternativa recebe uma intância da Classe DaoAlternativa
    $daoAlternativa = new DaoAlternativa();
    //Variável daoAlternativa chama a função excluirAlternativa() sendo passado como parâmetro o ID da Questão
    $daoAlternativa->excluirAlternativas($qu_idquestao);
}
//Verificar a Alternativa Correta, o parâmetro passado é o id da questão e meu retorno é se a questão é correta ou não
function verificaCorreta($qu_idquestao):int{
    //Variável $daoAlternativa cria ums instância da Classe DaoAlternativa
    $daoAlternativa = new DaoAlternativa();
    //Variável $daoAlternativa chama a função VerificaAlternativa, sendo o parâmetro passado o ID da questão
    //e o retorno é o ID da alternativa correta da questão respondida
    //E o dado é retornado
    return $daoAlternativa->verificaAlternativa($qu_idquestao);
}
//Cadastrar Resposta, parâmetros $resposta e $questao e o retorno será vazio
function cadastrarResposta($resposta, $questao):void{
    //Variável $respota cria uma inst&wancia da Classe Resposta
    $resposta = new Resposta(null, $_SESSION['us_idusuario'],$resposta,null, $questao );
    //Variável $daoResposta cria uma instância da Classe DaoResposta
    $daoResposta = new DaoResposta();
    //Variável $daoResposta chama a função cadastrarResposta(), sendo o parâmetro passado a variável $resposta do tipo Resposta
    $daoResposta->cadastrarResposta($resposta);
}
//Inserir os pontos da questão para um aluno quando a questão estiver correta
function inserirPontosAluno($al_idusuario, $qu_pontosquestao):void{
    //Variável $daoAluno cria uma instância da Classe DaoAluno
    $daoAluno = new DaoAluno();
    //Chamo a função inserirPontos() da classe DaoAluno
    $daoAluno->inserirPontos($al_idusuario, $qu_pontosquestao);
}
//Função para verificar a questão em tempo real para o usuário
function printarJson($respostaCorreta, $resposta, $pontos):void{
    //Retorne estes dados em formato JSON
    header('Content-Type: application/json');
    echo json_encode(array('correta' => $respostaCorreta, 'resposta'=> $resposta, 'pontos'=>$pontos, 'status'=>'correta'));
    //Se minha $resposta não for igual à $resposta correta
}
//Rotas. Se a minha variável $_GET['acao'] for DIFERENTE de vazia e está SETADA
function getCategoriaByIdArea($ar_idarea){
    $daoCategoria = new DaoCategoria();
    return $daoCategoria->getCategoriasByIdArea($ar_idarea);

}

if (isset($_GET['acao']) && !empty($_GET['acao'])) {
    //variável $acao recebe $_GET'acao']
    $acao = $_GET['acao'];
}
//Se minha variável $_GET['questao'] está setada
    if (isset($_GET['questao'])) {
        //Variável $questao recebe $_GET['questao']
        $questao = $_GET['questao'];
        //Variável $resposta recebe $_GET['resposta']
        $resposta = $_GET['resposta'];
        //Variável $pontos recebe $_GET['pontos']
        $pontos = $_GET['pontos'];
    }

//Se minha $acao for igual a cadastrarQuestaoAlternativa

    switch ($acao) {
        case 'cadastrarQuestaoAlternativa':
            //Chamo a função cadastrarQuestao()
            cadastrarQuestao();
            //Chamo a função cadastrarAlternativa()
            cadastrarAlternativas();
            //Redireciono para o Painel do Administrador com as questãoes cadastradas
            header('Location: controlador_painel.php?requisicao=questoesCadastradas');
            break;
        //Senão, se minha $acao for igual a editarQuestaoAlternativa
        case 'editarQuestaoAlternativa':
            //Chamo a função para editarQuestao()
            editarQuestao();
            //Chamo a função editarAlternativas()
            editarAlternativas();
            //Redireciono para o Painel do Administrador com as questòes cadastradas
            header('Location: ../controller/controlador_painel.php?requisicao=questoesCadastradas');
            //Senão, se minha $acao for igual a excluirQuestaoAlternativa
            break;
        case 'desativarQuestaoAlternativa':
            //Chamo a função desativarQuestao()
            desativarQuestao();
            //Redireciono para o Painel do Administrados com as questões cadastradas
            header('Location: ../controller/controlador_painel.php?requisicao=questoesCadastradas');
            break;
        case 'ativarQuestaoAlternativa':
            ativarQuestao();
            header('Location: controlador_painel.php?requisicao=questoesCadastradas');
            break;
        case 'verificaCorreta':
            //Variável $respostaCorreta recebe minha função verificaCorreta() para saber qual é a alternativa correta
            $respostaCorreta = verificaCorreta($questao);
            //Chamo a função cadastrarResposta() para cadastrar a resposta que o usuário deu à pergunta
            cadastrarResposta($resposta, $questao);
            //Se a minha variável $resposta correta for igual à $resposta do usuário
            if ($respostaCorreta == $resposta) {

                printarJson($respostaCorreta, $resposta, $pontos);

            } else {
                //Retorne estes dados em formato JSon
                header('Content-Type: application/json');
                echo json_encode(array('correta' => $respostaCorreta, 'resposta' => $resposta, 'pontos' => $pontos, 'status' => 'errada'));
            }
            break;
            //Caso for inserir pontos, insira os pontos
        case 'inserirPontos':
            inserirPontosAluno($_SESSION['us_idusuario'], $_GET['pontos'] );
            break;
        case 'getCategoriasByArea':


            $qu_idArea = $_GET['qu_idArea'];
            $listaCategorias = getCategoriaByIdArea($qu_idArea);
//            print_r($listaCategorias);

            $listaCategorias_json = [];
            foreach ($listaCategorias as $categoria){

                $categoria_json['ca_idcategoria'] = $categoria->getcaIdcategoria();
                $categoria_json['ca_idarea'] = $categoria->getcaIdarea();
                $categoria_json['ca_descricao'] = $categoria->getcaDescricao();
                $listaCategorias_json[] = $categoria_json;
            }

            echo json_encode($listaCategorias_json, true);

            break;
    }