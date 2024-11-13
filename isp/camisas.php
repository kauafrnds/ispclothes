<a?php
  session_start(); 

  $logado = isset($_SESSION['id']);
?>




</script> 


<!DOCTYPE html>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="height=device-height, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
 <script src="../js/carrinho.js"></script>
  <script src="../Js/menu.js"></script>
  <script src="../Js/carrinho.js"></script>
  <title>ISP CLOTHES</title>
<seaction>
<div class="menu">
    <li>
        <a href="home.php">
        <img src="imagens/isp_logo.png" alt="banner" width="270px" height="100px"></a>
    </li>
    <nav class="dropdown-container">
            <li>
                <a href="">Camisas</a>
            </li>
            <li class="dropdown">
                <a href="">Ligas</a>

                <div class="dropdown-menu">
                <a href="brasileirão.php">Brasileirão</a>
                    <a href="premierleague.php">Premier League</a>
                    <a href="seleção.php">Seleções</a>
                </div>
            </li>
            <li>
                <a href=""></a>
            </li>
            </nav>

            <!-- Barra de pesquisa -->
<div class="search-container">
    <form action="/search" method="get">
        <input type="text" name="q" class="search-input" placeholder="Pesquise pelo time" required>
        <button type="submit" class="search-button">
            <img src="imagens/lupa.png" alt="Buscar" width="20px" height="20px">
        </button>
    </form>
</div>

<li>  <a href="#" class="cart-btn">🛒 Carrinho</a>
</li>

            <a class="link1" href="index.php" name="login"> <img src="imagens/Conta.png" alt="Login" width="80px" height="80px"> </a>

            </li>
</div>
<style>
/* Estilos para a barra de pesquisa */
.search-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
}

.search-input {
    width: 300px;
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 30px;
    outline: none;
    transition: border-color 0.3s ease-in-out;
}

.search-input:focus {
    border-color: #007bff; /* Cor ao focar no campo */
}

.search-button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    margin-left: 10px;
}

.search-button img {
    transition: transform 0.3s ease-in-out;
}

.search-button:hover img {
    transform: scale(1.2); /* Aumenta o ícone de busca ao passar o mouse */
}

/* Adiciona um efeito de foco ao campo de pesquisa */
.search-input::placeholder {
    color: #aaa;
    font-style: italic;
}

</style>
<style>

.dropdown-container li{
    display: inline-block;
    position: relative;
}

.dropdown-container li a{
    display: flex;
    color: white;
    text-decoration: none;
    padding: 15px;
}

..dropdown-container li a:hover{
    background-color: red;
}

.dropdown-menu{
    position: absolute;
    box-shadow: 0 0 2px black;
    display: none;
    background-color: darkslateblue;
    z-index: 9999;
}

.dropdown-menu a{
    display: block;
    color: black;
}

.dropdown:hover .dropdown-menu{
    display: block;
}


</style>
<br>
<style>

.product h3{

    color: #0c0c0c;
}

</style>
<center><h1><font color="#0c0c0c">Camisas</font></h1></center>
<br>

