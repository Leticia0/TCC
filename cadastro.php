<?php
    include ("cabecalho.php");
?>

<html>
<head>
<title>Cadastre-se</title>
</head>
<body>
<form class="ui form" method="post" action="usuario.php?acao=create">

    <center><h3>Cadastre-se</h3></center>
    <p class="ui dividing header"></p>


    <div style="margin-left: 4%" class="field">
        <label>Nome</label>
        <div class="two fields">
            <div class="field">
                <input type="text" name="shipping[first-name]" placeholder="Leticia">
            </div>
            <div class="field">
                <input type="text" name="shipping[last-name]" placeholder="Santos">
            </div>
        </div>
    </div>
    
    <div style="margin-left: 4%" class="field">
        <label>Endereço de E-mail</label>
        <div class="fields">
            <div class="twelve wide field">
                <input type="text" name="shipping[address]" placeholder="leticia@email.com">
            </div>

        </div>
    </div>
    <div style="margin-left: 4%" class="two fields">
        <div class="field">
            <label>Estado</label>
            <select class="ui fluid dropdown">
                <option value="">--</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Parnambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>
        <div class="field">
    </div>


    </div>
    <div  style="margin-left: 4%" class="fields">

        <div class="six wide field">
            <label>Data de Nascimento</label>
            <div class="two fields">
                <div class="field">
                    <select class="ui fluid search dropdown" name="card[expire-month]">
                        <option value="">Mês</option>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
                </div>
                <div class="field">
                    <input type="number" maxlength="4" placeholder="Ano">
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
    <div class="ui segment">
        <div class="field">
            <div style="margin-left: 4%" class="ui toggle checkbox">
                <input type="checkbox" name="gift" tabindex="0" class="hidden">
                <label>Receber informações no e-mail</label>
            </div>
        </div>
    </div>

        <a href="index.php"><button style="margin-left: 4%" class="ui red button">Cancelar</button>
         <button class="ui green button" type="submit">Cadastrar</button>

</form>
</body>
</html>
