<?php
class Fou extends PieceEchecs
{
    public function peutAllerA(int $x, int $y): bool
    {
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8)
            return false;
        if ($x === $this->getX() && $y === $this->getY())
            return false;
        if (abs($x - $this->getX()) === abs($y - $this->getY()))
            return true;
        else
            return false;
    }
}
?>