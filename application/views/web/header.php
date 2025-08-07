<?php
$ceks  = $this->session->userdata('pkl_smk@Proyek-2025');
$level = $this->session->userdata('level@Proyek-2025');

if ($level == 'admin') {
	$cek    = $this->db->get_where('tbl_user', "username='$ceks'")->row();
	$link_nilai = 'users/nilai_praktik';
}elseif ($level == 'pembimbing') {
	$cek    = $this->db->get_where('tbl_pemb', "username='$ceks'")->row();
	$link_nilai = 'users/nilai';
}else{
	$cek    = $this->db->get_where('tbl_siswa', "nis='$ceks'")->row();
	$link_nilai = 'users/nilai_prakerin';
}

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url();?>"/>
	<title>PKL SMK NEGERI 1 PADAHERANG</title>

	<!-- Global stylesheets -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<link href="assets/css/docs.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<!-- /global stylesheets -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<style>
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background-color: #007BFF;
  border: none;
  border-radius: 0;
  box-shadow: 0 4px 10px rgba(0,0,0,0.10);
  padding: 15px 70px;
  font-family: 'Poppins', sans-serif; 
}

.navbar-brand {
  color: white  !important;
  font-weight: 900;
  font-size: 25px;
  letter-spacing: 0.5px;
}

.navbar-nav > li > a {
	color: white  !important;
  padding: 15px 15px;
  transition: background 2s;
  font-weight: 600;
  font-size: 14px;

}

.navbar-nav > li > a:hover,
.navbar-nav > li.active > a {
  background-color: transparent; 
  color: darkblue !important;
  font-weight: 600;
  font-size: 14px;
}


.navbar-spacer {
  height: 60px; 
}

.bounce-in {
	animation: bounceInTop 1.5s ease-out;
}


@keyframes bounceInTop {
  0% {
    transform: translateY(-300px);
    opacity: 0;
  }
  60% {
    transform: translateY(0px);
    opacity: 1;
  }
  80% {
    transform: translateY(-10px);
  }
  100% {
    transform: translateY(0);
  }
}

.fade-in {
  opacity: 0;
  animation: fadeIn 1.5s ease-in forwards;
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}


/* Untuk mobile */
@media (max-width: 767px) {
  .navbar-spacer {
    height: 50px;

	
  }

  
	.navbar {
		 padding: 15px 10px;
	}
}

/* Dropdown User Style */
.dropdown-user > a {
  background-color: #007BFF !important;
  color: white;
  display: flex;
  align-items: center;
  gap: 5px;
}

.dropdown-user > a i {
  color: white;
  transition: color 0.3s;
}

.dropdown-user > a:hover i,
.dropdown-user > a:hover span {
  color: white;
}

/* Dropdown Menu Items */
.dropdown-menu {
  background-color: #007BFF;
  border: none;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.dropdown-menu li a {
  color: white;
  padding: 10px 20px;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: background-color 0.3s, color 0.3s;
}

.dropdown-menu .divider {
  height: 1px;
  margin: 5px 0;
}


</style>




<body class="login-container" >
	<!-- Main navbar -->
	<div class="navbar bounce-in">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">PKL NESAPA  </a>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">

			<ul class="nav navbar-nav navbar-right">
				<li<?php if($sub_menu == ''){echo' ';} ?>><a href="<?php echo base_url(); ?>">Beranda</a></li>
				<li<?php if($sub_menu == 'info'){echo' ';} ?>><a href="web/info">Informasi</a></li>
				<li<?php if($sub_menu == 'industri'){echo'';} ?>><a href="web/industri">Industri</a></li>
				<?php if ($ceks == ''){ ?>
					<li<?php if($sub_menu == 'login'){echo'';} ?>> <a href="web/login"><i class="fa-solid fa-right-to-bracket mr-5"> </i> Daftar Sekarang </span></a></li>
				<?php }else{ ?>
								<li class="dropdown dropdown-user">
									<a class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-user"></i>
										<span><?php echo ucwords($cek->nama_lengkap); ?></span>
										<i class="caret"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="users/profile"><i class="fa-solid fa-user-gear"></i> Profil</a></li>
										<li><a href="<?php echo $link_nilai; ?>"><i class="icon-star-full2"></i> Nilai</a></li>
										<li class="divider"></li>
										<li><a href="web/logout"><i class="fa-solid fa-right-from-bracket"></i> <span>Keluar </span></a></li>
									</ul>
								</li>
				<?php } ?>

			</ul>
		</div>
	</div>
	<!-- Spacer after navbar -->
<div class="navbar-spacer"></div>

	<!-- /main navbar -->


		<!-- Page container -->
		<div class="page-container">

			<!-- Page content -->
			<div class="page-content">

				<!-- Main content -->
				<div class="content-wrapper">

					<!-- Content area -->
					<div class="content">