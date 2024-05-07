<?php 
include ("../koneksi/koneksi.php");

session_start();
if (isset($_SESSION['status'])) {
    header("location:../login/login.php");
}

$search_query = "";

// Memeriksa apakah ada kata kunci pencarian yang dikirimkan
if(isset($_GET['search'])) {
    // Menghindari injeksi SQL dengan membersihkan dan mengambil kata kunci pencarian
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
}

// Membuat query untuk mencari sepatu berdasarkan nama
$query = "SELECT * FROM sepatu";
if (!empty($search_query)) {
    $query .= " WHERE nama_sepatu LIKE '%$search_query%'";
}
$query .= ";";

// Menjalankan query
$sql = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="wrapper">
        <div class="brand">
            <div class="Firstname">Footers</div>
            <div class="Lastname">Daily</div>
        </div>
        <ul class="navigation">
            <li><a href="../logout/logout.php">login</a></li>
            <li><a href="../login/login.php">Home</a></li>
            <li><a href="">about</a></li>
        </ul>
    </nav>
    <div id="app" class="f-container">
        <div class="header">
            <div class="header-line">
                <div class="search-area">
                    <form action="" method="get" class="search-form">
                        <input class="search-bar" type="text" name="search" value="<?php echo $search_query; ?>" placeholder="Cari...">
                        <button type="submit" class="submit-search" value="''"><img src="../button_image/search.png" class="search-image"></button>
                    </form>
                </div>
                <div class="mini-profile-area">
                    <a href="" class="keranjang"> <img src="../button_image/keranjang.png" class="keranjang-image" ></a>
                    <a href="" class="profile"><img src="../button_image/profile.png" class="profile-image"></a>
                    <span class="username">Guest</span>
                </div>
            </div> 
        </div>
        <div class="content">
            <div class="content-container">
                <div class="content-header">
                    <div class="content-title">Rekomendasi</div>
                </div>
                <div class="content-first">
                    <?php while ($result = mysqli_fetch_assoc($sql)): ?>
                        <div class="sepatu-container">
                            <div class="sepatu">
                                <a class="sepatu-image-container" href="../sepatu/sepatu.php?detail=<?php echo $result['id_sepatu'];?>"><img src="../image_sepatu/<?php echo $result['image_sepatu'];?>" class="sepatu-image"></a>
                                <span class="nama-sepatu"><?php echo substr($result['nama_sepatu'], 0, 50); ?></span>
                                <span class="rp">Rp <span class="harga-sepatu"><?php echo $result['harga_sepatu'];?></span></span>
                                <div class="grade-edit-delete">
                                    <div class="grade-container">
                                        <img src="../button_image/grade-5.png" class="grade">
                                    </div>
                                    <div class="like-container">
                                        <div class="like-sign"><img src="../button_image/like.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>