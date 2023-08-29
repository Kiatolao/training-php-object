<?php
$pdo = new PDO('sqlite:data.db');
$query = $pdo->query('SELECT * FROM posts');
if($query === false) {
    var_dump($pdo->errorInfo());
    die('Erreur SQL');
}
$posts = $query->fetchAll(PDO::FETCH_OBJ);
print_r($posts);
echo '</pre>';
?>

<ul><?php foreach($posts as $post) :?>
    <li><?= $post->title?></li>
    <?php endforeach?>
</ul>