<h2>Lista de Livros</h2>
<table border="1">
    <tr>
        <th>ID</th><th>Título</th><th>Autor</th><th>Ano</th><th>ISBN</th><th>Ações</th>
    </tr>
    <?php foreach ($livros as $livro): ?>
    <tr>
        <td><?= $livro->getId() ?></td>
        <td><?= htmlspecialchars($livro->getTitulo()) ?></td>
        <td><?= htmlspecialchars($livro->getAutor()) ?></td>
        <td><?= htmlspecialchars($livro->getAno()) ?></td>
        <td><?= htmlspecialchars($livro->getIsbn()) ?></td>
        <td><a href="index.php?excluir=<?= $livro->getId() ?>">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>
