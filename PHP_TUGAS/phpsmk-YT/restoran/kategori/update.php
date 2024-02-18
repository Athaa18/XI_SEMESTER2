
<?php 

    require_once"../function.php";

    
    $sql="SELECT * FROM tblkategori WHERE idkategori=$id";
    $result=mysqli_query($koneksi,$sql);
    $row=mysqli_fetch_assoc($result);

    

    // $kategori='es jus';
    // $id=20;
    // $sql="UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id ";

    // $result=mysqli_query($koneksi,$sql);

    // echo $sql;

?>
<form action="" method="post">
    kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>
<?php 

    if (isset($_POST['simpan'])) {
        $kategori=$_POST['kategori'];
        
        $sql="UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id ";

        $result=mysqli_query($koneksi,$sql);
        header("location:http://localhost/XI_SEMESTER2/PHP_TUGAS/phpsmk-yt/restoran/kategori/select.php");
    }

?>