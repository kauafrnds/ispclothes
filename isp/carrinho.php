<?php
session_start();
$logado = isset($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP CLOTHES - Carrinho</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .menu {
            display: flex;
            justify-content: space-between;
            background-color: #010f1b;
            padding: 10px;
        }

        .menu li {
            display: inline-block;
            list-style: none;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        .cart-container {
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 28px;
            color: #333;
            text-align: center;
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

        .item-info {
            flex: 1;
            margin-left: 20px;
        }

        .item-info h2 {
            font-size: 18px;
            color: #333;
        }

        .item-info .price {
            color: #e74c3c;
            font-size: 20px;
            margin-top: 10px;
        }

        .item-actions {
            display: flex;
            align-items: center;
        }

        .remove-btn {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background-color: darkred;
        }

        .cart-summary {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .checkout-btn {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .checkout-btn:hover {
            background-color: #2980b9;
        }

        .total-price {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
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
</head>
<body>

    <!-- Menu de navegação -->
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

    <!-- Carrinho de Compras -->
    <div class="cart-container">
        <h1>Seu Carrinho de Compras</h1>
        <div class="cart-items" id="cart-items">
            <!-- Itens do Carrinho vão aqui -->
        </div>

        <div class="cart-summary">
            <div class="total-price" id="total-price">Total: R$ 0,00</div>
            <button class="checkout-btn" onclick="checkout()">Finalizar Compra</button>
        </div>
    </div>

    <script>
        // Função para carregar os itens do carrinho
        function loadCart() {
            const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            const cartContainer = document.getElementById('cart-items');
            const totalPriceElement = document.getElementById('total-price');

            cartContainer.innerHTML = '';
            let totalPrice = 0;

            cartItems.forEach((item, index) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('cart-item');
                itemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}">
                    <div class="item-info">
                        <h2>${item.name}</h2>
                        <div class="price">R$ ${item.price.toFixed(2)}</div>
                    </div>
                    <div class="item-actions">
                        <button class="remove-btn" onclick="removeItem(${index})">Remover</button>
                    </div>
                `;
                cartContainer.appendChild(itemElement);

                totalPrice += item.price;
            });

            totalPriceElement.textContent = `Total: R$ ${totalPrice.toFixed(2)}`;
        }

        // Função para remover item do carrinho
        function removeItem(index) {
            const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            cartItems.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartItems));
            loadCart();
        }

        // Função para finalizar a compra (simulação)
        function checkout() {
            alert('Compra finalizada! (Esta é uma simulação)');
            localStorage.removeItem('cart');
            loadCart();
        }

        // Carregar o carrinho ao carregar a página
        window.onload = loadCart;
    </script>
<script>
function checkout() {
    // Verifica se há itens no carrinho
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    if (cartItems.length === 0) {
        alert('Seu carrinho está vazio.');
        return;
    }

    // Calcula o total
    let totalPrice = 0;
    cartItems.forEach(item => {
        totalPrice += item.price;
    });

    // Armazena o carrinho na sessão (via URL) para a página de pagamento
    const cartData = encodeURIComponent(JSON.stringify(cartItems));
    const totalPriceFormatted = totalPrice.toFixed(2); // Formato de preço com 2 casas decimais

    // Redireciona para a página de pagamento com o carrinho e o total na URL
    window.location.href = `pagamento.php?cart=${cartData}&total=${totalPriceFormatted}`;
}
</script>

</body>
</html>
