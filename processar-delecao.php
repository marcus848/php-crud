<?php
require_once 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];

    $query = "DELETE FROM mensagens WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        echo "Mensagem deletada com sucesso!";
    }else{
        echo "Erro ao deletar a mensagem: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    header('Location: mensagens2.php');
    exit;
}
