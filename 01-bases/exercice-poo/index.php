<?php 
    require __DIR__.'/Book.php';
    $b = new Book('Harry Potter à l\'école des sorciers', 250);
    echo $b->page(); // 1
    var_dump($b);
    $b->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
    var_dump($b);
    echo $b->page(); // 2
    var_dump($b);
    $b->close(); // ferme le livre (reviens à la page 1)
    echo $b->page();
    var_dump($b);
    
?>


<!-- <p>On est sur la page <?= $b->page(); ?></p>
<p>on tourne la page <?= $b->nextPage(); $b->page();?> fois </p>
<p>on est sur la page </p>
<p>on ferme le livre</p>
<?= $b->close(); ?>
<p>On est sur la page <?= $b->page(); ?></p> -->

<?php 
    require __DIR__.'/Library.php';
    $l = new Library();
    $l->addBook($b); // Ajoute le livre b dans un tableau
    $l->addBooks([ // Ajoute les livres suivant dans un tableau
    new Book('Chambre des secrets', 300),
    new Book('Prisonnier d\'Azkaban', 400),
    new Book('Coupe de feu', 500),
    ]);
    var_dump($l);
    $l->findBooksByLetter('C'); // Trouve tous les livres qui commencent par cette lettre (array_filter ?)


?>