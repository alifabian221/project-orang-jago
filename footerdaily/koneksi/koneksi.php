<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'footersdaily';
    $conn = mysqli_connect($host,$user,$pass,$db);
    // if($conn){
    //     echo "Koneksi Berhasil bray";
    // }

    mysqli_select_db($conn,$db);

        if(!$conn){
            die ("Yah gagal koneksi.php nya lur"); 
        }
?>
