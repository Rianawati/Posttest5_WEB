<?php
    session_start();
    if(isset($_SESSION['login_user'])){
        header("Location:login.php");
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest4</title>
</head>
<body>
    <div class="nav">
        <nav>
            <img src="LogoToko.png" class="logo" width="160px" height="130px">
            <ul>
                <li><a href= "index.html">Home</a></li>
                <li><a href= "about.html" >About Me</a></li>
                <li><a href= "hotItem.html" >Hot Item</a></li>
                <li><a href= "pesanan.html" >Pesanan Barang</a></li>
                <li><a href= "#" >Contact Us</a></li>
            </ul>
            <input type="checkbox" onclick="ubahMode()">
        </nav>
    </div>
    <div class="header">
        <div class="header-logo">Bintang Jaya Elektronik </div>
        <a href="hotItem.html" >Hot Item </a>
    </div>

    <div class="contents">
            <h3 class="section-tittle">Hot Item</h3>
            <div class="contents-item">
    </div>
</div>

<script>
    function ubahMode(){
        const ubah = document.body;
        ubah.classList.toggle("dark");
    }
    </script>



</body>
</html>