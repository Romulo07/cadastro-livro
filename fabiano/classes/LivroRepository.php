<?php
require_once 'Livro.php';

class LivroRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listar(): array {
        $stmt = $this->pdo->query("SELECT * FROM livro");
        $livros = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $livros[] = new Livro(
                $row['titulo'],
                $row['autor'],
                $row['ano'],
                $row['isbn'],
                $row['id']
            );
        }
        return $livros;
    }

    public function salvar(Livro $livro): void {
        $stmt = $this->pdo->prepare("INSERT INTO livro (titulo, autor, ano, isbn) VALUES (?, ?, ?, ?)");
        $stmt->execute([
            $livro->getTitulo(),
            $livro->getAutor(),
            $livro->getAno(),
            $livro->getIsbn()
        ]);
    }

    public function excluir(int $id): void {
        $stmt = $this->pdo->prepare("DELETE FROM livro WHERE id = ?");
        $stmt->execute([$id]);
    }
}
