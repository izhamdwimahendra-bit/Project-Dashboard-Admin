<?php 
    session_start();
    require_once "db.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db_novel, $sql);
        $data = mysqli_fetch_assoc($result);
        if ($data) {
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = $data['role'];
            if ($data['role'] == 'admin') {
                header('location:dashboard.php');
            } else {
                header('location:user.php');
            }
        exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login-register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <div class="layout">
        <div class="left-img">
            <img src="img/draw.png" alt="">
        </div>
        <div class="right-form">
            <form action="" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-input" id="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-input" id="password" required>
                </div>
                <div class="message">
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<p> Login Success </p>";
                        } else {
                            echo "<p> The email or password you entered is incorrect! </p>";
                        }
                    }
                ?>
                </div>
                <div class = "forgot-acount">
                    <a href="" class="forgot">forgot password?</a>
                </div>
                <button type="submit">Login</button>
                <p class="create-acount">Don't have an acount? <a href="register.php">Register now</a> </p>
                <div class="contact-moderator">
                    <span>or contact with</span>
                    <div class="contact">
                        <a href="https://mail.google.com/mail/?view=cm&to=izhammahendra8@gmail.com&su=Halo&body=Isi%20pesan" target="_blank"> <i class="fa-brands fa-google"></i> </a>
                        <a href="" target="_blank"> <i class="fa-brands fa-discord"></i> </a>
                        <a href="https://github.com/Izhan-Dwi-Mahendra" target="_blank"> <i class="fa-brands fa-github"></i> </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>