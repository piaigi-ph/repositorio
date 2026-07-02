<?php

$host = 'localhost';
$dbname = 'projeto_site';
$usuario = 'root';
$senha = '';

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
    if(isset($_GET['id'])){
        $id = $_GET['id'];

       
        $sql = "DELETE FROM contatos WHERE id = :id";
        $stmt = $conexao->prepare($sql);

      
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

       
        header("Location: listar.php");
        exit();
    }

} catch (PDOException $e) {
    die("Erro ao tentar deletar: " . $e->getMessage());
}
?>