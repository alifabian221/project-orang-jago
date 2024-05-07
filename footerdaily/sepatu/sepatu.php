<?php session_start();
    if(!isset($_SESSION['status'])){
        header ('location:../login/login.php');

    }

    include("../koneksi/koneksi.php");
    
    if (isset($_GET['detail'])){
        $id_sepatu = $_GET['detail'];
        $query="SELECT * FROM sepatu WHERE id_sepatu = '$id_sepatu';";
        $sql= mysqli_query ($conn,$query);
        $result = mysqli_fetch_assoc($sql);

        $sepatu_image = $result['image_sepatu'];
        $merk_sepatu = $result['merk_sepatu'];
        $nama_sepatu = $result['nama_sepatu'];
        $harga_sepatu = $result['harga_sepatu'];
        $deskripsi_sepatu = $result['deskripsi_sepatu'];    
        $size_27 = $result['size_27'];
        $size_28 = $result['size_28'];
        $size_29 = $result['size_29'];
        $size_30 = $result['size_30'];
        $size_31 = $result['size_31'];
        $size_32 = $result['size_32'];
        $size_33 = $result['size_33'];
        $size_34 = $result['size_34'];
        $stock_sepatu = $result['stock_sepatu'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sepatu.css">
    <title>Document</title>
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
                    
                </div>
                <div class="content-first">
                    <div class="sepatu-image-container">
                        <img src="../image_sepatu/<?php echo $sepatu_image ?>" class="sepatu-image">
                    </div>
                    <div class="informasi-sepatu">
                        <div class="merk-sepatu"><?php echo $merk_sepatu?></div>
                        <div class="nama-sepatu"><?php echo $nama_sepatu?></div>
                        <div class="harga-sepatu-container"><span class="rp">Rp <span class="harga-sepatu"><?php echo $harga_sepatu?></span></span></div>
                        <div class="rating-ulasan">
                            <img src="../button_image/grade-5.png"class="rating-image">
                            <span class="rating-5">(5)</span>
                            <a href="" class="ulasan">Tulis ulasan</a>
                        </div>
                        <div class="deskripsi-sepatu"><?php echo $deskripsi_sepatu?></div>
                        <div class="size-header">
                            <div class="size-title">Size</div>
                            <div class="panduan-ukuran-container">
                                <a href="" class="panduan-ukuran">Panduan Ukuran</a>
                            </div>
                        </div>
                        <form action="" method="" class="size-kuantitas">
                            <div class="size-button-container">
                                <div class="size-custom">
                                    <input type="radio" id="size-1" name="option" value="27" class="size" required>
                                    <label for="size-1">27</label>
                                </div>
                                <div class="size-custom">
                                    <input type="radio" id="size-2" name="option" value="28" class="size" required>
                                    <label for="size-2">28</label>
                                </div>
                                <div class="size-custom">
                                    <input type="radio" id="size-3" name="option" value="29" class="size" required>
                                    <label for="size-3">29</label>
                                </div>
                                <div class="size-custom">
                                    <input type="radio" id="size-4" name="option" value="30" class="size" required>
                                    <label for="size-4">30</label>
                                </div>
                                <div class="size-custom">
                                    <input type="radio" id="size-5" name="option" value="31" class="size" required>
                                    <label for="size-5">31</label>
                                </div>
                                
                            </div>
                            <div class="kuantitas-header">
                                <div class="size-title">Kuantitas</div>
                            </div>
                            <div class="kuantitas-container">
                                <input type="number" class="kuantitas" name="kuantitas" id="kuantitas" placeholder="Stock = <?php echo $stock_sepatu?> " max="<?php echo $stock_sepatu?>" required>
                                <button class="masukan-keranjang"><img src="../button_image/keranjang.png" > Masukan Keranjang </button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>