<?php

require_once("connector.php");
$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM crud WHERE id = $id");

if($query){
    header('Location: crud.php?status=berhasil&from=hapus');
}
else{
    header('Location: crud.php?status=gagal&from=hapus');
}
?>