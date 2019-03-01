<?php
include ("cabecalho.php");
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="semantic.min.css">
    <link rel="stylesheet" type="text/css" href="cabecalho.css">

    <form class="ui form"><br>
        <h2 style="margin-left: 30%" id="login">Login</h2>
       <p class="ui dividing header"></p>
        <div style="padding-top: 5%" id="login" class="field">
            <label style="margin-left: 1%">E-mail</label>
            <div style="display: block" class="two fields">
                <div class="field">
                    <input type="email" name="shipping[first-name]" placeholder="leticia@email.com">
                </div>
                <div style="padding-top: 0.6%" class="field">
                    <label style="margin-left: 1%">Senha</label>
                    <input type="password" name="shipping[last-name]" placeholder="********">
                </div>
                <br>
                <a id="kk" style="margin-left: 1%" href="cadastro.php">Ainda não é cadastrado? <strong>Cadastre-se aqui!</strong></a>
            </div>

                <a href="index.php"><button class="ui red button">Cancelar</button>
                    <button class="ui green button" type="submit">Login</button>
