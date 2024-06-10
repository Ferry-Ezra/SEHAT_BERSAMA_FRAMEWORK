<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/style.css">

	<link href="css/bootstrap.min.css" rel="stylesheet">

	<title>RS CITRA MEDIKA</title>
</head>
<body>


	<!-- SIDEBAR -->    
	<section id="sidebar">
	<a href="#" class="brand">
        <img src="img/logo.png" style="width: 100px; height: auto;">
        <span class="text">SEHAT BERSAMA</span>
    </a>
		<ul class="side-menu top">
			<li class="@if (Request::routeIs('home')) active @endif">
				<a href="{{ route('home') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="@if (Request::routeIs('pasien','pasien-entry')) active @endif">
				<a href="{{ route('pasien') }}">
					<i class='bx bxs-group' ></i>
					<span class="text">Pasien</span>
				</a>
			</li>
			<li class="@if (Request::routeIs('pembayaran','pembayaran-entry')) active @endif">
				<a href="{{ route('pembayaran') }}">
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">Pembayaran</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
    		</form>
   				 <a href="#" class="profile">
  		     <img src="img/ezra.png">
       		 <span class="admin-name">Admin</span>
    </a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<section class="content-header">
				@yield('content')
			</section>	
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
