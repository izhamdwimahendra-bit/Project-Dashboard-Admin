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
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/navbar.css">
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
        </div>
    </section> 
</body>