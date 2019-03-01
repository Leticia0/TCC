<?php
    include ("cabecalho.php");
?>

<html>
<head>
     <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
 
 <form class="ui form" method="post" action="usuario.php?acao=create">

 	 <center><h3>Encontre Restaurantes Próximos</h3></center>
    <p class="ui dividing header"></p>

   <div class="ui icon input" style="margin-left: 83%">
      <input type="text" placeholder="Pesquisar">
      <i class="sistrix icon"></i>
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
    </div>
</form>


    <div class="main ui container">

<div style="padding-left: 2%" id="animais">
    

     <div class="ui link cards" id="cards" align="center">

        <div class="card" id="cardsJogos">
            <div class="image">
                <a href="<#"><img class="ui fluid image" style="height: 290px; height: 190px" src="img/waffles.jpg"> </a>
                <p>Café da Manhã</p>
            </div> 
        </div>

        <div class="card" id="cardsJogos">

            <div class="image">
                <a href="<#"><img class="ui fluid image" style="height: 290px; height: 190px" src="img/waffles.jpg"> </a>
                <p>Comida Vegetariana</p>
            </div> 
       	  </div>
        </div>



       <div class="ui link cards" id="cards" align="center">

          <div class="card" id="cardsJogos">

            <div class="image">
                <a href="<#"><img class="ui fluid image" style="height: 290px; height: 190px" src="img/fast-food.jpg"> </a>
                <p>Fast Food</p>
            </div>

        </div>
         <div class="card" id="cardsJogos">

            <div class="image">
                <a href="<#"><img class="ui fluid image" style="height: 290px; height: 190px" src="img/waffles.jpg"> </a>
                <p>Café da Manhã</p>
            </div> 
        </div>
      </a>
      
</div></div></div>
</body>

<footer>
   
<?php include ("rodape.php");?>
</footer>

</html>

