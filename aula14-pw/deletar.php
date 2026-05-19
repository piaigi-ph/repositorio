<?php
$host = 'localhost';
$dbname = 'projeto_site';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contatos WHERE id = :id";
    $STMT = $conexao->prepare($sql);

    $STMT->bindParam(':id', $id, PDO::PARAM_INT);
    $STMT->execute();
}
    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    die("Erro ao deletar mensagem: " . $e->getMessage());
}
?>