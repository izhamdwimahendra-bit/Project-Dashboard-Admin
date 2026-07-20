<?php
    session_start();
    require_once "db.php";
    $page = basename($_SERVER['PHP_SELF']); 
    $role = $_GET['role'] ?? 'user';
    $sql = "SELECT * FROM users WHERE role = '$role'";
    $result = mysqli_query($db_novel, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/users.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>
    <section class="layout">
        <aside class="aside">
            <div class="logo-aside">
                <i class="fa-brands fa-slack"></i>
                <p>Shinigami</p>
            </div>
            <div class="aside-menu">
                <a href="dashboard.php" class="aside-menu-link <?= $page == 'dashboard.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-address-book"></i>
                    <p>Dashboard</p>
                </a>
                <a href="users.php" class="aside-menu-link <?= $page == 'users.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-users"></i>
                    <p>Users</p>
                </a>
                <a href="calendar.php" class="aside-menu-link <?= $page == 'calendar.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p>Calendar</p>
                </a>
                <a href="settings.php" class="aside-menu-link <?= $page == 'settings.php' ? 'active' : '' ?>">
                    <i class="fa-solid fa-gears"></i>
                    <p>Settings</p>
                </a>
            </div>
        </aside>
        <div class="main-area">
            <nav class="navbar">
                <div class="nav-left">
                    <h2>Dashboard</h2>
                </div>
                <div class="nav-right">
                    <div class="search-box">
                        <input type="text" name="search" class="search-input" placeholder="search everything in here">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <a href="https://mail.google.com/mail/?view=cm&to=izhammahendra8@gmail.com&su=Halo&body=Isi%20pesan" target="_blank"> <i class="fa-solid fa-envelope"></i> </a>
                    <a href="" target="_blank"> <i class="fa-solid fa-code"></i> </a>
                    <div class="nav-right-profil">
                        <p><?= $_SESSION['nama']; ?></p>
                        <img src="img/profil.jpg" alt="">
                    </div>
                </div>
            </nav>
            <div class="main-content">
                <div class="user-management">
                    <h2>Members</h2>
                    <a href="add.php">add new</a>
                    <div class="overview">
                        <a href="?role=user" class="<?= $role == 'user' ? 'active' : '' ?>">User</a>
                        <a href="?role=admin" class="<?= $role == 'admin' ? 'active' : '' ?>">Admin</a>
                    </div>
                </div>
                <div class="box-table">
                    <div class="table-users">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="id">Id</th>
                                    <th class="profil">Profil</th>
                                    <th class="nama">Member Name</th>
                                    <th class="email">Email</th>
                                    <th class="age">Age</th>
                                    <th class="gender">Gender</th>
                                    <th class="role">Role</th>
                                    <th class="operations">Operation</th>
                                    <th class="action">Action</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                while($x = mysqli_fetch_assoc($result)):
                            ?>
                            <tbody>
                                <tr>
                                    <td class="id"> <?= $no++ ?> </td>
                                    <td class="profil"> <img class="profil-users" src="img/profil.jpg" alt=""> </td>
                                    <td class="nama"> <?= $x['nama']?> </td>
                                    <td class="email"> <?= $x['email']?></td>
                                    <td class="age"> <?= $x['age']?> </td>
                                    <td class="gender"> <?= $x['gender']?> </td>
                                    <td class="role"> <?= $x['role']?> </td>
                                    <td>
                                        <div class="operation">
                                            <a href="edit.php?id=<?= $x['id']; ?>"> <i class="fa-solid fa-pen-to-square"></i> </a>
                                            <a href="delete.php?id=<?= $x['id']; ?>"> <i class="fa-solid fa-trash"></i> </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="login">
                                            <a href="user.php">Login</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php 
                                endwhile;
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>