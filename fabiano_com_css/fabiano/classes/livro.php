<?php
class Livro {
    private int $id;
    private string $titulo;
    private string $autor;
    private string $ano;
    private string $isbn;

    public function __construct(string $titulo, string $autor, string $ano, string $isbn, int $id = 0) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->isbn = $isbn;
        $this->id = $id;
    }

    public function getId(): int { return $this->id; }
    public function getTitulo(): string { return $this->titulo; }
    public function getAutor(): string { return $this->autor; }
    public function getAno(): string { return $this->ano; }
    public function getIsbn(): string { return $this->isbn; }
}
