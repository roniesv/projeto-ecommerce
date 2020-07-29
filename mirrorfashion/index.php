<?php include("cabecalho.php")?>

      
  <div class="container destaque">
    
    <section class="busca">
      <h2>Buscar</h2>
      <form>
        <input type="search"/>
        <button>Busca</button>
      </form>
    </section>
    <!--fim .busca-->

    <section class="menu-departamentos">
      <h2>Departamentos</h2>  
      <nav>
        <ul>
          <li>
              <a href="#">Blusas e Camisas</a>
              <ul>
                <li><a href="#">Manga curta</a></li>
                <li><a href="#">Manga comprinda</a></li>
                <li><a href="#">Camisa social</a></li>
                <li><a href="#">Camisa casual</a></li>
              </ul>
          </li>
          <li><a href="#">Calças</a></li>
          <li><a href="#">Saias</a></li>
          <li><a href="#">Vestidos</a></li>
          <li><a href="#">Sapatos</a></li>
          <li><a href="#">Bolsas e Carteiras</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </nav>
    </section>
    <!-- fim .menu-departamentos-->

    <section class="banner-destaque">
      <figure>
        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
        <a href="#" class="pause"></a>
      </figure>	
    </section>
    <!-- fim . banner destaque-->

  </div>  
  <!-- fim .container .destaque -->

 <div class="container paineis">
    <!-- os paineis de novidades e mais vendidos entrar�o aqui dentro-->
    <section class="painel novidades">
      <h2>Novidades</h2>
      <ol>
        <?php
            $conexao = mysqli_connect("127.0.0.1", "root", "", "mirror_fashion");
            $dados = mysqli_query($conexao, "select * from produtos");
            while ($produto=mysqli_fetch_array($dados)):

        ?>    
        <li>
            <a href="produto.php?id=<?=$produto['id']?>">
            <figure>
                <img src="img/produtos/miniatura<?=$produto['id']?>.png" 
                alt="<?=$produto['nome']?>">
               <figcaption><?=$produto['nome']?>por <?=$produto['preco']?> </figcaption>  
            </figure> 
        </li>
        
        <?php endwhile;?>
        </ol>
        <button type="button">Mostrar mais</button>

        </section>
        <!--fim .painel .novidades-->

        <!-- come�o painel mais-vendidos-->
        
      <section class="painel mais-vendidos">
        <h2>Mais Vendidos</h2>
          <ol>
            <?php
              $conexao = mysqli_connect("127.0.0.1", "root", "", "mirror_fashion");
              $dados = mysqli_query($conexao, "select * from produtos");
              while ($produto=mysqli_fetch_array($dados)):
             ?>    
              <li>
                <a href="produto.php?id=<?=$produto['id']?>">
                <figure>
                    <img src="img/produtos/miniatura<?=$produto['id']?>.png" 
                    alt="<?=$produto['nome']?>">
                   <figcaption><?=$produto['nome']?>por <?=$produto['preco']?> </figcaption>  
                </figure> 
              </li>
        
            <?php endwhile;?>      
            
          </ol>
          <button type="button">Mostrar mais</button>
        </section>
        <!--fim .painel .mais-vendidos-->
        
    </div>
    <!--fim .container paineis-->
    <?php include("rodape.php")?>
  

  
  
  



              