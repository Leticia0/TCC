<?php
include("cabecalho.php");
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../../assets/SemanticUI/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/login.css">

        <h2 id="login">Login</h2>
    <form class="ui form"><br>
       <p class="ui dividing header"></p>

        <div id="input" class="field">
            <label id="letra">E-mail</label>
            <div id="certo" class="two fields">
                <div class="field">
                    <input type="email" name="shipping[first-name]" placeholder="leticia@email.com">
                </div>

                <div id="senha" class="field">
                    <label id="letra">Senha</label>
                    <input type="password" name="shipping[last-name]" placeholder="********">
                </div>

                <br>
                <a id="kk" style="margin-left: 1%" href="cadastro.php">Ainda não é cadastrado? <strong>Cadastre-se aqui!</strong></a>
            </div>
        </div>

            <div id="botao">                
                <a href="index.php"><button class="ui red button">Cancelar</button>
                    <button class="ui green button" type="submit">Login</button>
            </a>                        
            </div>
        </form>



    <br><br>
    <br><br>
<footer>
    <?php include("rodape.php");?>
</footer>

</html>