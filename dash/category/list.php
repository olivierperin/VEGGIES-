<?php


$stmt = $pdo->query('SELECT id, firstname FROM employee');
while ($row = $stmt->fetch())
{
    echo '<a href="index.php?page=edit&entity=category&id=' . $row['id'] . '">'.$row['firstname'] . "</a><br>";
    echo $row['id'];
}