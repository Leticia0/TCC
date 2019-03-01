<?php
    include ("cabecalho.php");
?>

<html>
<head>
<title>Cadastre Seu Restaurante</title>
</head>
<body>
<form class="ui form" method="post" action="usuario.php?acao=create">

    <center><h3>Cadastre Seu Restaurante</h3></center>
    <p class="ui dividing header"></p>

    <div style="margin-left: 4%" class="field">
        <label>Nome do Restaurante</label>
        <div class="fields">
            <div class="field">
                <input type="text" name="shipping[first-name]" placeholder="Restaurante Biff">
            </div>
        </div>
    </div>
    
    <div style="margin-left: 4%" class="field">
        <label>Endereço</label>
        <div class="fields">
            <div class="field">
                <input type="text" name="shipping[address]" placeholder="Rua Ottokar Doerfell">
          </div>
          

        </div>
    </div>

 <div style="margin-left: 4%" class="field">
        <label>N°</label>
        <div class="fields">
            <div class="field">
                <input type="number" name="shipping[number]" placeholder="47">
            </div>
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
        </div>
        <div style="margin-left: 4%" class="two fields">
        <div class="field">
            <label>Cidade</label>
            <select class="ui fluid dropdown">
                <option value="">--</option>
                <option value="AR">Araquari</option>
                <option value="BBS">Balneário Barra do Sul</option>
                <option value="JLLE">Joinville</option>
                <option value="SFS">São Francisco do Sul</option>
            </select>
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
