<?php


$stmt = $pdo->query('SELECT label FROM Formateurs');
while ($row = $stmt->fetch())
{
    echo $row['label'] . "<br>";
}
