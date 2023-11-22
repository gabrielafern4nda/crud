<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $usuario = $_POST["usuario"];

    $sql = "INSERT INTO usuarios (cpf, email, senha, nome, telefone, usuario) 
            VALUES ('$cpf', '$email', '$senha', '$nome', '$telefone', '$usuario')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["resultado" => 1, "mensagem" => "Dados Gravados"]);
    } else {
        echo json_encode(["resultado" => 0, "mensagem" => "Erro ao cadastrar o usuário: " . $conn->error]);
    }
}

$conn->close();
?>
