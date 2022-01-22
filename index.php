<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<a href="add.php">Add Data</a>
<h2>List Data Siswa</h2>
<table>
    <tr> <th>id</th><th>nama</th><th>jenis_kelamin</th><th>hoby</th><th>alamat</th><th>action</th>
    hoby</th></tr>
    <?php
    include_once("conection.php");
    $data=mysqli_query($connect,"SELECT * FROM tbl_siswa1");
    while($datauser=mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $datauser['id'];?></td>
    <td><?php echo $datauser['nama'];?></td>
    <td><?php echo $datauser['jenis_kelamin'];?></td>
    <td><?php echo $datauser['hoby'];?></td>
    <td><?php echo $datauser['alamat'];?></td>
    <td><?php echo $datauser['action'];?></td>
</tr>
<?php
    }
    ?>
</table>
</body>
</html>
