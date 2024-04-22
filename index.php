<?php

if (isset($_GET['page'])) {
    if(file_exists($_GET['page']. '.php')){
        include($_GET['page']. '.php');
    }
}


?>
