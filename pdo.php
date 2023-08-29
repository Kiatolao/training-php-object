<?php
//instance avec propriété spécifique
$pdo = new PDO('sqlite:data.db', null, null,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
$error = null;
//capture l'exception en cas d'erreur
try {
    $query = $pdo->query('SELECT * FROM posts');
    $posts = $query->fetchAll();
}
catch(PDOException $e) {
    $error = $e->getMessage();
}
print_r($posts);
echo '</pre>';
?>

<?php if ($error) : ?>
    <p>Error <?=$error?></p>
<?php else :?>
<!-- recupère la data de la databse     -->
<ul><?php foreach($posts as $post) :?>
    <li><?= $post->title?></li>
    <?php endforeach?>
</ul>
<?php endif ?>