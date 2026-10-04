<?php include 'header.php'; ?>

<h1 class="mb-4">Página Inicial</h1>

<form method="post" action="index.php" class="card card-body mb-4">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>

    <div class="mb-3">
        <label for="idade" class="form-label">Idade</label>
        <input type="number" class="form-control" id="idade" name="idade" min="0" required>
    </div>

    <div class="mb-3">
        <label for="cor" class="form-label">Cor favorita</label>
        <select class="form-select" id="cor" name="cor" required>
            <option value="">Selecione...</option>
            <option value="red">Vermelho</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
            <option value="yellow">Amarelo</option>
            <option value="purple">Roxo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $cor   = htmlspecialchars($_POST['cor']);

    echo "<div class='alert alert-success'>";
    echo "Olá, <strong>$nome</strong>! Você tem <strong>$idade</strong> anos ";
    echo "e sua cor favorita é <strong style='color: $cor;'>$cor</strong>.";
    echo "</div>";
}
?>

<?php include 'footer.php'; ?>