<?php
session_start();

$produto = [
    'id' => 1,
    'nome' => 'Produto 1',
    'descricao' => 'Descrição do Produto 1. Lorem ipsum dolor sit amet.',
    'preco' => 50.00,
    'imagem' => 'caminho_para_imagem1.jpg',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['adicionar_ao_carrinho'])) {
    $produto_no_carrinho = [
        'id' => $produto['id'],
        'nome' => $produto['nome'],
        'preco' => $produto['preco'],
        'quantidade' => $_POST['quantidade'],
    ];

    $_SESSION['carrinho'][] = $produto_no_carrinho;
    header("Location: carrinho.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?> - Minha Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<header>
    <h1><a href="index.php">Minha Loja</a></h1>
</header>

<section>
    <div class="product-detail">
        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
        <h2><?php echo $produto['nome']; ?></h2>
        <p><?php echo $produto['descricao']; ?></p>
        <p>Preço: R$<?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
        <form action="produto.php" method="post">
            <input type="hidden" name="produto_id" value="<?php echo $produto['id']; ?>">
            <input type="hidden" name="produto_nome" value="<?php echo $produto['nome']; ?>">
            <input type="hidden" name="produto_preco" value="<?php echo $produto['preco']; ?>">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" value="1" min="1">
            <button type="submit" name="adicionar_ao_carrinho">Adicionar ao Carrinho</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2023 Minha Loja. Todos os direitos reservados.</p>
</footer>

</body>
</html>
