<?php
    require_once "db.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $role = "user";

        $select = "SELECT * FROM users WHERE email='$email'";
        $select_user = mysqli_query($db_novel, $select);
        if (mysqli_num_rows($select_user) > 0) {
            $message = "<p> User already exist <p>";
        } else {
            $sql = "INSERT INTO users(nama,email,password,age,gender,role) VALUES('$nama','$email','$password','$age','$gender','$role')";
            $result = mysqli_query($db_novel, $sql);
            header('location:login.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <h2>Registration</h2>
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" class="form-input" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-input" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-input" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" class="form-input" placeholder="Enter Age" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-input" id="gender" required>
                        <option value="" disabled selected>Enter Age</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>
                <div class="message">
                <?php
                    if(isset($message)){
                        echo $message;
                    }
                ?>
                </div>
                <button type="submit" name="register">Register</button>
                <p class="create-acount">already have an account? <a href="login.php">Login now</a> </p>
                <div class="contact-moderator">
                    <span>Contact With</span>
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