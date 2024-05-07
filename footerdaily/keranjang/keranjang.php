<?php 
include ("../koneksi/koneksi.php");

session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] == 'user') {
    header('location: ../login/login.php');
    exit(); // Menghentikan eksekusi skrip PHP setelah mengalihkan pengguna
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="keranjang.css">
</head>
<body>
    <nav class="wrapper">
        <div class="brand">
            <div class="Firstname">Footers</div>
            <div class="Lastname">daily</div>
        </div>
            <ul class="navigation">
                <li><a href="../logout/logout.php">Logout</a></li>
                <li><a href="../login/login.php">Home</a></li>
                <li><a href="">about</a></li>
            </ul>
     </nav>
     <div id="app" class="f-container">
        <div class="header">
            <div class="header-line">
                    <div class="search-area">
                        <form action="" method="get" class="search-form">
                            <input class="search-bar" type="text" name="search">
                            <button type="submit" href="" class="submit-search" value="''"><img src="../button_image/search.png" class="search-image"></button>
                        </form>
                    </div>
                    <div class="mini-profile-area">
                        <a href="" class="keranjang"> <img src="../button_image/keranjang.png" class="keranjang-image" ></a>
                        <a href="" class="profile"><img src="../button_image/profile.png" class="profile-image"></a>
                        <span class="username"><?php echo $_SESSION['username']?></span>
                </div>
            </div> 
        </div>
        <div class="content">
            <div class="content-container">
                <div class="content-header">
                    <div class="content-title">Keranjang Belanja</div>
                </div>
                <div class="content-first">
                    <div class="table-container">
                        <table class="table">
                            <thead class="table-head">
                                <tr class="tr-head">
                                    <th class="th-1">Item</th>
                                    <th class="th-2">Harga</th>
                                    <th class="th-3">kuantitas</th>
                                    <th class="th-4">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="ringkasan-belanja-container">
                        <div class="ringkasan-belanja-sub-container">
                            <div class="ringkasan-belanja">
                                <div class="ringkasan-belanja-title">Ringkasan Belanja</div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        

    </div>

    
</body>
</html>