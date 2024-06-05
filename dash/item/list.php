<?php


$stmt = $pdo->query('SELECT label FROM role');
while ($row = $stmt->fetch())
{
    echo '<a href="index.php?page=edit@id='. $row['label'].'">' . "<br>";
}
