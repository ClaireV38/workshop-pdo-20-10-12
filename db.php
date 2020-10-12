<?php
require_once('../connec.php');
$pdo = new PDO(DSN, USER, PWD, [
    PDO::ATTR_STRINGIFY_FETCHES => PDO::FETCH_ASSOC,
]);

function cleanInput(string $str): ?string
{
    if($str === "") return null;
    $str = trim($str);
    $str = stripslashes($str);
    $str =  htmlspecialchars($str);
    return $str;
}