<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exemplo PHP com MySQL</title>
</head>
<body>
    <?php
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    echo 'Versão atual do PHP: ' . phpversion() . '<br>';

    $servername = "db";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    $valor_rand1 = rand(1, 999);
    $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $host_name = gethostname();

    $stmt = $conn->prepare("INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

    if ($stmt->execute()) {
        echo "Novo registro inserido com sucesso!<br>";
    } else {
        echo "Erro ao inserir: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
