<?php
	include("cabecalho.php");
?>

<!DOCTYPE html>
<html>
  <head>
  	<title>Comidas</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/tipoComida.css">
  </head>

  <body>
    <div class="Um">
    	<div class="ui special cards" id="esquerda">
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div class="ui inverted button">Comida Japonesa</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/sushi.jpg" id="tamanho">
        </div>

       </div>
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div  class="ui inverted button">Fast Food</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/fast-food.jpg" id="tamanho">
        </div>

     </div>
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div  class="ui inverted button">Doces</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/bolo.jpg" id="tamanho">
        </div>

      </div>
      </div>
      <div class="espaco-superior">
      <div class="ui special cards" id="esquerda">
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div  class="ui inverted button">Comida Italiana</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/italiana.jpg" id="tamanho">
        </div>



       </div>
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div  class="ui inverted button">Comida Vegetariana</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/vegetariana.jpg" id="tamanho">
        </div>

        </div>
      <div class="card" id="tamanho">
        <div class="blurring dimmable image">
          <div class="ui dimmer">
            <div class="content">
              <div class="center">
                <div  class="ui inverted button">Cafeteria</div>
              </div>
            </div>
          </div>
          <img src="../../assets/img/tipo_comida/chocolate-quente.jpg" id="tamanho">
        </div>

      </div>
      






    </div><br>
    <div class="ui card">
    	<div class="content">
    		<div class="header" style="margin-left: 25%">Comentários</div>
    	</div>
    	<div class="content">
    		<div class="ui feed">
    			<div class="event">
    				<div class="label">
    					<img src="https://semantic-ui.com/images/avatar/large/jenny.jpg"/>
    				</div>
    				<div class="content">
    					<div class="date">1 day ago</div>
    					<div class="summary">You added <a>Jenny Hess</a> to your <a>coworker</a> group.</div>
    				</div>
    			</div>
    			<div class="event">
    				<div class="label">
    					<img src="https://playjoor.com/assets/avatar/elliot.jpg"/>
    				</div><div class="content">
    					<div class="date">3 days ago</div>
    					<div class="summary">Ótimos restaurantes. <a>Churrascaria Fuego</a> recomendo muito.</div>
    				</div>
    			</div>
    			<div class="event">
    				<div class="label">
    					<img src="https://semantic-ui.com/images/avatar2/large/molly.png"/>
    				</div>
    				<div class="content">
    					<div class="date">4 days ago</div>
    					<div class="summary">You added <a>Elliot Baker</a> to your <a>musicians</a> group.</div>
    					</div>
    					</div>
    				</div>
    			</div>
    		</div>


  </body>

</html>

<?= include "rodape.php";?>