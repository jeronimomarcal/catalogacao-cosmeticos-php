
<?php
include 'includes/db.php';
include 'includes/header.php';
include 'includes/auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO cosmeticos (nome, descricao, genero, tipo, preco, user_id) VALUES ('$nome', '$descricao', '$genero', '$tipo', '$preco', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Cosmético adicionado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="add_cosmetico.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao"></textarea>
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required>
        <option value="Feminino">Feminino</option>
        <option value="Masculino">Masculino</option>
    </select>
    <label for="tipo">Tipo:</label>
    <input type="text" id="tipo" name="tipo" required>
    <label for="preco">Preço:</label>
    <input type="number" step="0.01" id="preco" name="preco" required>
    <input type="submit" value="Adicionar Cosmético">
</form>

<?php
include 'includes/footer.php';
?>

