<?php // classes/PieceEchecs
class PieceEchecs
{
    // Propriété

    private $x; // colonne
    private $y; // ligne
    private $couleur; // 1 blanc, 2 noir
    public const BLANC = 1;
    public const NOIR = 2;

    // Constructeur

    public function __construct(int $x, int $y, int $couleur)
    {
        $this->setX($x);
        $this->setY($y);
        $this->setCouleur($couleur);
    }

    // Accesseurs (setters, getters)

    private function setX(int $x)
    {
        if ($x < 1 || $x > 8)
            throw new PieceEchecsException("Problème coordonnée X incorrecte");
        $this->x = $x;
        return $this;

    }
    protected function getX(): int
    {
        return $this->x;
    }

    private function setY(int $y)
    {
        if ($y < 1 || $y > 8)
            throw new PieceEchecsException("Problème coordonnée Y incorrecte");
        $this->y = $y;
        return $this;
    }
    protected function getY(): int
    {
        return $this->y;
    }

    private function setCouleur(int $couleur)
    {
        if ($couleur === self::BLANC)
            $this->couleur = self::BLANC;
        else if ($couleur === self::NOIR)
            $this->couleur = self::NOIR;
        else
            throw new PieceEchecsException("ERREUR couleur incorrecte");
    }

    public function getCouleur(): int
    {
        return $this->couleur;
    }

    public function __toString(): string
    {
        return get_class($this) . " " . ($this->couleur === self::BLANC ? "Blanc" : "Noir")
            . " en ($this->x, $this->y)";
    }
}
?>