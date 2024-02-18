<?php 

    require_once"../function.php";

    

    $sql="DELETE FROM tblkategori WHERE idkategori=$id";

    $result=mysqli_query($koneksi,$sql);

    header("location:http://localhost/XI_SEMESTER2/PHP_TUGAS/phpsmk-yt/restoran/kategori/select.php");




?>