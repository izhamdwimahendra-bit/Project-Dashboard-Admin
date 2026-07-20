<?php 
    require_once "db.php";
    $message = "";
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
            if ($result) {
                $message = "Data added successfully";
            } else {
                $message = "Data added failed";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
    <section class="form-crud">
        <h2>Add User</h2>
        <form action="" method="POST">
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
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-input" id="role" required>
                    <option value="" disabled selected>Enter Role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit" name="add">Add Data</button>
        </form>
    </section>


    <?php if($message != ""): ?>
    <div class="popup">
        <div class="popup-content">
            <h3><?= $message; ?></h3>
            <?php if($message == "Data added successfully"): ?>
                <form action="users.php" method="POST">
                    <button type="submit">OK</button>
                </form>

            <?php else: ?>
                <form action="" method="GET">
                    <button type="submit">OK</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
</body>
</html>