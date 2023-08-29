<?php
$pdo = new PDO('sqlite:/data.db');
$pdo->query('SELECT * FROM posts');