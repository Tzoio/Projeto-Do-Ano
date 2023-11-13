<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['finalizar_compra'])) {
    // Aqui você processaria a finalização da compra, poderia salvar em um banco de dados, enviar e-mails, etc.
    // Por simplicidade, vamos apenas limpar o carrinho nesta demonstração.
    $_SESSION['carrinho'] = [];
    header("Location: index.php");  // Redireciona para a página inicial após a compra.
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras - Minha Loja</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body>

<header>
    <h1><a href="index.php">Minha Loja</a></h1>
</header>

<section>
    <h2>Carrinho de Compras</h2>
    <?php if (!empty($_SESSION['carrinho'])) : ?>
        <table>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
            </tr>
            <?php foreach ($_SESSION['carrinho'] as $produto) : ?>
                <tr>
                    <td><?php echo $produto['nome']; ?></td>
                    <td>R$<?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                    <td><?php echo $produto['quantidade']; ?></td>
                    <td>R$<?php echo number_format($produto['preco'] * $produto['quantidade'], 2, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="3">Total</td>
                <td>R$<?php
                    $total = array_sum(array_map(function ($produto) {
                        return $produto['preco'] * $produto['quantidade'];
                    }, $_SESSION['carrinho']));
                    echo number_format($total, 2, ',', '.');
                    ?>
                </td>
            </tr>
        </table>
        <form action="carrinho.php" method="post">
            <button type="submit" name="finalizar_compra">Finalizar Compra</button>
        </form>
    <?php else : ?>
        <p>O carrinho está vazio.</p>
    <?php endif; ?>
</section>

<footer>
    <p>&copy; 2023 Minha Loja. Todos os direitos reservados.</p>
</footer>

</body>
</html>

