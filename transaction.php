<?php
$pdo = new PDO('sqlite:data.db', null, null,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);
// pour effectuer une action les une apres les autres avec transaction
$pdo->beginTransaction();
$pdo->query('DELETE FROM posts LIMIT 1');
$pdo->query('DELETE FROM posts LIMIT 1');
// il est possible de revenir en arrière avec rollBack à la place de commit
$pdo->commit();