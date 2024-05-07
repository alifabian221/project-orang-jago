<?php 
include ("../koneksi/koneksi.php");

session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] == 'user') {
    header('location: ../login/login.php');
    exit(); // Menghentikan eksekusi skrip PHP setelah mengalihkan pengguna
}

// Inisialisasi variabel pencarian
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
    <link rel="stylesheet" href="admin_index.css">
    <title>Document</title>
</head>
<body>
    <nav class="wrapper">
        <div class="brand">
            <div class="Firstname">Footers</div>
            <div class="Lastname">Daily</div>
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
                        <input class="search-bar" type="text" name="search" value="<?php echo $search_query; ?>" placeholder="Cari...">
                        <button type="submit" class="submit-search" value="''"><img src="../button_image/search.png" class="search-image"></button>
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
                    <div class="content-title">Rekomendasi</div>
                    <div class="tambah-sepatu-container"><a href="../tambah_sepatu/tambah_sepatu.php" class="tambah-sepatu">Tambah Sepatu</a>
                    </div>
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
                                    <div class="edit-delete-container">
                                        <a href="../tambah_sepatu/tambah_sepatu.php?edit=<?php echo $result['id_sepatu'];?>" class="edit-button"><img src="../button_image/edit.png"></a>
                                        <a href="../proses/proses.php?delete=<?php echo $result['id_sepatu'];?>" class="delete-button" onClick="return confirm('Apakah yakin ingin dihapus ???')" ><img src="../button_image/delete.png" ></a>
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
