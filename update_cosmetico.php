
<?php
include 'includes/db.php';
include 'includes/header.php';
include 'includes/auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];

    $sql = "UPDATE cosmeticos SET nome='$nome', descricao='$descricao', genero='$genero', tipo='$tipo', preco='$preco' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Cosmético atualizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cosmeticos WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="update_cosmetico.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $row['nome']; ?>" required>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"><?php echo $row['descricao']; ?></textarea>
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero" required>
                <option value="Feminino" <?php if ($row['genero'] == 'Feminino') echo 'selected'; ?>>Feminino</option>
                <option value="Masculino" <?php if ($row['genero'] == 'Masculino') echo 'selected'; ?>>Masculino</option>
            </select>
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $row['tipo']; ?>" required>
            <label for="preco">Preço:</label>
            <input type="number" step="0.01" id="preco" name="preco" value="<?php echo $row['preco']; ?>" required>
            <input type="submit" value="Atualizar Cosmético">
        </form>
        <?php
    } else {
        echo "Cosmético não encontrado.";
    }
}

include 'includes/footer.php';
?>

