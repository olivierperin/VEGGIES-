<?php

require_once'../connection.php';

$sql="SELECT *FROM category";
$res=$pdo->query ($sql);
$categories=$res->fetch(All);

foreach 

