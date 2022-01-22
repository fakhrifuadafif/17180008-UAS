<?php
    $id=$_GET['id'];

    include_once("conection.php");
$result=mysqli_query($connect,"DELETE FROM tbl_siswa1 where id='$id'");

if ($result)
{
    echo "<script>alert('Delete Data Sucessfully');window.location.href='index.php';</script>";
}
?>