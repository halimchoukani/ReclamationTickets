<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tixia.dexignzone.com/xhtml/add-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 22:21:58 GMT -->

<head>
	<!-- Title -->
	<title>Ajouter Compte</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">

	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, bootstrap admin, coupon, deal, modern, responsive admin dashboard, ticket, ticket dashboard, ticket system, admin panel,	Ticketing admin, Dashboard template, Bootstrap HTML, Ticket management, Event ticketing, Responsive design, User-friendly interface, Efficiency, Streamlining operations, Event management, Ticket sales, Customizable template, Stylish design, Modern dashboard">
	<meta name="description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">

	<meta property="og:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta property="og:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="Tixia - Ticketing Admin Dashboard Bootstrap HTML Template | DexignZone">
	<meta name="twitter:description" content="Discover Tixia, the ultimate solution for ticketing administration. Our Bootstrap HTML Template empowers you to streamline ticketing tasks, enhancing operational efficiency with style and ease. Simplify your processes and elevate your ticketing management experience today.">
	<meta name="twitter:image" content="page-error-404.html">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link class="main-css" href="assets/css/style.css" rel="stylesheet">

</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>
	<div id="main-wrapper">
		<div class="nav-header">
			<div class="brand-logo">
				<img src="assets/images/logo.png" alt="Logo" class="brand-logo">
			</div>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Ajout Compte
							</div>
						</div>

						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell  primary dz-theme-mode" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
									<i id="icon-dark" class="fas fa-moon"></i>

								</a>
							</li>

							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="assets/images/profile/<?php echo $_SESSION['gender'] ?>.png" width="20" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>

									<a href="deconnexion.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>

						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="index.php">Dashboard</a></li>
						</ul>
					</li>
					<li>
						<a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-diploma"></i>
							<span class="nav-text">Comptes </span>
						</a>
						<ul aria-expanded="false">
							<li><a href="gestcomptessa.php">Gestion Des Comptes</a></li>
							<?php if ($_SESSION['type'] == "supervisor") {
								echo "<li><a href='ajoutCompe.php'>Ajouter Un Compte</a></li>";
							}

							?>
						</ul>


					</li>
					<li><a class="has-arrow ai-icon" href="tickets.php" aria-expanded="false">
							<i class="flaticon-381-add-1"></i>
							<span class="nav-text">Tickets </span>
						</a>

					</li>

				</ul>
				</li>


			</div>
		</div>


		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">

				<!-- row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="card  card-bx m-b30">
							<div class="card-header bg-primary">
								<h6 class="title text-white">Creer Compte</h6>

							</div>
							<form class="profile-form" method="post" action="/controller/compte/register.php">
								<div class="card-body ">

									<div class="mb-3 text-center">
										<label class="form-label required">Type de Compte</label>
									</div>


									<div class="mb-3 d-flex justify-content-center">
										<div class="form-check form-check-inline mx-2">
											<input class="form-check-input" type="radio" name="userType" id="adminRadio" value="admin">
											<label class="form-check-label" for="adminRadio">Admin</label>
										</div>
										<div class="form-check form-check-inline mx-2">
											<input class="form-check-input" type="radio" name="userType" id="clientRadio" value="client" checked>
											<label class="form-check-label" for="clientRadio">Client</label>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6 mb-3">
											<label class=" form-label required">Nom</label>
											<input type="text" name="nom" class="form-control" placeholder="Entrer le nom" required="">
										</div>
										<div class="col-sm-6 mb-3">
											<label class=" form-label required">Prenom</label>
											<input type="text" name="prenom" class="form-control" placeholder="Entrer le prénom" required="">
										</div>
										<div class="col-sm-6 mb-3">
											<label class=" form-label required">e-mail</label>
											<input type="email" class="form-control" name="email" placeholder="Exemple@gmail.com" required>
										</div>
										<div class="col-sm-6 mb-3">
											<div class="form-group">
												<label class=" form-label required">Mot De Passe</label>
												<div class="position-relative">
													<input type="password" name="mdp" id="exampleInputPassword" class="form-control" placeholder="123456">
													<span id="eye1" class="show-pass eye">
														<i class="fa fa-eye-slash"></i>
														<i class="fa fa-eye"></i>
													</span>
												</div>
											</div>

										</div>

										<div class="col-sm-6 mb-3">
											<label class="form-label required">Sexe</label>



											<div class="mb-3 d-flex ">
												<div class="form-check form-check-inline mx-2">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="hommeRadio" value="male" required>
													<label class="form-check-label" for="hommeRadio">Homme</label>
												</div>
												<div class="form-check form-check-inline mx-2">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="femaleRadio" value="female" required>
													<label class="form-check-label" for="femaleRadio">Femme</label>
												</div>
											</div>
										</div>
										<div class="col-sm-6 mb-3">
											<div class="form-group">
												<label class=" form-label required">Confirmer Votre Mot De Passe</label>
												<div class="position-relative">
													<input type="password" name="cmdp" id="exampleRepeatPassword" class="form-control" placeholder="123456">
													<span id="eye2" class="show-pass eye">
														<i class="fa fa-eye-slash"></i>
														<i class="fa fa-eye"></i>
													</span>
												</div>
											</div>

										</div>

										<div class="col-sm-6 mb-3">
											<label class=" form-label required">Numéro de téléphone mobile</label>
											<input type="number" name="tel" class="form-control" placeholder="212-999-0000" required>
										</div>
										<div class="col-sm-6 mb-3" id="adminInput" style="display: none;">
											<label class="form-label required">Matricule</label>
											<input type="text" name="mat" class="form-control" placeholder="Entrer Votre Matricule">
										</div>
										<div class="col-sm-6 mb-3" id="clientInput" style="display: none;">
											<label class="form-label required"> Centre</label>
											<input type="text" name="noms" class="form-control" placeholder="" required>

											<div class="col-sm-6 mb-3">
												<label class="form-label required">Numéro de téléphone </label>
												<input type="number" name="nums" class="form-control" placeholder="212-999-0000" required>
											</div>
											<div class="col-sm-6 mb-3">
												<label class="form-label required">Adresse</label>
												<input type="text" name="adresse" class="form-control" placeholder="" required>
											</div>
										</div>
									</div>
								</div>

						</div>
					</div>
					<div class="card-footer justify-content-end">
						<button type="submit" class="btn btn-primary" name="btn">Create Compte</button>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>




	<!--**********************************
            Content body end
        ***********************************-->




	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/custom.min.js"></script>
	<script src="assets/js/deznav-init.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var adminRadio = document.getElementById('adminRadio');
			var clientRadio = document.getElementById('clientRadio');
			var adminInput = document.getElementById('adminInput');
			if (adminRadio.checked) {
				adminInput.style.display = 'block';
				clientInput.style.display = 'none';
			}

			if (clientRadio.checked) {
				clientInput.style.display = 'block';
				adminInput.style.display = 'none';
			}
			adminRadio.addEventListener('change', function() {
				if (adminRadio.checked) {
					adminInput.style.display = 'block';
					clientInput.style.display = 'none';
				}
			});

			clientRadio.addEventListener('change', function() {
				if (clientRadio.checked) {
					clientInput.style.display = 'block';
					adminInput.style.display = 'none';
				}
			});
		});
		$(document).ready(function() {
			var eyeElement = $("#eye1");
			var eyeElement2 = $("#eye2");
			var passwordInput = $("#exampleInputPassword");
			var passwordInput2 = $("#exampleRepeatPassword");
			eyeElement.click(function() {
				if (eyeElement.hasClass("show-pass") && eyeElement.hasClass("eye") && eyeElement.hasClass("active")) {
					passwordInput.attr("type", "text");
				} else {
					passwordInput.attr("type", "password");
				}
			});
			eyeElement2.click(function() {
				if (eyeElement2.hasClass("show-pass") && eyeElement2.hasClass("eye") && eyeElement2.hasClass("active")) {
					passwordInput2.attr("type", "text");
				} else {
					passwordInput2.attr("type", "password");
				}
			});
		});
	</script>
</body>


<!-- Mirrored from tixia.dexignzone.com/xhtml/add-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2024 22:21:58 GMT -->

</html>