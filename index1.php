<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
</head>
<body>
<a href="add.php">Add Data</a>
<h2>List Data User</h2>
<table>
    <tr> <th>id_siswa</th><th>nama_siswa</th><th>jenis_kelamin</th><th>alamat</th><th>
    hoby</th></tr>
    <?php
    include_once("conection.php");
    $data=mysqli_query(conect,"SELECT * FROM tbl_siswa");
    while($datauser=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $datauser['nama_siswa'];?></td>
    <td><?php echo $datauser['jenis_kelamin'];?></td>
    <td><?php echo $datauser['alamat'];?></td>
    <td><?php echo $datauser['hoby'];?></td>
    <td><?php echo $datauser['nama_siswa'];?></td>
</tr>
<?php
    }
    ?>
</table>
    </body>
</html>
