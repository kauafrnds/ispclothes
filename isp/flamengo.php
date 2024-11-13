<?php
session_start();
$logado = isset($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP CLOTHES - Produto</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="js/carrinho.js" defer></script>
    <script src="js/menu.js" defer></script>

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
    <style>
        /* Adicionando um estilo para os tamanhos e especificações do produto */
        .product-details {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            max-width: 600px;
            margin-left: 20px;
        }

        .product-info h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .buttons button {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 20px;
        }

        .add-to-cart {
            background-color: #2ecc71;
            color: white;
        }

        .buy-now {
            background-color: #3498db;
            color: white;
        }

        /* Adicionando estilização para o tamanho e especificações */
        .size-options {
            margin-top: 20px;
        }

        .size-options select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .product-specifications {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-specifications h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .spec-item {
            margin-bottom: 8px;
        }

        /* Ajustes de estilo */
        .cart-container {
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .cart-items {
            margin-top: 20px;
            list-style-type: none;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .cart-item img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .product-image img{

           margin-left: 80%;
        }
    </style>
</head>
<body>

<header>
<div class="menu">
    <li><a href="home.php">
        <img src="imagens/isp_logo.png" alt="banner" width="270px" height="100px"></a>
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
</div>

    <!-- Detalhes do Produto -->
    <section class="product-details">
        <div class="product-image">
            <img src="imagens/camisaflamengo.png" alt="Camisa Flamengo" id="product-image">
        </div>
        <div class="product-info">
            <h1>Camisa Flamengo I 24/25 s/n° Torcedor Adidas Masculina</h1>
            <p class="price">R$ 199,90 <span class="discount">(Desconto de 10%)</span></p>
            <div class="ratings">
                <span class="stars">★★★★☆</span>
                <span class="reviews">(45 avaliações)</span>
            </div>

            <!-- Opções de tamanho -->
            <div class="size-options">
                <label for="size">Escolha o tamanho:</label>
                <select id="size">
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                </select>
            </div>

            <!-- Especificações do produto -->
            <div class="product-specifications">
                <h3>Especificações do Produto</h3>
                <div class="spec-item"><strong>Material:</strong> 100% Poliéster</div>
                <div class="spec-item"><strong>Modelo:</strong> Torcedor Adidas</div>
                <div class="spec-item"><strong>Marca:</strong> Adidas</div>
                <div class="spec-item"><strong>Gênero:</strong> Masculino</div>
                <div class="spec-item"><strong>Desconto:</strong> 10% na compra online</div>
            </div>

            <div class="buttons">
                <button class="add-to-cart">Adicionar ao Carrinho</button>
            </div>
        </div>
    </section>
    

  <br><br><br><br><br><br><br><br><br><br>
    

    <footer>
      <div class="footer-links">
        <a href="Sobre Nos.php">Sobre Nós</a>
        <a href="Política de Privacidade.php">Política de Privacidade</a>
        <a href="Termos de uso.php">Termos de Uso</a>
        <p>&copy; 2024 ISP CLOTHES. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script>
    // Função para animar a camisa indo para o carrinho
    document.querySelector('.add-to-cart').addEventListener('click', function(e) {
        e.preventDefault();

        const productImage = document.querySelector('#product-image');
        const cartBtn = document.querySelector('.cart-btn');
        const cartContainer = document.querySelector('#cart-container');

        // Criar uma cópia da imagem do produto
        const cloneImage = productImage.cloneNode();
        cloneImage.style.position = 'absolute';
        cloneImage.style.zIndex = 9999; // Garantir que o clone fique sobre outros elementos
        cloneImage.style.width = '100px'; // Tamanho da imagem clonada
        cloneImage.style.top = `${productImage.getBoundingClientRect().top}px`; // Posição inicial da imagem
        cloneImage.style.left = `${productImage.getBoundingClientRect().left}px`; // Posição inicial da imagem
        document.body.appendChild(cloneImage);

        // Posição do ícone do carrinho
        const cartBtnPosition = cartBtn.getBoundingClientRect();
        const productImagePosition = productImage.getBoundingClientRect();

        // Animação da camisa indo para o carrinho
        anime({
            targets: cloneImage,
            translateX: cartBtnPosition.x - productImagePosition.x + 20, // desloca para o carrinho
            translateY: cartBtnPosition.y - productImagePosition.y + 20,
            scale: 0.5, // Reduz a imagem durante a animação
            opacity: 0, // Faz a imagem desaparecer no final da animação
            easing: 'easeInOutQuad',
            duration: 500,
            complete: function() {
                // Após a animação, adicionamos a camisa ao carrinho
                addToCart(productImage.src);
                // Exibimos o carrinho
                cartContainer.style.display = 'block';
                // Remover a imagem clonada após a animação
                cloneImage.remove();
            }
        });
    });

    // Função para adicionar o item ao carrinho
    function addToCart(imageSrc) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({
            name: "Camisa Flamengo",
            price: 199.90,
            image: imageSrc
        });
        localStorage.setItem('cart', JSON.stringify(cart)); // Armazena no localStorage

        loadCart(); // Recarrega o carrinho
    }

    // Função para carregar os itens do carrinho
    function loadCart() {
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        const cartContainer = document.getElementById('cart-items');
        const totalPriceElement = document.getElementById('total-price');

        cartContainer.innerHTML = '';
        let totalPrice = 0;

        cartItems.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.classList.add('cart-item');
            itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div class="item-info">
                    <h2>${item.name}</h2>
                    <div class="price">R$ ${item.price.toFixed(2)}</div>
                </div>
            `;
            cartContainer.appendChild(itemElement);
            totalPrice += item.price;
        });

        totalPriceElement.textContent = `Total: R$ ${totalPrice.toFixed(2)}`;
    }

    // Função para finalizar a compra (simulação)
    function checkout() {
        alert('Compra finalizada! (Esta é uma simulação)');
        localStorage.removeItem('cart');
        loadCart();
    }
</script>

</body>
</html>
