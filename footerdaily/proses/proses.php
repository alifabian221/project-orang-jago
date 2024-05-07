<?php 
include("../koneksi/koneksi.php");

if (isset($_POST['upload-edit'])){
    if ($_POST['upload-edit'] == "upload"){
        
        $sepatu_image = mysqli_real_escape_string($conn, $_POST['sepatu-image']);
        $merk_sepatu = mysqli_real_escape_string($conn, $_POST['merk-sepatu']);
        $nama_sepatu = mysqli_real_escape_string($conn, $_POST['nama-sepatu']);
        $harga_sepatu = mysqli_real_escape_string($conn, $_POST['harga-sepatu']);
        $deskripsi_sepatu = mysqli_real_escape_string($conn, $_POST['deskripsi-sepatu']);
        $size_27 = mysqli_real_escape_string($conn, $_POST['27']);
        $size_28 = mysqli_real_escape_string($conn, $_POST['28']);
        $size_29 = mysqli_real_escape_string($conn, $_POST['29']);
        $size_30 = mysqli_real_escape_string($conn, $_POST['30']);
        $size_31 = mysqli_real_escape_string($conn, $_POST['31']);
        $size_32 = mysqli_real_escape_string($conn, $_POST['32']);
        $size_33 = mysqli_real_escape_string($conn, $_POST['33']);
        $size_34 = mysqli_real_escape_string($conn, $_POST['34']);
        $kuantitas = mysqli_real_escape_string($conn, $_POST['kuantitas']);

        $query = "INSERT INTO sepatu VALUES (null, '$sepatu_image', '$merk_sepatu', '$nama_sepatu', '$harga_sepatu', '$deskripsi_sepatu', '$size_27', '$size_28', '$size_29', '$size_30', '$size_31', '$size_32', '$size_33', '$size_34', '$kuantitas')";
        $sql = mysqli_query($conn, $query);
        
        if ($sql) {
            header("location: ../admin_index/admin_index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else if ($_POST['upload-edit'] == "edit"){
        $id_sepatu = mysqli_real_escape_string($conn, $_POST['id-sepatu']);
        $sepatu_image = mysqli_real_escape_string($conn, $_POST['sepatu-image']);
        $merk_sepatu = mysqli_real_escape_string($conn, $_POST['merk-sepatu']);
        $nama_sepatu = mysqli_real_escape_string($conn, $_POST['nama-sepatu']);
        $harga_sepatu = mysqli_real_escape_string($conn, $_POST['harga-sepatu']);
        $deskripsi_sepatu = mysqli_real_escape_string($conn, $_POST['deskripsi-sepatu']);
        $size_27 = mysqli_real_escape_string($conn, $_POST['27']);
        $size_28 = mysqli_real_escape_string($conn, $_POST['28']);
        $size_29 = mysqli_real_escape_string($conn, $_POST['29']);
        $size_30 = mysqli_real_escape_string($conn, $_POST['30']);
        $size_31 = mysqli_real_escape_string($conn, $_POST['31']);
        $size_32 = mysqli_real_escape_string($conn, $_POST['32']);
        $size_33 = mysqli_real_escape_string($conn, $_POST['33']);
        $size_34 = mysqli_real_escape_string($conn, $_POST['34']);
        $stock = mysqli_real_escape_string($conn, $_POST['kuantitas']);

        $query="UPDATE sepatu SET image_sepatu='$sepatu_image',merk_sepatu='$merk_sepatu',nama_sepatu='$nama_sepatu',harga_sepatu='$harga_sepatu',deskripsi_sepatu='$deskripsi_sepatu',size_27='$size_27',size_28='$size_28',size_29='$size_29',size_30='$size_30',size_31='$size_31',size_32='$size_32',size_33='$size_33',size_34='$size_34',stock_sepatu='$stock' WHERE id_sepatu='$id_sepatu';";
        $sql= mysqli_query($conn,$query);
        
        if($sql){
            header("location: ../admin_index/admin_index.php");
        }

    }
}

if (isset($_GET['delete'])){
    $id_sepatu = $_GET['delete'];
    $query = "DELETE FROM sepatu WHERE id_sepatu = '$id_sepatu'";
    $sql = mysqli_query($conn, $query);
    
    if ($sql) {
        header("location: ../admin_index/admin_index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>