<?php 
if (empty($error)){
    $sql1 = "select * from admin where username = '$username'";
    $q1 = mysqli_query($conn,$sql1);
    $r1 = mysqli_fetch_assoc($q1);

    $sql2 = "select * from user where username = '$username'";
    $q2 = mysqli_query($conn,$sql2);
    $r2 = mysqli_fetch_assoc($q2);

    if($r2 ['password'] != ($password)){
        $error .= "<ul class='ul-error'><li class='li-error'><span class='error'>Akun Tidak Ditemukan</span></li></ul>";

     }else if ($r1 ['password'] != ($password)){
        $error .= "<ul class='ul-error'><li class='li-error'><span class='error'>Akun Tidak Ditemukan</span></li></ul>";
     }
}
?>