<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "admin3393", "mirror_fashion");
    $dados = mysqli_query($conexao, "select * from produtos where id=$_GET[id]");
    $produto = mysqli_fetch_array($dados);
?>

<?php
    $cabecalho_title = "Produto da Mirror Fashion";
    $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
    include("cabecalho.php");
?>


<div class="produto-back">

    
    <div class="container">
        <div class="produto">
            <h1><?=$produto['nome']?></h1>
            <p>por apenas <?=$produto['preco']?></p>

            <form action="checkout.php" method="POST">
                
                <fieldset class="cores">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <input type="hidden" name="nome" value="<?=$produto['nome']?>">
                <input type="hidden" name="preco" value="<?=$produto['preco']?>">

                    <legend>Escolha a cor:</legend>
                    
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto<?=$produto['id']?>-verde.png" alt="Produto na cor verde">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto1-rosa.png" alt="Produto na cor rosa">
                    </label>
                    
                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto1-azul.png" alt="Produto na cor azul">
                    </label>

                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max= "46" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" nome="valortamanho" id="valortamanho">42</output>

                </fieldset>


                <button class="comprar">Comprar</button>
                

            </form>		    	
        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p><?= $produto['descricao']?>
                
            </p>
            <table>
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
                

            </table>
        </div>

    </div>
    <?php include("rodape.php");?>




    
</div>


<script type="text/javascript" src="js/produto.js"></script>
</body>
</html>