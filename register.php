
<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro bem-sucedido!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post" action="register.php">
    <label for="username">Nome de Usuário:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Registrar">
</form>

