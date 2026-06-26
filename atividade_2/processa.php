<?php

$host = 'localhost';
$dbname = 'projeto_site';
$usuario  = 'root';
$senha = '';

try {
    $conexao = new pdo("mysql:host=$host;dbname=dbname;charset=uft8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados " . $e->getMessage());

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome_recebido = $_POST['nome'];
        $email_recebido = $_POST['email'];
        $mensagem_recebida = $_POST['mensagem'];

        $sql = "insert into contatos (nome, email, mensagem) values (:nome, :email, :mensagem)";
        $stmt = $conexao->prepare($sql);

            $stmt->bindParam(':nome', $nome_recebido);
            $stmt->bindParam(':email', $email_recebido);
            $stmt->bindParam(':mensagem', $mensagem_recebida);
        }
        if ($stmt->execute()) {

                echo "<h1>Dados inseridos com sucesso!</h1>";
                echo "<p>dados salvos no banco nde dados.</p>";
                echo "<a href='index.html'>Voltar para o formulário</a>";
            } else {
                echo "Erro ao inserir e salvar os dados.";
            }
    
        }
        ?>