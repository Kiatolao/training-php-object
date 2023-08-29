<?php
//instance avec propriété spécifique
$pdo = new PDO('sqlite:data.db', null, null,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

$error = null;
//capture l'exception en cas d'erreur
try {
//update database     
    if (isset($_POST['title'], $_POST['content'])) {
        $query= $pdo->prepare('UPDATE posts SET title = :title, content = :content WHERE id= :id');
        $query->execute([
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'id' => $_GET['id']
        ]);
    }
// SECURTITé! requete préparée qui empeche les injections SQL    
    $query = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $query->execute([
        'id' => $_GET['id']
    ]);
    $post = $query->fetch();
}
catch(PDOException $e) {
    $error = $e->getMessage();
}

?>

<?php if ($error) : ?>
    <p>Error <?=$error?></p>
<?php else :?>
<!-- recupère la data de la databse     -->
<ul>
    <form action="post">
        <div>
            <input type="text" name="title" value="<?= htmlentities($post->title)?>">
        </div>
        <div>
            <textarea name="content" id="" cols="30" rows="10"><?=htmlentities($post->content)?></textarea>
        </div>
    </form>
    <button>Sauvergarder</button>

</ul>
<?php endif ?>