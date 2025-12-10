<?php
class Cavalier extends PieceEchecs
{
    public function peutAllerA(int $x, int $y): bool
    {
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8)
            return false;
        if (pow($x - $this->getX(), 2) + pow($y - $this->getY(), 2) === 5)
            return true;
        else
            return false;
    }

    // V2 plus simple à comprendre
    //if ($posX < 1 || $posX > 8 || $posY < 1 || $posY > 8) return false;

    // $distX = abs($posX - $this->x);
    // $distY = abs($posY - $this->getY());

    // V1 - Somme 3 et dist != 0
    // if (($distX + $distY === 3) && $distX != 0 && $distY != 0) return true;
    // else return false;
}
?>