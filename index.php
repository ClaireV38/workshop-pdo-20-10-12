<?php
require_once("./db.php");

$query = 'SELECT title, content, author FROM story';
$statement = $pdo->query($query);
$stories = $statement->fetchAll();
?>

<ul>
    <?php foreach($stories as $story):  ?>
    <li>
        <h2><?= $story["title"] ?></h2>
        <p><?= $story["content"] ?></p>
        <p><?= $story["author"] ?></p>
    </li>
    <?php endforeach; ?>
</ul>