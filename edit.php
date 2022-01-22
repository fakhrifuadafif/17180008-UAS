<?php
include_once("conection.php");

$id = $_GET['username'];
$data=mysqli_query($connect,"SELECT *FROM tbl_siswa1 where='id'");
while($datauser=mysqli_fetch_array($data)){

    $id=$datauser['id'];
    $nama=$datauser['nama'];
    $jenis_kelamin=$datauser['jenis_kelamin'];
    $hoby=$datauser['hoby'];
    $alamat=$datauser['alamat'];
    $action=$datauser['action'];
}
?>

<from action="update.php" method="post" >
    <div>
    <div>
    <div style="background-color:;width:100px;float:left">
    id : </div>
    <div style="background-color:"><input type="text" name="id" value="<?php echo $id; ?>"readonly></div>
    </div>
    <div style="background-color:red;width:100px;float:left">
    nama : 
</div><div><input type="text" name="nama" value="<?php echo $nama;?>" name="nama";></div></div>
<br>
<div>
<div style=background-color:red;width:100px;float:left>
jenis_kelamin : 
</div><div><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin;?>" name="jenis_kelamin";></div></div>
<br>
<div>
<div style=background-color:red;width:100px;float:left>
hoby : 
</div><div><input type="text" name="hoby" value="<?php echo $hoby;?>" name="hoby";></div></div>
<br>
<div>
<div style=background-color:red;width:100px;float:left>
alamat : 
</div><div><input type="text" name="alamat" value="<?php echo $alamat;?>" name="alamat";></div></div>
<br>
<div>
<div style=background-color:red;width:100px;float:left>
action : 
</div><div><input type="text" name="action" value="<?php echo $action;?>" name="action";></div></div>
<br>
<div>
<div style=background-color:red;width:100px;float:left>
<input type="submit" name="update" value="update">
</from>