<?php
//instance avec propriété spécifique
$pdo = new PDO('sqlite:data.db', null, null,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$error = null;
//capture l'exception en cas d'erreur
try {
// SECURTITé! requete préparée qui empeche les injections SQL    
    $query = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $query->execute([
        'id' => $_GET['id']
    ]);
    $posts = $query->fetch();
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
    <li><?= htmlentities($post->title)?></li>
    <?php endforeach?>
</ul>
<?php endif ?>