<section class="products-carousel">

  <section class="products-carousel">
          <div class="products-grid">
              <div class="product">
              <a href="flamengo.php">
                  <img src="imagens/camisaflamengo.png" alt="Camisa Flamengo I 24/25 s/n° Torcedor Adidas Masculina" class="product-image">
                  <h3 class="product-name">Camisa Flamengo I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  <br>
                  <p class="product-price">R$ 199,90</p>
                  <br>
                 </a>
                <a href="flamengo.php"><button>Comprar</button></a>
                 
              </div>

              <div class="product">
              <a href="fluminense.php">
                  <img src="imagens/flu.png" alt="Camisa Fluminense" class="product-image">
                  <h3 class="product-name">Camisa Fluminense I 24/25 s/n° Torcedor Umbro Masculina</h3>
                  <p class="product-price">R$ 199,90</p>
                  <br>
                
              
                  <button>Comprar</button></a>
              </div>
              <div class="product">
              <a href="corinthians.php">
                  <img src="imagens/corinthians.png" alt="Camisa Corinthians">
                  <h3>Camisa Corinthians I 24/25 s/n° Torcedor Nike Masculina</h3>
                  <p>R$ 149,90</p>
                  <br>
                        
                  <button>Comprar</button></a>
              </div>

              <div class="product">
                <a href="atleticomg.php">
                  <img src="imagens/atleticomg.png" alt="Camisa Atlético MG">
                  <h3>Camisa Atlético MG I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  
                  <p>R$ 129,90</p>
                  <br>
                        
                <button>Comprar</button></a>
            </div>

          </div>
      </section>
  </section>

    <section class="deals">
      <section class="featured-products">
     <br>
      <div class="deal-grid">
        <section class="products-carousel">
          <div class="products-grid">
              <div class="product">
              <a href="alemanha.php">
                  <img src="imagens/alemanha.png" alt="Camisa Alemanha">
                  <h3>Camisa Alemanha I 24/25 s/n° Torcedor Adidas Masculina</h3>
                 
                  <p>R$ 199,90</p>
                  <br>
                      
                <button>Comprar</button>
                </a>
              </div>

              <div class="product">
              <a href="argentina.php">
                  <img src="imagens/argentina.png" alt="Camisa Argentina">
                  <h3>Camisa Argentina I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  <p>R$ 149,90</p>
                  <br>
             
              
                <button>Comprar</button>   </a>
              </div>
              <div class="product">
              <a href="espanha.php">
                <img src="imagens/espanha.png" alt="Camsisa Espanha">
                <h3>Camisa Espanha I 24/25 s/n° Torcedor Adidas Masculina</h3>
                <p>R$ 149,90</p>
               
            <br>        
              <button>Comprar</button>   </a>
              </div>

              <div class="product">
                <a href="holanda.php">
                  <img src="imagens/holanda.png" alt="Camisa Holanda">
                  <h3>Camisa Holanda I 24/25 s/n° Torcedor Nike Masculina</h3>
                  
                  <p>R$ 179,90</p>
                  <br>
                             
                <button>Comprar</button>   </a>
            </div>

          </div>
        </section>
      </section>
      </div>
    </section>
    <section class="products-carousel">
          <div class="products-grid">
              <div class="product">
              <a href="manchestercity.php">
                  <img src="imagens/city.png" alt="Camisa Manchester City I 24/25 s/n° Torcedor Puma Masculina ">
                  <h3>Camisa Manchester City I 24/25 s/n° Torcedor Puma Masculina </h3>
                  <p>R$ 199,90</p>
                  <br>
              
                  <button>Comprar</button>   </a>
                 
              </div>

              <div class="product">
              <a href="tottenham.php">
                  <img src="imagens/tottenham.png" alt="Camisa Tottenham I 24/25 s/n° Torcedor Nike Masculina" class="product-image">
                  <br>
                  <h3>Camisa Tottenham I 24/25 s/n° Torcedor Nike Masculina</h3>
                  <br>
                  <p class="product-price">R$ 149,90</p>
                  <br>
                   
                <button>Comprar</button>   </a>
              </div>
              <div class="product">
              <a href="manchesterunited.php">
                <img src="imagens/mcu.png" alt="Camisa Manchester United I 24/25 s/n° Torcedor Adidas Masculina">
                <h3>Camisa Manchester United I 24/25 s/n° Torcedor Adidas Masculina</h3>
                <p>R$ 199,90</p>
                <br>
                       
              <button >Comprar</button>   </a>
              </div>

              <div class="product">
              <a href="liverpool.php">
                  <img src="imagens/liverpool.png" alt="Camisa Liverpool I 24/25 s/n° Torcedor Nike Masculina">
                  <h3>Camisa Liverpool I 24/25 s/n° Torcedor Nike Masculina</h3>
                  <br>
                  <p>R$ 149,90</p>
                  <br>
                            
                <button>Comprar</button>   </a>
            </div>

          </div>
      </section>
  </section>
  <br>
  
    <footer>
      <div class="footer-links">
        <a href="Sobre Nos.php">Sobre Nós</a>
        <a href="Política de Privacidade.php">Política de Privacidade</a>
        <a href="Termos de uso.php">Termos de Uso</a>
        <p>&copy; 2024 ISP CLOTHES. Todos os direitos reservados.</p>
      </div>
    </footer>
</seaction>


   
  </body>
</html>