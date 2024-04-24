<?php

echo "fdfd";

if (isset($_GET['page'])) {
    if(file_exists($_GET['page']. '.php')){
        include($_GET['page']. '.php');
    }
    else {
        echo "pas de fichier";
    }
}

echo "ert"

?>
