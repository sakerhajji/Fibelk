<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link rel="shortcut icon " type="x-icon" href="img/icon.png">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- My CSS -->


    <title>Fibelk</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i><img src="./img/logo.png" alt=""></i>

        </a>
        <ul class="side-menu top">
            <li>
                <a href="index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">Ajouter Event </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Afficherevent</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message Admin</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-block'></i>
                    <span class="text">bloquer Event</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="login_sginup.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->



        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Ajouter Evenement</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="add_event.html">Ajouter Evenement </a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="add_event.html">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>


            <ul class="box-info">
                <li>
                    <button style=" background-color: transparent;  border: none;" onclick="showDivCenima()">
                        <i class='bx bxs-movie'></i>
                    </button>
                    <span class="text">
                        <h3>cenima evnt</h3>
                        <p>click pour Ajouter</p>
                    </span>

                </li>
                <li>
                    <button style=" background-color: transparent;  border: none;" onclick="showDivSport()">

                        <i class='bx bx-football'></i>
                    </button>
                    <span class="text">
                        <h3>Sport Event </h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>
                <li>
                    <button style=" background-color: transparent;  border: none;" onclick="showDivTheatre()">
                        <i class='bx bx-mask'></i>
                    </button>
                    <span class="text">
                        <h3>theatre Event</h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>

            </ul>

            <ul class="box-info">
                <li>
                    <button style=" background-color: transparent;  border: none;" onclick="showDivMusic()">
                        <i class='bx bx-music'></i>
                    </button>
                    <span class="text">
                        <h3>Music Event</h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>
                <li>
                    <button style=" background-color: transparent;  border: none;" onclick="showDivBook()">
                        <i class='bx bx-book-open'></i>
                    </button>
                    <span class="text">
                        <h3>littéraire Event</h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>
            </ul>
        </main>