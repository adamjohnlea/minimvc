<?php

require 'utils/functions.php';
// require 'router.php';

// connect to MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn, 'root', 'only14Left');

$statement = $pdo->prepare('select * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
	echo "<li>" . $post['title'] . '</li>';
}
