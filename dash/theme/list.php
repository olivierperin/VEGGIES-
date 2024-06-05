<?php


$stmt = $pdo->query('SELECT lastname FROM employee');
while ($row = $stmt->fetch())
{
    echo $row['lastname'] . "<br>";
}
