<?php
include 'conecta.php';

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuarios = array();

    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }

    echo json_encode(["resultado" => 1, "usuarios" => $usuarios]);
} else {
    echo json_encode(["resultado" => 0, "mensagem" => "Nenhum usuário encontrado."]);
}

$conn->close();
?>
