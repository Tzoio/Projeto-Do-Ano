<?php
$produto = [
    'id' => 1,
    'nome' => 'Produto 1',
    'descricao' => 'Descrição do Produto 1.reviva o charme do passado com a nossa camiseta vintage de estilo retrô. Inspirada nas tendências clássicas, esta peça adiciona um toque de nostalgia ao seu visual. Feita com um algodão suave, é a escolha perfeita.
    ',
    'preco' => 50.00,
    'imagem' => 'caminho_para_imagem1.jpg',
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?> - FriendShip</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>

<header>
    <h1><a href="index.php">FriendShip</a></h1>
</header>

<section>
    <div class="product-detail">
        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
        <h2><?php echo $produto['nome']; ?></h2>
        <p><?php echo $produto['descricao']; ?></p>
        <p>Preço: R$<?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
        <form action="carrinho.php" method="post">
            <input type="hidden" name="produto_id" value="<?php echo $produto['id']; ?>">
            <input type="hidden" name="produto_nome" value="<?php echo $produto['nome']; ?>">
            <input type="hidden" name="produto_preco" value="<?php echo $produto['preco']; ?>">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" value="1" min="1">
            <button type="submit">Adicionar ao Carrinho</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2023 Minha Loja. Todos os direitos reservados.</p>
</footer>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>camisetas</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <a href="#" onclick="adicionarAoCarrinho(); return false;">
        <img src="Rio Branco Venda Nova do Imigrante 2018 2.png" alt="Produto">
    </a>
    <script>
        function adicionarAoCarrinho() {
            // Aqui você chamaria uma função para adicionar o produto ao carrinho no lado do servidor.
            // Pode ser uma requisição AJAX para um script PHP, por exemplo.
            alert("Produto adicionado ao carrinho!");
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?> - Minha Loja</title>
    <style>
        .product-detail img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: block;
            margin: 0 auto;
        }

        .product-detail img:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body>

<!-- Restante do código permanece inalterado -->



</body>
</html>
