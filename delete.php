<?php
    require_once "db.php";
    $message = "";
    $id = $_GET['id'];

    $select = "SELECT * FROM users WHERE id=$id";
    $select_user = mysqli_query($db_novel, $select);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $delete = $_POST['delete'];
        
        if ($delete != "DELETE") {
            $message = "the text you entered is incorrect";
        } else {
            $sql = "DELETE FROM users WHERE id=$id";
            $result = mysqli_query($db_novel,$sql);
            $message = "account was succesfully deleted";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
    <section class="form-crud">
        <h2>Delete</h2>
        <div class="information">
            <p> Are you sure you want to permanently delete your account? <br><br>
                This action cannot be undone. All data, settings, and account information will be permanently removed and will no longer be accessible. <br><br>
                Please confirm that you understand the consequences before proceeding.</p>
        </div>
        <form action="" method="POST">
            <label for="delete">Type “DELETE” below to permanently delete your account.</label>
            <input type="text" name="delete" id="delete" class="form-input" placeholder="DELETE" required>
            <button type="submit" name="update">Delete Data</button>
        </form>
    </section>

    <?php 
        if($message != ""): 
    ?> 
    <div class="popup">
        <div class="popup-content">
            <h3><?=$message?></h3>
            <?php if($message == "account was succesfully deleted"): ?>
                <form action="users.php">
                    <button type="submit">OK</button>
                </form>

            <?php else: ?>
                <a href="">
                    <button type="submit">OK</button>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php
        endif;
    ?>

</body>
</html>