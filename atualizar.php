<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $usuario = $_POST["usuario"];

    $sql = "UPDATE usuarios 
            SET cpf='$cpf', email='$email', senha='$senha', nome='$nome', telefone='$telefone', usuario='$usuario' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["resultado" => 1, "mensagem" => "Usuário atualizado com sucesso."]);
    } else {
        echo json_encode(["resultado" => 0, "mensagem" => "Erro ao atualizar o usuário: " . $conn->error]);
    }
}

$conn->close();
?>
