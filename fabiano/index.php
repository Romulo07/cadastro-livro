<?php
// index.php
require_once 'db.php';
require_once 'classes/Livro.php';
require_once 'classes/LivroRepository.php';

$repo = new LivroRepository($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['acao'] === 'salvar') {
    $livro = new Livro($_POST['titulo'], $_POST['autor'], $_POST['ano'], $_POST['isbn']);
    $repo->salvar($livro);
    header("Location: index.php");
    exit;
}

if (isset($_GET['excluir'])) {
    $repo->excluir((int)$_GET['excluir']);
    header("Location: index.php");
    exit;
}

$livros = $repo->listar();

include 'views/form.php';
include 'views/list.php';   