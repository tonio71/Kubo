<?php
include_once '../Persistence/connection.php';
include_once '../Model/Livro.php';
include_once '../Persistence/LivroDAO.php';

$r = $_POST;
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$anoPublic = $_POST['anoPublic'];
$edicao = $_POST['edicao'];
$editora = (int)$_POST['edit'];
$autor = $_POST['autor'];
$quant = (int)$_POST['quantidade'];

$connection = new Connection();
$conn = $connection->getConnection();
$dao = new LivroDao();

$liv = new Livro($isbn, $titulo, $editora, $anoPublic, $edicao, $autor, $quant);
$dao->salvarLivro($liv, $conn);

header("location: ../view/livros.php");

?>
<!--DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../view/livros.php" class="btn btn-primary">voltar</a>
</body>
</html>