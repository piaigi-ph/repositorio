<?php

$host = 'localhost';
$dbname = 'projeto_site';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        
        $sql = "UPDATE contatos 
                SET nome = :nome, email = :email, mensagem = :mensagem 
                WHERE id = :id";

        $stmt = $conexao->prepare($sql);

       
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mensagem', $mensagem);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

       
        $stmt->execute();

     
        header("Location: listar.php");
        exit;
    }

} catch (PDOException $e) {
    die("Erro ao atualizar: " . $e->getMessage());
}
?>