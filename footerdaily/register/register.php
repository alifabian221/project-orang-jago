<?php     
session_start();
if (isset($_SESSION['status'])) {
    header("location:../login/login.php");
}

include("../koneksi/koneksi.php");

$username = "";
$email = "";
$password = "";
$status = "user";
$c_password = "";
$error = "";

if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c-password'];


    if ($username == '' or $email == '' or $password == '' ){
        $error .= "<ul class='ul-error'>
                        <li class='li-error'>
                            <span class='error'>Silahkan isi data dengan lengkap</span>
                        </li>
                    </ul>";
    } else {
        // Pemeriksaan username
        $query_check_username = "SELECT * FROM user WHERE username = '$username'";
        $result_username = mysqli_query($conn, $query_check_username);
        if (mysqli_num_rows($result_username) > 0) {
            $error .= "<ul class='ul-error'>
                            <li class='li-error'>
                                <span class='error'>Username sudah digunakan</span>
                            </li>
                        </ul>";
        } else {
            $error."";
        }

        // Pemeriksaan email
        $query_check_email = "SELECT * FROM user WHERE email = '$email'";
        $result_email = mysqli_query($conn, $query_check_email);
        if (mysqli_num_rows($result_email) > 0) {
            $error = "<ul class='ul-error'>
                            <li class='li-error'>
                                <span class='error'>Email sudah digunakan</span>
                            </li>
                        </ul>";
        } else {
            $error ."";
        }

        // Pemeriksaan email
        $query_check_username_email = "SELECT * FROM user WHERE username = '$username' and email = '$email'";
        $result_username_email = mysqli_query($conn, $query_check_username_email);
        if (mysqli_num_rows($result_username_email) > 0) {
            $error .= "<ul class='ul-error'>
                            <li class='li-error'>
                                <span class='error'>Username & Email sudah di gunakan</span>
                            </li>
                        </ul>";
        } else {
            $error ."";
        }

        if ($password != $c_password) {
            $error .= "<ul class='ul-error'>
                            <li class='li-error'>
                                <span class='error'>Konfirmasi password tidak sesuai</span>
                            </li>
                        </ul>";
        }

        // Penyisipan data jika tidak ada error
        if (empty($error)) {
            $query = "INSERT INTO user (username, email, password, status) VALUES ('$username', '$email', '$password', '$status')";
            $sql = mysqli_query($conn, $query);
            if ($sql) {
                header("location:../login/login.php");
            } else {
                echo $query;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>
    <div class="f-container">
        <div class="title">
            <div class="title-name">FOOTERS DAILY</div>
        </div>
        <div class="content">
        <div class="signup-container">
                <div class="signup">
                    <div class="signup-input">
                        <form class="signup-form" action="" method="POST">
                            <div class="signup-title">Sign Up</div>

                            <div class="label"><label for="username">Username<span class="warning"> *</span></label></div>
                            <input class="input-text" value="<?php echo $username ?>" type="text" placeholder="Ex : Alif Abyan" id="username" name="username" minlength="6">

                            <div class="label"><label for="email">Email<span class="warning"> *</span></label></div>
                            <input class="input-text" value="<?php echo $email ?>" type="email" placeholder="Ex : alifabian221@gmail.com" id="email" name="email">

                            <div class="label"><label for="password">Password<span class="warning"> *</span></label></div>
                            <input class="input-text" value="<?php echo $password ?>" type="password" placeholder="Ex : *****" id="password" name="password" minlength="6">

                            <div class="label"><label for="c-password">Comfirm Password<span class="warning"> *</span></label></div>
                            <input class="input-text" value="<?php echo $c_password ?>" type="password" placeholder="Ex : *****" id="c-password" name="c-password" minlength="6">

                            <div class="warning-line">
                                <?php
                                    if ($error) {
                                        echo "$error";
                                    }
                                ?>
                            </div>

                            <input type="submit" class="signup-button" value="Register" name="register">
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
                            <div class="signup-link-line">
                                <div class="signup-link">Sudah punya akun?<a class="signup-link-1" href="../login/login.php"> Log-in</a></div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>