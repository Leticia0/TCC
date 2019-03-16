<?php
    include("cabecalho.php");
    include("../../assets/Bootstrap/carrossel.php");
?>

<body>

<div class="ui center aligned grid segment">

    <div class="row">
        <div class="ui sixteen wide column">

            <h3 class="ui padded">Encontre Restaurantes Próximos</h3>

        </div>
    </div>


    <div class="row">
        <div class="ui ten wide column">
            <form action="">
                <div class="two fields">

                    <div class="field">
                        <label>Estado</label>
                        <select class="ui dropdown">
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
                        <label>Cidade</label>
                        <select class="ui dropdown">
                            <option value="">--</option>
                            <option value="AR">Araquari</option>
                            <option value="BBS">Balneário Barra do Sul</option>
                            <option value="JLLE">Joinville</option>
                            <option value="SFS">São Francisco do Sul</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>



        <div class="ui six wide column">
            <form class="ui form" method="post" action="#?acao=search">
                <div class="ui right floated action input">
                    <input type="text" placeholder="Pesquisar">
                    <button class="ui icon button">
                        <i class="search icon"></i>
                    </button>
                </div>
            </form>
        </div>


    </div>
</div>
</body>

<footer>

<?php include("rodape.php");?>
</footer>

</html>

