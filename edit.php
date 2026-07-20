<?php 
    require_once "db.php";
    $message = "";
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($db_novel, $sql);
    $data = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        $select = "SELECT * FROM users WHERE email='$email' AND id != '$id'";
        $select_user = mysqli_query($db_novel, $select);
        if (mysqli_num_rows($select_user) > 0) {
            $message = "Email already exist";
        } else {
            $update = "UPDATE users SET nama='$nama',email='$email',age='$age',gender='$gender' WHERE id='$id'";
            $result = mysqli_query($db_novel, $update);
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
    <title>Edit User</title>
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
    <section class="form-crud">
        <h2>Edit</h2>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name="nama" id="nama" class="form-input" value="<?= $data['nama']; ?>" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-input" value="<?= $data['email']; ?>" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-input" value="<?= $data['age']; ?>" placeholder="Enter Age">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-input" id="gender" required>
                    <option value="" disabled selected>Enter Age</option>
                    <option value="female" <?= $data['gender'] == 'female' ? 'selected' : ''; ?>>Female</option>
                    <option value="male" <?= $data['gender'] == 'male' ? 'selected' : ''; ?>>Male</option>
                </select>
            </div>
            <button type="submit" name="update">Update Data</button>
        </form>
    </section>


    <?php if($message != "") : ?>
        <div class="popup">
            <div class="popup-content">
                <h3><?= $message; ?></h3>
                <form action="users.php">
                    <button type="submit">OK</button>
                </form>
            </div>
        </div>
    <?php endif; ?>

</body>
</html>