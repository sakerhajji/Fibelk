<?php
include "../Controller/match.php";

$match = new matchM();
$list_LM = $match->afficherlieu_match();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link rel="shortcut icon " type="x-icon" href="img/icon.png">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">


    <title>Fibelk</title>
</head>

<body>
    <?php
	include_once '../Controller/userc.php';
	$userc = new Userc();
	$admin = new Userc();
	$list = $userc->listusers();
	$list1 = $admin->listAdmin();
	?>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="Admin.php" class="brand">
            <i><img src="./img/logo.png" alt=""></i>

        </a>
        <ul class="side-menu top">
            <li>
                <a href="Admin.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="add_event.php">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">Ajouter Event </span>
                </a>
            </li>
            <li class="active">
                <a href="afficherlc.php">
                    <i class='bx bx-show'></i>
                    <span class="text">montrer l'événement</span>
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
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
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



            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>liste des utlisateurs </h3>
                        <form action="#" method="get">
                            <div class="form-input">
                                <input type="search" placeholder="Search..."
                                    style="background: var(--light); border: none;">
                                <button type="submit" class="search-btn"
                                    style="background-color: transparent;  border: none;"><i
                                        class='bx bx-search'></i></button>
                            </div>
                        </form>
                        <i class='bx bx-filter'></i>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>id_LM </th>
                                <th>nom_LM</th>
                                <th>temp_O_T</th>
                                <th>temp_F_T</th>
                                <th>capacite</th>
                                <th>adresse</th>
                                <th>image</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							foreach ($list_LM as $lieu_match) {
								?>
                            <tr>
                                <td>
                                    <?= $lieu_match['id_M']; ?>
                                </td>
                                <td>
                                    <?= $lieu_match['nom_M']; ?>
                                </td>
                                <td>
                                    <?= $lieu_match['nom_equipe1']; ?>
                                </td>
                                <td>
                                    <?= $lieu_match['nom_equipe2']; ?>
                                </td>
                                <td>
                                    <?= $lieu_match['duree_P']; ?>
                                </td>
                                <td>
                                    <?= $lieu_match['type_P']; ?>
                                </td>
                                <td class="styleth"><img src="src/<?= $lieu_match['image_P']; ?>" height="60px" alt="image_T d'evenement"></td>
                                <td>
                                    <?= $lieu_match['description_MA']; ?>
                                </td>

                                <td>
                                    <a href="mofifirM.php?id_LM=<?= $lieu_match['id_M']; ?>"><span
                                            class="status completed">Update</span> </a>
                                </td>
                                <td>
                                    <a href="supprimerlc.php?id_LM=<?= $lieu_match['id_LM']; ?>"><span
                                            class="status pending">Delete</span> </a>
                                </td>

                            </tr>
                            <?php
							}
							?>
                        </tbody>
                    </table>
                </div>

            </div>

            <!--<div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>liste des utlisateurs </h3>
                        <form action="#">
                            <div class="form-input">
                                <input type="search" placeholder="Search..."
                                    style="background: var(--light); border: none;">
                                <button type="submit" class="search-btn"
                                    style="background-color: transparent;  border: none;"><i
                                        class='bx bx-search'></i></button>
                            </div>
                        </form>
                        <i class='bx bx-filter'></i>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>id_LM </th>
                                <th>nom_LM</th>
                                <th>temp_O_LM</th>
                                <th>temp_F_LM</th>
                                <th>capacite</th>
                                <th>adresse</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							foreach ($list as $user) {
								?>
                            <tr>
                                <td>
                                    <?= $user['idAC']; ?>
                                </td>
                                <td>
                                    <?= $user['nom']; ?>
                                </td>
                                <td>
                                    <?= $user['prenom']; ?>
                                </td>
                                <td>
                                    <?= $user['email']; ?>
                                </td>
                                <td>
                                    <?= $user['date']; ?>
                                </td>
                                <td>
                                    <?= $user['pass']; ?>
                                </td>
                                <td>
                                    <?= $user['role']; ?>
                                </td>

                                <td>
                                    <a href="Update_admin_user.php?idAC=<?= $user['idAC']; ?>"><span
                                            class="status completed">Update</span> </a>
                                </td>
                                <td>
                                    <a href="delete.php?idAC=<?= $user['idAC']; ?>"><span
                                            class="status pending">Delete</span> </a>
                                </td>
                                <td>
                                    <a href="AddAdmin.php?idAC=<?= $user['idAC']; ?>"><span class="status completed">add
                                            admin</span> </a>
                                </td>
                            </tr>
                            <?php
							}
							?>
                        </tbody>
                    </table>
                </div>

            </div>-->

            <!--<div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>liste des utlisateurs </h3>
                        <form action="#">
                            <div class="form-input">
                                <input type="search" placeholder="Search..."
                                    style="background: var(--light); border: none;">
                                <button type="submit" class="search-btn"
                                    style="background-color: transparent;  border: none;"><i
                                        class='bx bx-search'></i></button>
                            </div>
                        </form>
                        <i class='bx bx-filter'></i>

                    </div>-->
            <!-- <table>
                        <thead>
                            <tr>
                                <th>id_LM </th>
                                <th>nom_LM</th>
                                <th>temp_O_LM</th>
                                <th>temp_F_LM</th>
                                <th>capacite</th>
                                <th>adresse</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php /*
							foreach ($list as $user) {
								?>
                            <tr>
                                <td>
                                    <?= $user['idAC']; ?>
                                </td>
                                <td>
                                    <?= $user['nom']; ?>
                                </td>
                                <td>
                                    <?= $user['prenom']; ?>
                                </td>
                                <td>
                                    <?= $user['email']; ?>
                                </td>
                                <td>
                                    <?= $user['date']; ?>
                                </td>
                                <td>
                                    <?= $user['pass']; ?>
                                </td>
                                <td>
                                    <?= $user['role']; ?>
                                </td>

                                <td>
                                    <a href="Update_admin_user.php?idAC=<?= $user['idAC']; ?>"><span
                                            class="status completed">Update</span> </a>
                                </td>
                                <td>
                                    <a href="delete.php?idAC=<?= $user['idAC']; ?>"><span
                                            class="status pending">Delete</span> </a>
                                </td>
                                <td>
                                    <a href="AddAdmin.php?idAC=<?= $user['idAC']; ?>"><span class="status completed">add
                                            admin</span> </a>
                                </td>
                            </tr>
                            <?php
							}
							*/?>
                        </tbody>
                    </table>-->
            </div>

            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>