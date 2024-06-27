
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Catalogação de Cosméticos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sistema de Catalogação de Cosméticos</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="view_cosmeticos.php">Ver Cosméticos</a>
            <a href="add_cosmetico.php">Adicionar Cosmético</a>
            <?php if (isset($_SESSION['username'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Registrar</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>

