<?php
require_once 'config.php';

$senhaSecreta = "123";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['senha'];

    //DIGITOU A SENHA CERTO
    if($senhadigitada === $senhaSecreta){
        $sql = "SELECT * FROM mensagens";
        $result = $conn->query($sql);
    }else{
        echo "<h1>Senha Incorreta!</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver mensagens</title>
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\estilosmensagens.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <main class="main">
    <section class="login">
        <form method="post" class="login-form">
            <label for="senha">Senha:</label>
            <input class="login-form-input" type="password" name="senha" placeholder="Digite sua senha" required>        
            <button class="login-form-button" type="submit">Enviar</button>
        </form>
        <h2 style="text-align:center">Mensagens</h2>
    </section>

    <section class="mensagens">
        <?php if(isset($result) && $result->num_rows > 0) : ?>
        <div class="mensagens-container">
        <?php while($row = $result->fetch_assoc()) :?>
            <form class="mensagens-mensagem" id="form-<?php echo $row['id']; ?>" method="post" action="processar-edicao.php"> 
           
                <div class="mensagem-nav">
                    <p class="mensagem-data">
                        <?php echo $row["data"]." às ".$row["hora"]; ?>
                    </p>
                    
                    <p class="mensagem-edit" data-id="edit-<?php echo $row['id']; ?>">
                        <span class="material-symbols-outlined">edit</span>
                    </p>
                </div>
                
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <div class="mensagem-input">
                    <label for="nome" id="label-nome-<?php echo $row['id']; ?>">Nome: </label> 
                    <input class="disable"  type="text" name="nome" id="nome-<?php echo $row['id']; ?>" value=<?php echo $row["nome"]; ?>>
                </div>

                <div class="mensagem-input">
                    <label for="email" id="label-email-<?php echo $row['id']; ?>">Email: </label>
                    <input class="disable"  type="text" name="email" id="email-<?php echo $row['id']; ?>" value=<?php echo $row["email"]; ?>>
                </div>
                <br>
                <div class="mensagem-input mensagem-texto">
                    <label for="mensagem" id="label-mensagem-<?php echo $row['id']; ?>">Mensagem: </label>
                    <textarea class="disable"  name="mensagem" id="mensagem-<?php echo $row['id']; ?>"  rows="5"><?php echo $row["mensagem"]; ?></textarea>
                </div>

                <div class="editar-apagar hidden" id="buttons-<?php echo $row['id']; ?>">
                    <button class="mensagem-editar" data-id="editBt-<?php echo $row['id']; ?>" type="submit">Salvar</button>
                    <button class="mensagem-delete" data-id="delBt-<?php echo $row['id']; ?>">Deletar</button>
                </div>

            </form>
        <?php endwhile; ?>

        </div>

        <?php else : ?>
            <p>Nenhuma mensagem.</p>
        <?php endif; ?>
    </section>

    </main>

    <script src="js/script.js"></script>
</body>
</html>
