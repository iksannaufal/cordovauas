<?php
include "db.php";
$data=array();
$q=mysqli_query($koneksi,"select * from `data`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>