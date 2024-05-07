<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] == 'user') {
    header('location: ../user_index/user_index.php');
    exit(); // Menghentikan eksekusi skrip PHP setelah mengalihkan pengguna
}

if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin') {
    header('location: ../admin_index/admin_index.php');
    exit(); // Menghentikan eksekusi skrip PHP setelah mengalihkan pengguna
}

    include ("../koneksi/koneksi.php");
    $username = "";
    $password = "";
    $error = "";
    if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == '' or $password == ''){
            $error = 
                    "<ul class='ul-error'>
                        <li class='li-error'>
                            <span class='error'>Silahkan Masukan Username dan Password</span>
                        </li>
                    </ul>";
        } else {
            $sql_user = "SELECT * from user where username = '$username' and password ='$password'";
            $query_user = mysqli_query($conn,$sql_user);
            $r_user = mysqli_fetch_assoc($query_user);
            $cekdata_user= mysqli_num_rows($query_user);

            if($cekdata_user > 0){
                if ($r_user['status'] == "user"){
                    $_SESSION['status'] = $r_user ['status'];
                    $_SESSION['username'] = $r_user ['username'];
                    header("location:../user_index/user_index.php");
                } else if($r_user['status'] == "admin"){
                    $_SESSION['status'] = $r_user ['status'];
                    $_SESSION['username'] = $r_user ['username'];
                    header("location:../admin_index/admin_index.php");
                }
            } else {
                $error = 
                        "<ul class='ul-error'>
                            <li class='li-error'>
                                <span class='error'>Username atau password tidak valid</span>
                            </li>
                        </ul>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div id="app" class="f-container">
        <div class="title">
            <div class="title-name">FOOTERS DAILY</div>

        </div>
        <div class="content">
            <div class="mini-banner-container">
                <div class="banner">
                    <img class="banner_text" src="../login_regis_image/banner_text.png">
                    <img class="order_now" src="../login_regis_image/order_now.png" href="index.php">
                </div>
                <div class="medsos">
                    <a href="https://www.Facebook.com/"><img class="facebook" src="../login_regis_image/facebook.png"></a>
                    <a href="https://www.discord.com/"><img class="discord" src="../login_regis_image/discord.png"></a>
                    <a href="https://www.instagram.com/"><img class="instagram" src="../login_regis_image/instagram.png"></a>
                    <a href="https://www.Facebook.com/"><img class="snapchat" src="../login_regis_image/snapchat.png"></a>

                </div>
            </div>
            <div class="login-container">
                <div class="login">
                    <div class="login-input">
                        <form method="post" action="">
            
                            <div class="login-title">Log In</div>
                           
                            <div class="label"><label for="username">Username<span class="warning" > *</span></label></div>
                            <input class="input-text" value="<?php echo $username ?>" type="text" placeholder="Ex : Alif Abyan" id="username" name="username"minlength="6">

                            <div class="label"><label for="password">Password<span class="warning" > *</span></label></div>
                            <input class="input-text" value="<?php echo $password ?>" type="password" placeholder="Ex : *****" id="password" name="password"minlength="6">

                            <?php
                                if ($error) {
                                    echo "$error";
                                }
                            ?>

                            <input type="submit" class="login-button" value="login" name="login">
                        </form>

                            <a class="lupa-password" href="register.php">Lupa Password</a>
                            <div class="or">
                                <div class="or1"></div>
                                <div class="or2"> or </div>
                                <div class="or1"></div>
                            </div>
                            <div class="another-login">
                                <div class="another1">
                                    <div class="a1-container">
                                        <img class="a-logo" src="../login_regis_image/instagram.png"></img>
                                        <div class="a-name">Instagram</div>
                                    </div>
                                </div>
                                <div class="or2">  </div>
                                <div class="another2">
                                    <div class="a1-container">
                                        <img class="a-logo" src="../login_regis_image/facebook.png"></img>
                                        <div class="a-name">Facebook</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="daftar-link-line">
                                <div class="daftar-link">Belum punya akun?<a class="daftar-link-1" href="../register/register.php"> Daftar</a></div>
                            </div>

                    </div>
                </div>
            </div>

        </div>
    </div>    
</body>
</html>