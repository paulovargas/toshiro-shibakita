<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

echo '<h3>Versão atual do PHP:</h3> ' . phpversion() . '<br><br>';

// Configuração do banco
$servername = "mysql-db";
$username   = "root";
$password   = "Senha123";
$database   = "meubanco";

$tentativas = 5;
$link = null;

// Tentativas de conexão
while ($tentativas > 0) {
    $link = @new mysqli($servername, $username, $password, $database, 3306);

    if (!$link->connect_error) {
        break;
    }

    $tentativas--;
    sleep(2);
}

if ($link->connect_error) {
    die("Erro de conexão: " . $link->connect_error);
}

echo "<strong>Conectado com sucesso!</strong><br><br>";

// Dados fake
$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
$host_name   = gethostname();

// Insert
$sqlInsert = "
    INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
    VALUES ($valor_rand1, '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$host_name')
";

if ($link->query($sqlInsert) === TRUE) {
    echo "Registro inserido com sucesso!<br><br>";
} else {
    echo "Erro ao inserir: " . $link->error;
}

// Buscar dados
$sqlSelect = "SELECT * FROM dados ORDER BY AlunoID DESC";
$result = $link->query($sqlSelect);

// Exibir tabela
if ($result && $result->num_rows > 0) {
    echo "<h3>Registros no banco</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "
        <tr>
            <th>AlunoID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Endereço</th>
            <th>Cidade</th>
            <th>Host</th>
        </tr>
    ";

    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>{$row['AlunoID']}</td>
                <td>{$row['Nome']}</td>
                <td>{$row['Sobrenome']}</td>
                <td>{$row['Endereco']}</td>
                <td>{$row['Cidade']}</td>
                <td>{$row['Host']}</td>
            </tr>
        ";
    }

    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

// Fechar conexão
$link->close();
