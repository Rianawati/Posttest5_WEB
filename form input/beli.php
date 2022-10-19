<?php
session_start();

$id_hotItem = $_GET['id_hotItem'];

if(isset($_SESSION['pesanan']))
{
    $_SESSION ['pesanan'] [$id_hotItem] + =1;
}

else{
    $_SESSION ['pesanan'] [$id_hotItem] = 1;
}

echo "<script>alert('Pesanan Anda Telah Berhasil');</script>";
echo "<script>location='pesanan.php'</script>";

?>