<?php
/**
 * Created by PhpStorm.
 * User: Guilherme Cipriano
 * Date: 11/06/2018
 * Time: 15:15
 */
//Chamos os arquivos Login.php, dao_questao.php e dao_alternativa.php
require_once __DIR__."/../model/Login.php";
//Chamo minha classe Login e a funçao islogado() para verificar se o usuário está logado
Login::isLogado();
require_once __DIR__."/../dao/dao_questao.php";
require_once __DIR__."/../dao/dao_alternativa.php";
//Pegar as questões por categoria, meu parâmetro é o ID da categoria retorno será um Array
function getQuestaoCategoria($qu_idcategoria):Array
{
    //Variável $daoQuestao cria uma instância da Classe DaoQuestao
    $daoQuestao = new DaoQuestao();
    //Variável questoes recebe o retorno da função getQuestoesJogo chamada pela variável $daoQuestao onde o parâmetro é o ID da categoria
    //e o retorno é um Array do com valores do tipo Questao
    $questoes = $daoQuestao->getQuestoesJogo($qu_idcategoria, $_SESSION['us_idusuario']);
    //Retornar o Array $questoes com valores do tipo Questao
    return $questoes;
}

//Pegar as Alternativas que pertencem a uma questão, o parâemtro é o ID da questao e o retorno será um Array de Alternativas
function getAlternativas($qu_idquestao):Array
{
    //Variável $daoAlternativas cria ums instância da Classe DaoAlternativa
    $daoAlternativas = new DaoAlternativa();
    //Variável $alternativas recebe o retorno da função getAlternativas cahamada pela variável $daoAlternativas onde o parâmetro
    //é o ID da questão e o retorno é um Array com valores do tipo Alternativa
    $alternativas = $daoAlternativas->getAlternativas($qu_idquestao);
    //Retornar o Array $alternativas com valores do tipo Alternativa
    return $alternativas;
}

//Se minha c$_GET['ategoria'] está SETADA e é DIFERENTE de vazio
if(isset($_GET['categoria']) && !empty($_GET['categoria'])){
    //variável $categoria recebe $_GET['categoria']
    $categoria = $_GET['categoria'];
}
//Variável $questoes chama a função getQuestaoCategoria para receber as questões com aquele ID de categoria
$questoes = getQuestaoCategoria($categoria);
//Incluo o arquivo jogar.php

include('../view/jogar.php');

?>
