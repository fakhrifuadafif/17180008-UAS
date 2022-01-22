<?php
    $id=$datauser['id'];
    $nama=$datauser['nama'];
    $jenis_kelamin=$datauser['jenis_kelamin'];
    $hoby=$datauser['hoby'];
    $alamat=$datauser['alamat'];
    $action=$datauser['action'];

    include_once("conection.php");
$result=mysqli_query($connect,"UPDATE tbl_siswa1(id,nama,jenis_kelamin,hoby,alamat,action) VALUES ('$id','$nama','$jenis_kelamin','$hoby','$alamat','$action')"

if ($result)
{
    echo "<script>alert('Update was Sucessfully');window.location.href='index.php';</script>";
}
?>
