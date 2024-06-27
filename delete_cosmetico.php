
<?php
include 'includes/db.php';
include 'includes/auth.php';

$id = $_GET['id'];
$sql = "DELETE FROM cosmeticos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Cosmético deletado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

header("Location: view_cosmeticos.php");
exit();

?>

