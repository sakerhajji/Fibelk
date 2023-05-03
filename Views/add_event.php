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
            <li class="active">
                <a href="add_event.php">
                    <i class='bx bxs-add-to-queue'></i>
                    <span class="text">Ajouter Event </span>
                </a>
            </li>
            <li>
                <a href="showevnt.php">
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


            <ul class="box-infos1" id="sport_event" style="display:none;">
                <li>
                <button style=" background-color: transparent;  border: none;" onclick="showFormplace_match()">
                <i class='bx bxs-arch'></i>
                    </button>
                    
                    <span class="text">
                        <h3>place event</h3>
                        <p>click pour Ajouter</p>
                    </span>

                </li>
                <li>
                    <a href="https://www.google.com/">

                        <i class='bx bx-calendar-event'></i>
                    </a>
                    <span class="text">
                        <h3> ajouter event deja existe </h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>
                <li>
                <button style=" background-color: transparent;  border: none;" onclick="ShowMatch()">
                        <i class='bx bxs-data'></i>
                    </button>

                    <span class="text">
                        <h3>Ajouter event detailles </h3>
                        <p>click pour Ajouter</p>
                    </span>
                </li>


            </ul>








            <?php
include '../Controller/lieu_matchC.php';


$lieu_matchC= new lieu_matchC();
 
    if(

      isset($_GET['sport_place1'])
  ){
    $lieu_match = new lieu_match ($_GET['id_LM'],$_GET['nom_LM'],$_GET['temp_o'],$_GET['temp_f'],$_GET['capacite'],$_GET['adresse'],$_GET['image_T'],$_GET['description'] );
        $lieu_matchC->ajouterlieu_match($lieu_match);
 
  }

include '../Controller/MatchC.php';



    if(isset($_GET['match']))
    {
    $matchC= new MatchC();
    $match = new matchM ($_GET['id_M'],$_GET['nom_M'],$_GET['nom_equipe1'],$_GET['nom_equipe2'],$_GET['duree_P'],$_GET['type_P'],$_GET['description_M'],$_GET['image_P'] );
    
    $matchC->addMatch($match);
    }
  
?>


<div class="container" id="sport_place"  style="display:none;" >
<div class="card" id="pup">
            <div class="text">formulaire à remplir</div>
            <form action="#" method="GET">
            <div class="form-row">
                <div class="input-data"style="display:none;">
                    <input type="text" name="id_LM" id='id_LM' >
                    <div class="underline"></div>
                    <label for="">ID lieu match</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom_LM" id='nom_LM' required>
                    <div class="underline"></div>
                    <label for="">Nom lieu match</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="adresse" id='adresse' required>
                    <div class="underline"></div>
                    <label for="">Adresse</label>
                </div>
                <div class="input-data">
                    <input type="number" name="capacite" id='capacite' required>
                    <div class="underline"></div>
                    <label for="">capacite</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="time" name="temp_o" id='temp_o' required>
                    <div class="underline"></div>
                    <label for="">temp d'ouverture</label>
                </div>
                <div class="input-data">
                    <input type="time" name="temp_f" id='temp_f' required>
                    <div class="underline"></div>
                    <label for="">temp de fermeture</label>
                </div>
                <div class="input-data">
                        <input type="file" name="image_T" id="image_T" accept="image/*" required>
                        <div class="underline"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data ">
                    <input textarea rows="8" cols="80" name="description" id="description" required>
                    <div class="underline"></div>
                    <label for="">description</label>
                    </div>
                </div>

                    <div style="position:relative">
			<div class="inner"></div>
			<input type="submit" value="submit" name="sport_place1" >

		</div>
                </div>
           
        </form>
    </div>
    </div>

    <!-- tablee 2 -->

    <div class="container" id="form_match"  style="display:none; " > 
<div class="card" id="pup">
            <div class="text">formulaire à remplir</div>
            <form action="#" method="GET">
            <div class="form-row">
                <div class="input-data"style="display:none;">
                    <input type="number" name="id_M" id='id_M' >
                    <div class="underline"></div>
                    <label for="">ID  match</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom_M" id='nom_M' required>
                    <div class="underline"></div>
                    <label for="">Nom  match</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="nom_equipe1" id='nom_equipe1' required>
                    <div class="underline"></div>
                    <label for="">nom_equipe1</label>
                </div>
                <div class="input-data">
                    <input type="text" name="nom_equipe2" id='nom_equipe2' required>
                    <div class="underline"></div>
                    <label for="">nom_equipe2</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="time" name="duree_P" id='duree_P' required>
                    <div class="underline"></div>
                    <label for="">duree</label>
                </div>
                <div class="input-data">
                    <input type="text" name="type_P" id='type_P' required>
                    <div class="underline"></div>
                    <label for="">type</label>
                </div>
 </div>
            <div class="form-row">
                <div class="input-data">
                    <input textarea rows="8" cols="80" name="description_M" id='description_M' required>                  
                    <div class="underline"></div>
                    <label for="">description</label>
                    </div>
                    <div class="input-data">
                        <input type="file" name="image_P" id="image_P" accept="image/*" required>
                        <div class="underline"></div>
                </div>
                </div>


                <div style="position:relative">
			<div class="inner"></div>
			<input type="submit" value="submit" name="match" >

		</div>
        </div>     
            
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