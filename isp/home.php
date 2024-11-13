<?php
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
<header>
<div class="menu">
    <li>
       <a href="home.php"> <img src="imagens/isp_logo.png" alt="banner" width="270px" height="100px"></a>
    </li>
    <nav class="dropdown-container">
            <li>
                <a href="camisas.php">Camisas</a>
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

<li>  <a href="carrinho.php" class="cart-btn">🛒 Carrinho</a>
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
  </header>
  <body>
  <main>
    
  <style>
    .carousel-item h2:hover {
        color: c;
        transition: 0.5s;
        opacity: 0.7;

    }

    .carousel-container {
        width: 900px;
        height: 400px !important;
        margin: 50px auto;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }

    .carousel-slide {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
        text-align: center;
        position: relative;
    }

    .carousel-item img {

        border-radius: 10px;
        background-size: cover;
    }

    .carousel-item h2 {
        position: absolute;
        top: 370px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        padding: 10px;
        border-radius: 5px;
        ;
    }

    .carousel-controls {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
    }

    .carousel-button {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        width: 30px;
        height: 60px;
        transition: background-color 0.3s;
    }

    .carousel-button:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .dots-container {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
    }

    .dot {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .dot.active {
        background-color: white;
    }
</style>
</head>

<body>

    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="carousel-item">
            <a href="brasileirão.php">
                <img src="imagens/banner1.png" alt="Img1" width="900px" height="400px">
</a>
            </div>
            <div class="carousel-item">
            <a href="seleção.php">
                <img src="imagens/banner2.png" alt="Img2" width="900px" height="500px">
              
                </a>
            </div>
            <div class="carousel-item">
            <a href="premierleague.php">
                <img src="imagens/banner3.png" alt="Img3" width="900px" height="500px">
       
                </a>
            </div>
        </div>

        <div class="carousel-controls">
            <button class="carousel-button" id="prevBtn">&#10094;</button>
            <button class="carousel-button" id="nextBtn">&#10095;</button>
        </div>

        <div class="dots-container">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelector('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = dots.length;

        // Função para atualizar o slide
        function updateSlide() {
            const offset = -currentSlide * 100;
            slides.style.transform = `translateX(${offset}%)`;

            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlide].classList.add('active');
        }

        // Função para avançar para o próximo slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlide();
        }

        // Função para voltar para o slide anterior
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlide();
        }

        // Função para mudar o slide ao clicar nos pontos
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                updateSlide();
            });
        });

        // Controlar os botões de navegação
        document.getElementById('prevBtn').addEventListener('click', prevSlide);
        document.getElementById('nextBtn').addEventListener('click', nextSlide);

        // Automatizar a mudança de slides a cada 3 segundos
        setInterval(nextSlide, 3000);

        // Inicializar o slide
        updateSlide();
    </script>
    <section class="featured-products">
      <h2>Mais Vendidos</h2>
      <br>
      <section class="products-carousel">
          <div class="products-grid">
              <div class="product">
                <a href="flamengo.php">
                  <img src="imagens/camisaflamengo.png" alt="Camisa Flamengo I 24/25 s/n° Torcedor Adidas Masculina" class="product-image">
                  <h3 class="product-name">Camisa Flamengo I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  <br>
                  <p class="product-price">R$ 199,90</p>
                  <br>
               
                <a href="flamengo.php"><button>Comprar</button></a></a>
                 
              </div>

              <div class="product">
                <a href="fluminense.php">
                  <img src="imagens/flu.png" alt="Camisa Fluminense I 24/25 s/n° Torcedor Umbro Masculina" class="product-image">
                  <h3 class="product-name">Camisa Fluminense I 24/25 s/n° Torcedor Umbro Masculina</h3>
                  <p class="product-price">R$ 199,90</p>
                  <br>
          
              
                  <button>Comprar</button></a>
              </div>
              <div class="product">
                <a href="manchestercity.php">
                  <img src="imagens/city.png" alt="Camisa Manchester City I 24/25 s/n° Torcedor Puma Masculina ">
                  <h3>Camisa Manchester City I 24/25 s/n° Torcedor Puma Masculina </h3>
                  <p>R$ 199,90</p>
                  <br>
             
                  <button>Comprar</button></a>
              </div>

              <div class="product">
                <a href="alemanha.php">
                  <img src="imagens/alemanha.png" alt="Camisa Alemanha I 24/25 s/n° Torcedor Adidas Masculina">
                  <h3>Camisa Alemanha I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  <br>
                  <p>R$ 199,90</p>
                  <br>
                       
                <button>Comprar</button></a>
            </div>

            <div class="product">
              <a href="manchesterunited.php">
                <img src="imagens/mcu.png" alt="Camisa Manchester United I 24/25 s/n° Torcedor Adidas Masculina">
                <h3>Camisa Manchester United I 24/25 s/n° Torcedor Adidas Masculina</h3>
                <p>R$ 199,90</p>
                <br>
                      
              <button >Comprar</button></a>
          </div>
          </div>
      </section>
  </section>

    <section class="deals">
      <section class="featured-products">
      <h2>Promoções</h2>
     <br>
      <div class="deal-grid">
        <section class="products-carousel">
          <div class="products-grid">
              <div class="product">
                <a href="argentina.php">
                  <img src="imagens/argentina.png" alt="Camisa Argentina I 24/25 s/n° Torcedor Adidas Masculina">
                  <h3>Camisa Argentina I 24/25 s/n° Torcedor Adidas Masculina</h3>
                  <p>R$ 149,90</p>
                  <br>
             
              
                <button>Comprar</button></a>
                 
              </div>

              <div class="product">
                <a href="tottenham.php">
                  <img src="imagens/tottenham.png" alt="Camisa Tottenham I 24/25 s/n° Torcedor Nike Masculina" class="product-image">
                  <h3>Camisa Tottenham I 24/25 s/n° Torcedor Nike Masculina</h3>
                  <p class="product-price">R$ 149,90</p>
                  <br>
                    
                <button>Comprar</button></a>
              </div>
              <div class="product">
                <a href="corinthians.php">
                  <img src="imagens/corinthians.png" alt="Camisa Corinthians I 24/25 s/n° Torcedor Nike Masculina">
                  <h3>Camisa Corinthians I 24/25 s/n° Torcedor Nike Masculina</h3>
                  <p>R$ 149,90</p>
                  
                       
                  <button>Comprar</button></a>
              </div>

              <div class="product">
                <a href="liverpool.php">
                  <img src="imagens/liverpool.png" alt="Camisa Liverpool I 24/25 s/n° Torcedor Nike Masculina">
                  <h3>Camisa Liverpool I 24/25 s/n° Torcedor Nike Masculina</h3>
                  
                  <p>R$ 149,90</p>
                  <br>
                            
                <button>Comprar</button></a>
            </div>

            <div class="product">
              <a href="espanha.php">
                <img src="imagens/espanha.png" alt="Camisa Espanha I 24/25 s/n° Torcedor Adidas Masculina">
                <h3>Camisa Espanha I 24/25 s/n° Torcedor Adidas Masculina</h3>
                <p>R$ 149,90</p>
          
            <br>        
              <button>Comprar</button></a>
          </div>
          </div>
        </section>
      </section>
      </div>
    </section>
  </main>
  
    <footer>
      <div class="footer-links">
        <a href="Sobre Nos.php">Sobre Nós</a>
        <a href="Política de Privacidade.php">Política de Privacidade</a>
        <a href="Termos de uso.php">Termos de Uso</a>
        <p>&copy; 2024 ISP CLOTHES. Todos os direitos reservados.</p>
      </div>
    </footer>
    </meta>
  </body>
</html>