<?php
require_once("./db.php");

if (isset($_POST["submit"])) {
    $title = $content = $author = "";
    if (isset($_POST["title"]))
        $title = cleanInput($_POST["title"]);
    if (isset($_POST["content"]))
        $content = cleanInput($_POST["content"]);
    if (isset($_POST["author"]))
        $author = cleanInput($_POST["author"]);

    $query = 'INSERT INTO story (title, content, author)
              VALUES (:title, :content, :author);';
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->bindValue(':author', $author, PDO::PARAM_STR);
    $statement->execute();
    header("Location:/index.php");
}

?>

<form action="/create.php" method="post">
    <input type="text" name="title" placeholder="title"><br>
    <textarea name="content" placeholder="content"></textarea>
        <br>
    <input type="text" name="author" placeholder="author"><br>
    <button name="submit">Submit</button>
</form>
