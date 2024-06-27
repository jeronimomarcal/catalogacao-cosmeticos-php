
<?php
include 'includes/db.php';
include 'includes/header.php';
include 'includes/auth.php';

$sql = "SELECT * FROM cosmeticos WHERE user_id = " . $_SESSION['user_id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row['nome'] . "</h2>";
        echo "<p>" . $row['descricao'] . "</p>";
        echo "<p>Gênero: " . $row['genero'] . "</p>";
        echo "<p>Tipo: " . $row['tipo'] . "</p>";
        echo "<p>Preço: " . $row['preco'] . "</p>";
        echo "<a href='update_cosmetico.php?id=" . $row['id'] . "'>Editar</a>";
        echo "<a href='delete_cosmetico.php?id=" . $row['id'] . "'>Deletar</a>";
        echo "</div>";
    }
} else {
    echo "Nenhum cosmético encontrado.";
}

include 'includes/footer.php';
?>

