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
    // $p1 = new PieceEchecs(4, 4, 1);
    // echo $p1;
    echo "<br>";
    echo "<br>";
    $cavalier1 = new Cavalier(2, 5, 1);
    echo $cavalier1;
    echo "<br>";
    echo "<br>";
    echo var_dump($cavalier1->peutAllerA(4, 6)); // true
    echo "<br>";
    echo var_dump($cavalier1->peutAllerA(4, 5)); // false 
    echo "<br>";
    echo var_dump($cavalier1->peutAllerA(0, 6)); // false
    echo "<br>";
    $fou1 = new Fou(2, 5, 2);
    echo $fou1;
    // $pFausse = new PieceEchecs(4, 4, 3);
    // echo $pFausse;
    echo "<br>";
    echo "<br>";
    echo var_dump($fou1->peutAllerA(1, 4)); // true
    echo "<br>";
    echo var_dump($fou1->peutAllerA(2, 3)); // false
    echo "<br>";
    echo var_dump($fou1->peutAllerA(2, 5)); // false


} catch (PieceEchecsException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo "ERREUR GÉNÉRAL : " . $e->getMessage();
}
?>