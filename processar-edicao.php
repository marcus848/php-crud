// processar-edicao.php
<?php
require_once 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $query = "UPDATE mensagens SET nome = ?, email = ?, mensagem = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $nome, $email, $mensagem, $id);

    // if($stmt->execute()){
    //     echo "Mensagem atualizada com sucesso!";
    // }else{
    //     echo "Erro ao atualizar a mensagem: " . $stmt->error;
    // }

    $stmt->close();
    $conn->close();
}
?>
