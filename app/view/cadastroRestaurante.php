<?php
    include("cabecalho.php");
?>

<html>
    <head>
    <title>Cadastre Seu Restaurante</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/cadastroRestaurante.css">
    </head>

    <body>

   	 <form class="ui form">

          <h3 class="ui padded" id="pagina">Cadastre Seu Restaurante</h3>

    <div class="espacamento">
        <div class="field">
            <label id="fonte">Nome do Restaurante</label>
            <div class="fields">
                <div class="field">
                    <input type="text" name="shipping[first-name]" placeholder="Restaurante Biff">
                </div>
            </div>
        </div>
        
        <div class="field">
            <label id="fonte">Endereço</label>
            <div class="fields">
                <div class="field">
                    <input type="text" name="shipping[address]" placeholder="Rua Ottokar Doerfell">
              </div>
              

            </div>
        </div>

     <div class="field">
            <label id="fonte">N°</label>
            <div class="fields">
                <div class="field">
                    <input type="number" name="shipping[number]" placeholder="47">
                </div>
            </div>
        </div>


            </div>
    <div class="espacamento">
        <div class="six fields">
            <div class="field">
                <label id="fonte">Estado</label>
                <select class="ui fluid dropdown">
                    <option value=""></option>
                    
                    <option value="PR">Paraná</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="SC">Santa Catarina</option>
                    
                </select>
            </div>
        </div>
     </div>

        <div class="espacamento">
            <div class="six fields">
            <div class="field">
                <label id="fonte">Cidade</label>
                <select class="ui fluid dropdown">
                    <option value=""></option>
                    <option value="AR">Araquari</option>
                    <option value="BBS">Balneário Barra do Sul</option>
                    <option value="JLLE">Joinville</option>
                    <option value="SFS">São Francisco do Sul</option>
                </select>
            </div>
        </div>
    </div>

       <!-- <div class="ui segment">
            <div class="field">
                <div style="margin-left: 4%" class="ui toggle checkbox">
                    <input type="checkbox" name="gift" tabindex="0" class="hidden">
                    <label>Receber informações no e-mail</label>
                </div>
            </div>
        </div>
    -->
        
            <a href="index.php" class="button">
                <button class="ui red button">Cancelar</button>
                <button class="ui green button" type="submit">Cadastrar</button>
            </a>

   	 </form>
   	

    </body>

    <footer>
        <?= include("rodape.php");?>
    </footer>

</html>

