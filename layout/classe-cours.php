<?php require_once __DIR__ . '/../pdo/dsn.php';

class Cours {

    public function __construct(
        private int $id,
        private string $chapitre,
        private string $contenu,
    ) {
    }
    public function getId(): int {
        return $this->id;
    }
    public function getChapitre(): string {
        return $this->chapitre;
    }
    public function setChapitre(string $chapitre): void {
        $this->chapitre = $chapitre;
    }
    public function getContenu(): string {
        return $this->contenu;
    }
    public function setContenu(string $contenu): void {
        $this->contenu = $contenu;
    }
}