<?php
    session_start();
    require_once "db.php";
    $page = basename($_SERVER['PHP_SELF']); 
    $sql = "SELECT * FROM users";
    $result = mysqli_query($db_novel, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
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
                    <a href="" target="_blank"> <i class="fa-brands fa-discord"></i> </a>
                    <a href="" target="_blank"> <i class="fa-solid fa-code"></i> </a>
                    <div class="nav-right-profil">
                        <p><?= $_SESSION['nama']; ?></p>
                        <img src="img/profil.jpg" alt="Profil">
                    </div>
                </div>
            </nav>
            <div class="main-content">
                <div class="left">
                    <div class="left-top">
                        <div class="information">
                            <h3>Hello <?= $_SESSION['nama'];?></h3>
                            <p>Today you have user who have entered the website ready to read the exciting novels, explore various genres, discover new stories, and enjoy a seamless reading experience tailored just for them.</p>
                            <a href="">Read more</a>
                        </div>
                        <div class="information-logo">
                            <img src="img/gm.png" alt="">
                        </div>
                    </div>
                    <div class="left-bottom">
                        <div class="table-judul">
                            <h3>User Management</h3>
                            <a href="users.php">View All</a>
                        </div>
                        <div class="table-dashboard">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="id">Id</th>
                                        <th class="profil">Profil</th>
                                        <th class="nama">Full Name</th>
                                        <th class="email">Email</th>
                                        <th class="role">Role</th>
                                        <th class="operation">Operation</th>
                                    </tr>
                                </thead>
                                <?php
                                    $no = 1;
                                    while($x = mysqli_fetch_assoc($result)):
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="id"> <?= $no++?> </td>
                                        <td class="profil"> <img class="profil-dashboard" src="img/profil.jpg" alt=""> </td>
                                        <td class="nama"> <?= $x['nama']?> </td>
                                        <td class="email"> <?= $x['email']?> </td>
                                        <td class="role"> <?= $x['role']?> </td>
                                        <td>
                                            <div class="operation">
                                                <a href="users.php"><i class="fa-solid fa-ellipsis"></i></a>
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
                <div class="right">
                    <div class="right-top">
                        <div class="calendar">
                            <div class="calendar-judul">
                                <h3>Calendar</h2>
                                <p>May 2026</p>
                            </div>
                            <div class="days">
                                <div>Sun</div>
                                <div>mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="dates">
                                <div></div><div></div><div></div><div></div><div></div>
                                <div>1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                            
                                    <div>5</div>
                                <div>6</div>
                                <div>7</div>
                                <div>8</div>
                                <div>9</div>
                                <div>10</div>
                                <div>11</div>
                            
                                    <div>12</div>
                                <div>13</div>
                                <div>14</div>
                                <div>15</div>
                                <div>16</div>
                                <div>17</div>
                                <div>18</div>
                            
                                    <div>19</div>
                                <div>20</div>
                                <div>21</div>
                                <div>22</div>
                                <div>23</div>
                                <div>24</div>
                                <div>25</div>
                            
                                    <div>26</div>
                                <div>27</div>
                                <div>28</div>
                                <div>29</div>
                                <div>30</div>
                            </div>
                        </div>
                    </div>
                    <div class="right-bottom">
                        <div class="information-admin">
                            <div class="information-admin-judul">
                                <div class="profil-nama-admin">
                                    <img src="img/profil.jpg" alt="">
                                    <div class="nama-admin">
                                        <h3><?= $_SESSION['nama']; ?></h3>
                                        <p><?= $_SESSION['role']; ?></p>
                                    </div>
                                </div>
                                <a href=""><i class="fa-solid fa-ellipsis"></i></a>
                            </div>
                            <div class="media-sosial-admin">
                                <a href="tel:087728525722"><i class="fa-solid fa-phone"></i></a>
                                <a href="https://mail.google.com/mail/?view=cm&to=izhammahendra8@gmail.com&su=Halo&body=Isi%20pesan" target="_blank"><i class="fa-solid fa-envelope"></i></a>
                                <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>
                            </div>
                            <div class="main-information-admin">
                                <div class="left-right-admin">
                                    <h4>Manhwa</h4>
                                    <p>9 manhwa</p>
                                </div>
                                <div class="left-right-admin">
                                    <h4>Novels</h4>
                                    <p> 4 novels</p>
                                </div>
                                <div class="left-right-admin">
                                    <h4>Books</h4>
                                    <p> 10 books</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>