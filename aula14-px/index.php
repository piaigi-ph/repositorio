<?php
$host = 'localhost';
$dbname = 'projeto_site';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

$sql = "SELECT id, nome, mensagem FROM contatos";
$STMT = $conexao->prepare($sql);
$STMT->execute();
$mensagens = $STMT->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel de mensagem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h2>Mensagens interceptadas (banco de dados)</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>nome/sobreviventes</th>
            <th>e-mail de contato</th>
            <th>conteudo da mensagem</th>
            <th>ação</th>
        </tr>
        <?php foreach ($mensagens as $linha): ?>
            <tr>
                <td><?php echo htmlspecialchars($linha['id']); ?></td>
                <td><?php echo htmlspecialchars($linha['nome']); ?></td>
                <td><?php echo htmlspecialchars($linha['email']); ?></td>
                <td><?php echo nl2br(htmlspecialchars($linha['mensagem'])); ?></td>
                <td>
                  <a href="deletar.php?id=<?php echo $linha['id']; ?>" class="btn-excluir">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.html">Voltar para o formulario</a>
</body>
</html>