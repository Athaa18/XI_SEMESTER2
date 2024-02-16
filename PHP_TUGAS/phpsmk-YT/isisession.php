<?php 

    session_start();
    echo $_SESSION['user'];
    echo $_SESSION['nama'];
    echo "<br>";
    echo $_SESSION['alamat'];

    foreach ($_SESSION as $key => $value) {
        echo $key.'=>'.$value.'<br>';
    }

        
?>