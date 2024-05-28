<?php


$stmt = $pdo->query('SELECT firstname FROM employee');
while ($row = $stmt->fetch())
{
    echo $row['firstname'] . "<br>";
}


