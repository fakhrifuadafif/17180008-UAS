<?php

    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $hoby=$_POST['hoby'];
    $alamat=$_POST['alamat'];
    $action=$_POST['action'];
    include_once("conection.php");
    $result=mysqli_query($connect,"INSERT INTO tbl_siswa1(id,nama,jenis_kelamin,hoby,alamat,action) VALUES ('$id','$nama','$jenis_kelamin','$hoby','$alamat','$action')"

    if($result){
         echo "<script>alert('Data Sucessfully');window.location.href='index.php';</script>";
    }
?>