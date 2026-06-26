<?php
// 1. Configurações de acesso ao Banco de Dados
$host = 'localhost';
$dbname = 'projeto_site'; // Nome correto, sem espaço
$usuario = 'root';        // Usuário padrão do XAMPP
$senha = '';              // Senha padrão é vazia

try {
    // 2. Conexão com PDO (correto, com PDO completo)
    $conexao = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $usuario,
        $senha
    );
    // Configura para mostrar erros claros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3. Verifica se o formulário foi enviado (nome correto $_SERVER)
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Pegando dados do formulário (nomes de variáveis sem espaço)
        $nome_recebido = $_POST['nome'];
        $email_recebido = $_POST['email'];
        $mensagem_recebida = $_POST['mensagem'];

        // 4. Comando SQL preparado (segurança)
        $sql = "INSERT INTO contatos (nome, email, mensagem) 
                VALUES (:nome, :email, :mensagem)";
        
        $stmt = $conexao->prepare($sql);

        // 5. Ligando os dados aos campos
        $stmt->bindParam(':nome', $nome_recebido);
        $stmt->bindParam(':email', $email_recebido);
        $stmt->bindParam(':mensagem', $mensagem_recebida);

        // 6. Executando e mostrando resultado
        if ($stmt->execute()) {
            echo "<h1>✅ Sucesso!</h1>";
            echo "<p>Dados salvos no banco de dados corretamente.</p>";
            echo "<a href='index.html'>Voltar para o formulário</a>";
        } else {
            echo "<p>❌ Erro ao tentar salvar os dados.</p>";
            echo "<a href='index.html'>Voltar</a>";
        }
    }

} catch (PDOException $e) {
    // Mostra erro de conexão
    die("❌ Erro ao conectar com o banco de dados: " . $e->getMessage());
}

// Fecha a conexão
$conexao = null;
?>