<?php

$sql = "SELECT * FROM employee WHERE id = :identifiant";
$res = $pdo->prepare($sql);
$res->execute(['identifiant' => $_GET['id']]);
$category = $res->fetch();



?>
<form action="category/save.php" method="POST">
    <input type="hidden" name="id" value="<?= $category['id'] ?>">
    <label for="">Label</label>
    <input type="text" name="label" value="<?php echo $category['firstname'] ?>">
    <button>Save</button>
</form>

<a href="index.php?page=list">Back</a>