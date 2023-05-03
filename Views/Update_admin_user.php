<?php

include '../Controller/userC.php';

$UserC = new UserC();
$UserC = new UserC();
if (
	isset($_POST["idAC"]) &&
	isset($_POST["nom"]) &&
	isset($_POST["prenom"]) &&
	isset($_POST["email"]) &&
	isset($_POST["date"]) &&
	isset($_POST["pass"])

) {
	if (
		!empty($_POST["idAC"]) &&
		!empty($_POST['nom']) &&
		!empty($_POST["prenom"]) &&
		!empty($_POST["email"]) &&
		!empty($_POST["date"]) &&
		!empty($_POST["pass"])
	) {
		$User = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['date'], $_POST['pass']);
		$UserC->updateUser($_POST["idAC"], $User);
		header('Location:showevnt.php');
	}
}
$Usercc = new Userc();
if (isset($_GET['idAC']))
	$p = $Usercc->getUserById($_GET['idAC']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link rel="shortcut icon " type="x-icon" href="img/icon.png">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boxiconsmi.css">

    <title>Fibelk</title>

</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i><img src="./img/logo.png" alt=""></i>

        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="index.php">
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
            <li>
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Analytics</span>
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
                <a href="login_sginup.html" class="logout">
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
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="Update_admin_user.php">update</a>
                        </li>
                    </ul>
                </div>

            </div>



            <div class="container" id="concert">

                <div class="card" id="pup">

                    <div class="text">formulaire à remplir</div>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-row">
                            <div class="input-data">
                                <input type="text" name="idAC" id="id" value="<?php echo $p['idAC'];  ?>" disable
                                    style="display:none;" />
                                <!--fi kol input hot name o id kima esemi base-->
                                <div class="underline"></div>
                                <label for="">id user</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="nom" id="nom" value="<?php echo $p['nom']; ?>" />
                                <div class="underline"></div>
                                <label for="">Nom</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-data" id="input-dat">
                                <input type="text" name="prenom" id="prenom" value="<?php echo $p['prenom']; ?>" />
                                <div class="underline"></div>
                                <label for="">Prenom</label>
                            </div>
                            <div class="input-data">
                                <input type="email" name="email" id="email" value="<?php echo $p['email']; ?>" />
                                <div class="underline"></div>
                                <label for="">Email</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-data">

                                <input type="date" name="date" id="date" value="<?php echo $p['date']; ?>" />

                                <div class="underline"></div>
                                <label for="">date de naissance</label>
                            </div>
                            <div class="input-data">

                                <input type="text" name="pass" id="pass" value="<?php echo $p['pass']; ?>" />
                                <div class="underline"></div>
                                <label for="">mot de pass</label>
                            </div>

                        </div>
                        <button class="button" style="vertical-align:middle"><span>Hover </span></button>






                    </form>


                </div>

            </div>


        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>