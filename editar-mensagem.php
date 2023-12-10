<!-- editar-mensagem.php -->
<?php
require_once 'config.php';

// Checar se o id foi fornecido
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Buscar dados existentes
    $query = "SELECT * FROM mensagens WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
    } else {
        echo "Mensagem não encontrada!";
        exit;
    }
} else {
    echo "ID não fornecido!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Mensagem</title>
</head>
<body>
    <form action="processar-edicao.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" required><?php echo $row['mensagem']; ?></textarea><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
