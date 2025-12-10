<?php // echecs.php
spl_autoload_register(function ($classe) {
    include "classes/" . $classe . ".class.php";
});

// $piece = new PieceEchecs(4, 7, 1);
// var_dump($piece);
// echo "<br>";
// echo "<br>";
// $piece2 = new PieceEchecs(0, 9, 2);
// var_dump($piece2);
// echo "<br>";
// echo "<br>";
// echo $piece;
// echo "<br>";
// echo "<br>";
// echo $piece2;

try {
    $p1 = new PieceEchecs(4, 4, 1);
    echo $p1;
    echo "<br>";
    echo "<br>";
    $pFausse = new PieceEchecs(4, 4, 3);
    echo $pFausse;
} catch (PieceEchecsException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo "ERREUR GÉNÉRAL : " . $e->getMessage();
}
?>