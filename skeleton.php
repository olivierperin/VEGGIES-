<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css" />
    <link rel="stylesheet" href="./assets/css/home.css" />
    <link rel="stylesheet" href="./assets/css/about.css" />
    <link rel="stylesheet" href="./assets/css/legumes.css" />
    <link rel="stylesheet" href="./assets/css/panier.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />



    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;700&display=swap"
    />

    <title>Document</title>
</head>
<body>
    
      <?php include './includes/header.php'; ?>

      <?php include './includes/navbar.php'; ?>
   
      <?php include 'pages/' . $page . '.php'; ?>
   
    <?php include './includes/footer.php'; ?>

 
  
</body>

</html>