<?php 
session_start();
    if (!isset($_SESSION['status']) || $_SESSION['status'] == 'user') {
        header('location: ../login/login.php');
        exit(); // Menghentikan eksekusi skrip PHP setelah mengalihkan pengguna
    }

    include("../koneksi/koneksi.php");
    $id_sepatu="";
    $sepatu_image = "";
    $merk_sepatu = "";
    $nama_sepatu = "";
    $harga_sepatu = "";
    $deskripsi_sepatu = "";    
    $size_27 = "";
    $size_28 = "";
    $size_29 = "";
    $size_30 = "";
    $size_31 = "";
    $size_32 = "";
    $size_33 = "";
    $size_34 = "";
    $stock_sepatu = "";

    if (isset($_GET['edit'])){
        $id_sepatu = $_GET['edit'];
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
    <link rel="stylesheet" href="tambah_sepatu.css">
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
                            <button type="submit" href="" class="submit-search" value=""><img src="../button_image/search.png" class="search-image"></button>
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
                <form action="../proses/proses.php" class="form-sepatu" method="post">
                    <input type="hidden" value="<?php echo $id_sepatu; ?>" name="id-sepatu">
                    <div class="sepatu-image-container">
                        <label for="sepatu-image" class="sepatu-image-upload">
                            file = 
                            <input type="file" id="sepatu-image" name="sepatu-image"  class="sepatu-image" value="../image_sepatu/<?php echo $sepatu_image?>" required><?php echo $sepatu_image?>\
                        </label>
                    </div>
                    <div class="informasi-sepatu">
                            <div class="merk-sepatu"><input type="text" name="merk-sepatu" id="merk-sepatu" class="input-merk-sepatu" placeholder="CONVERSE" maxlength="40" value="<?php echo $merk_sepatu?>" required></div>
                            <div class="nama-sepatu"><textarea name="nama-sepatu" id="nama_sepatu" class="input-nama-sepatu"    rows="4" placeholder="CONVERSE WOMEN'S CHUCK TAYLOR ALL STAR PLATFORM CANVAS SNEAKERS - BLACK/WHITE/WHITE" maxlength="240" required><?php echo $nama_sepatu?></textarea></div>
                            <div class="harga-sepatu-container">
                                <span class="rp">Rp </span>
                                <input type="text" class="harga-sepatu" name="harga-sepatu" id="harga_sepatu" value="<?php echo $harga_sepatu ?>" placeholder="1.390.000">
                            </div>
                            <div class="rating-ulasan">
                                <img src="../button_image/grade-5.png"class="rating-image">
                                <span class="rating-5">(5)</span>
                                <a href="" class="ulasan">Tulis ulasan</a>
                            </div>
                            <div class="deskripsi-sepatu">
                                <textarea class="deskripsi-sepatu-input" name="deskripsi-sepatu" id="deskripsi-sepatu"  rows="6" placeholder='UP HIGH. A canvas upper and double-stacked sole elevates the iconic, high-top look. With classic Chuck Taylor All Star design elements, like a star ankle patch and ""All Star"" license plate on the heel. EVA cushioning keeps it comfortable. Get lifted' maxlength="360" required><?php echo $deskripsi_sepatu?></textarea>
                            </div>
                            <div class="size-header">
                                <div class="size-title">Size</div>
                                <div class="panduan-ukuran-container">
                                    <a href="" class="panduan-ukuran">Panduan Ukuran</a>
                                </div>
                            </div>
                            <div class="size-button-container">
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="27" class="size" placeholder="27" maxlength="2" value ="<?php echo $size_27?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="28" class="size" placeholder="28" maxlength="2" value ="<?php echo $size_28?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="29" class="size" placeholder="29" maxlength="2" value ="<?php echo $size_29?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="30" class="size" placeholder="30" maxlength="2" value ="<?php echo $size_30?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="31" class="size" placeholder="31" maxlength="2" value ="<?php echo $size_31?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="32" class="size" placeholder="32" maxlength="2" value ="<?php echo $size_32?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="33" class="size" placeholder="33" maxlength="2" value ="<?php echo $size_33?>">
                                    </div>
                                    <div class="size-custom">
                                        <input type="text" id="size-1" name="34" class="size" placeholder="34" maxlenght="2" value ="<?php echo $size_34?>">
                                    </div>

                                    
                            </div>
                            <div class="kuantitas-header">
                                    <div class="size-title">Stock</div>
                                </div>
                                <div class="kuantitas-container">
                                    <input type="number" class="kuantitas" name="kuantitas" id="kuantitas" placeholder="1" max="100" value ="<?php echo $stock_sepatu?>" required>
                                    <?php 
                                        if (isset($_GET['edit'])){
                                    ?>
                                        <button type="submit" name="upload-edit" value="edit" class="masukan-keranjang"><img src="../button_image/keranjang.png" > Simpan Perubahan </button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="submit" name="upload-edit" value="upload" class="masukan-keranjang"><img src="../button_image/keranjang.png" > upload sepatu </button>

                                    <?php   
                                     }
                                    ?>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>