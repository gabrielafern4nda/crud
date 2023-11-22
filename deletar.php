<?php
include 'conecta.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["resultado" => 1, "mensagem" => "Usuário deletado com sucesso."]);
    } else {
        echo json_encode(["resultado" => 0, "mensagem" => "Erro ao deletar o usuário: " . $conn->error]);
    }
}

$conn->close();
?>
