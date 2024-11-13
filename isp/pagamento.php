<?php
session_start();

// Verifica se os dados do carrinho e o total foram passados via URL
$cartItems = isset($_GET['cart']) ? json_decode(urldecode($_GET['cart']), true) : [];
$totalPrice = isset($_GET['total']) ? $_GET['total'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - ISP CLOTHES</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos para a página de pagamento */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .cart-items {
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .cart-item img {
            width: 50px;
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

        .total-price {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .payment-methods {
            margin-top: 30px;
        }

        .payment-option {
            padding: 15px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-option:hover {
            background-color: #f1f1f1;
        }

        .payment-fields {
            display: none;
            margin-top: 20px;
        }

        .payment-fields input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .btn {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        /* Estilo para o QR Code */
        #pix-qrcode {
            margin-top: 20px;
            display: none;
            text-align: center;
        }

        /* Estilo para a imagem do QR Code */
        #pix-qrcode img {
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        /* Estilo para a chave Pix */
        #pix-key-container {
            margin-top: 10px;
            text-align: center;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        #pix-key {
            font-family: monospace;
            font-size: 16px;
            color: #333;
            word-wrap: break-word;
            white-space: pre-wrap;
            word-break: break-word;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .copy-btn {
            margin-top: 10px;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .copy-btn:hover {
            background-color: #2980b9;
        }

        /* Espaçamento para o botão de voltar */
        .back-btn {
            margin-top: 10px;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;

        }

        .back-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Resumo da Compra</h1>

    <div class="cart-items">
        <?php if (empty($cartItems)): ?>
            <p>Seu carrinho está vazio.</p>
        <?php else: ?>
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-item">
                    <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                    <div class="item-info">
                        <h2><?= $item['name'] ?></h2>
                        <div class="price">R$ <?= number_format($item['price'], 2, ',', '.') ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="total-price">
        Total a pagar: R$ <?= number_format($totalPrice, 2, ',', '.') ?>
    </div>

    <div class="payment-methods">
        <h2>Escolha o Método de Pagamento</h2>
        <div class="payment-option" onclick="selectPaymentMethod('cartao')">
            <span>💳 Cartão de Crédito</span>
        </div>
        <div class="payment-option" onclick="selectPaymentMethod('boleto')">
            <span>🏦 Boleto Bancário</span>
        </div>
        <div class="payment-option" onclick="selectPaymentMethod('pix')">
            <span>⚡ Pix</span>
        </div>
    </div>

    <div id="payment-fields" class="payment-fields">
        <div id="cartao-fields" style="display:none;">
            <h3>Informações do Cartão de Crédito</h3>
            <input type="text" id="card-number" placeholder="Número do Cartão" required>
            <input type="text" id="card-holder" placeholder="Nome do Titular" required>
            <input type="text" id="expiry-date" placeholder="Data de Expiração (MM/AA)" required>
            <input type="text" id="cvv" placeholder="CVV" required>
        </div>
        
        <div id="pix-fields" style="display:none;">
            <h3>Pagamento via Pix</h3>
            <p>Escaneie o QR Code abaixo para completar o pagamento.</p>
            <div id="pix-qrcode">
                <img src="imagens/qrcode.jpeg" alt="QR Code Pix">
            </div>
            <!-- Container para a chave Pix -->
            <div id="pix-key-container">
                <p>Chave Pix para cópia e cola:</p>
                <pre id="pix-key">00020126360014BR.GOV.BCB.PIX0114+55219739588885204000053039865802BR5925Kaua Fernandes da Silva T6009SAO PAULO621405100QTRLdRcOH6304828F</pre>
                <button class="copy-btn" onclick="copyPixKey()">Copiar Chave Pix</button>
            </div>
        </div>
    </div>

    <!-- Botão de finalizar pagamento -->
    <button class="btn" onclick="proceedToPayment()">Finalizar Pagamento</button>

    <!-- Botão para voltar para a página inicial -->
     <center>
    <a href="home.php">
        <button class="back-btn">Voltar para a Página Inicial</button>
    </a>
    </center>
</div>

<script>
    let selectedPaymentMethod = null;

    function selectPaymentMethod(method) {
        selectedPaymentMethod = method;
        document.getElementById("cartao-fields").style.display = "none";
        document.getElementById("pix-fields").style.display = "none";
        document.getElementById("pix-qrcode").style.display = "none";
        document.getElementById("pix-key-container").style.display = "none";

        if (method === 'cartao') {
            document.getElementById("cartao-fields").style.display = "block";
        } else if (method === 'pix') {
            document.getElementById("pix-fields").style.display = "block";
            document.getElementById("pix-qrcode").style.display = "block";
            document.getElementById("pix-key-container").style.display = "block";
        }

        document.getElementById("payment-fields").style.display = "block";
    }

    function copyPixKey() {
        var pixKey = document.getElementById("pix-key").textContent;
        var textarea = document.createElement("textarea");
        textarea.value = pixKey;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);

        alert("Chave Pix copiada para a área de transferência!");
    }

    function proceedToPayment() {
        if (!selectedPaymentMethod) {
            alert("Por favor, selecione um método de pagamento.");
            return;
        }

        alert("Pagamento finalizado com sucesso via " + selectedPaymentMethod);
    }
</script>

</body>
</html>
