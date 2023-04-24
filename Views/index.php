

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link rel="shortcut icon " type="x-icon" href="img/icon.png" >
	<link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	

	<title>Fibelk</title>
</head>
<body>
<?php
include '../Controller/userc.php';
$userc = new Userc();
$admin = new Userc();
$list = $userc->listusers();
$list1 = $admin->listAdmin();
?>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i><img src="./img/logo.png" alt=""></i>
			
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="add_event.php">
					<i class='bx bxs-add-to-queue' ></i>
					<span class="text">Ajouter Event </span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message Admin</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-block' ></i>
					<span class="text">bloquer Event</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="login_sginup.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
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
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>nombre total d'event </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>les visiteurs du site </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>les revenus financiers</p>
					</span>
				</li>
			</ul>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>liste des utlisateurs </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>id user </th>
								<th> Nom</th>
								<th>Prenom</th>
								<th>Email</th>
								<th>date de naissance</th>
								<th>password</th>
								<th>role</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list as $user) {
							?>
								<tr>
									<td><?= $user['idAC']; ?></td>
									<td><?= $user['nom']; ?></td>
									<td><?= $user['prenom']; ?></td>
									<td><?= $user['email']; ?></td>
									<td><?= $user['date']; ?></td>
									<td><?= $user['pass']; ?></td>
									<td><?= $user['role']; ?></td>

									<td>
									<a href="Update_admin_user.php?idAC=<?= $user['idAC']; ?>" ><span class="status completed">Update</span> </a>
									</td>
									<td>
									<a href="delete.php?idAC=<?= $user['idAC']; ?>"><span class="status pending">Delete</span> </a>
									</td>
									<td>
									<a href="AddAdmin.php?idAC=<?= $user['idAC']; ?>" ><span class="status completed">add admin</span> </a>
									</td>
								</tr>
							<?php
							}
							?>
							</tbody>
					</table>
				</div>
			
			</div>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>liste des admins </h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>id user </th>
								<th> Nom</th>
								<th>Prenom</th>
								<th>Email</th>
								<th>date de naissance</th>
								<th>password</th>
								<th>role</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($list1 as $admin) {
							?>
								<tr>
									<td><?= $admin['idAC']; ?></td>
									<td><?= $admin['nom']; ?></td>
									<td><?= $admin['prenom']; ?></td>
									<td><?= $admin['email']; ?></td>
									<td><?= $admin['date']; ?></td>
									<td><?= $admin['pass']; ?></td>
									<td><?= $admin['role']; ?></td>

									<td>
									<a href="Update_admin_user.php?idAC=<?= $admin['idAC']; ?>" ><span class="status completed">Update</span> </a>
									</td>
									<td>
									<a href="DeleteAdmin.php?idAC=<?= $admin['idAC']; ?>"><span class="status pending">Delete Admin</span> </a>
									
								</tr>
							<?php
							}
							?>
							</tbody>
					</table>
				</div>
			
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>