<?php
$cek    = $user->row();
$nama   = $cek->nama_lengkap;

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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<script src="assets/js/select2.min.js"></script>
	<script>
	    $(document).ready(function () {
	        $(".cari_label").select2({
	            placeholder: "Pilih Label"
	        });
					$(".cari_jurusan").select2({
	            placeholder: "Pilih Jurusan"
	        });
					$(".cari_kelas").select2({
	            placeholder: "Pilih Kelas"
	        });
					$(".cari_pemb").select2({
	            placeholder: "Pilih Pembimbing"
	        });
					$(".cari_siswa").select2({
	            placeholder: "Pilih Siswa"
	        });
					$(".cari_industri").select2({
	            placeholder: "Pilih Industri"
	        });
	    });
	</script>

	<?php
	if ($sub_menu == "" or $sub_menu == "profile" or $sub_menu == "lap_sk" or $sub_menu == "lap_sm") {?>
	<!-- Theme JS files -->

		<link rel="stylesheet" href="assets/calender/css/style.css">
		<link rel="stylesheet" href="assets/calender/css/pignose.calendar.css">

	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- <script type="text/javascript" src="assets/js/pages/dashboard.js"></script> -->
	<script src="assets/calender/js/pignose.calendar.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>

		<?php
	if ($sub_menu == "info" or $sub_menu == "j_k" or $sub_menu == "pengguna" or $sub_menu == "industri" or $sub_menu == "penempatan" or $sub_menu == "nilai_praktik" or $sub_menu == "d_siswa" or $sub_menu == "jurnal" or $sub_menu == "laporan_pkl_siswa" or $sub_menu == "nilai" or $sub_menu == "status_prakerin" or $sub_menu == "jurnal_harian" or $sub_menu == "laporan_pkl" or $sub_menu == "nilai_prakerin" or $sub_menu == "d_siswa_ind" or $sub_menu == "c_pemb_ind" or $sub_menu == "c_pemb") {?>
	<!-- Theme JS files -->
			<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
			<script type="text/javascript" src="assets/js/plugins/editors/summernote/summernote.min.js"></script>
			<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

			<script type="text/javascript" src="assets/js/core/app.js"></script>
			<script type="text/javascript" src="assets/js/pages/editor_summernote.js"></script>
			<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>

	<!-- /theme JS files -->
	<?php
	} ?>

<style>
	/* Navbar background */
	.navbar-default, .navbar-nav  {
		background-color: whitesmoke ;
		border: #007BFF;
		
	}

	/* Navbar teks dan ikon */
	.navbar-default .navbar-brand,
	.navbar-default .navbar-nav > li > a {
		color: whitesmoke !important;
		
	}

	/* Sidebar background */
	.sidebar-main {
		background-color: #007BFF !important;
	}

	/* Sidebar teks */
	.navigation-main > li > a {
		color: white !important;
		padding: 12px 20px;
		position: relative;
		display: block;
		font-weight: 500;
		transition: all 0.3s ease;


	}

	/* Hover sidebar item */
	.navigation-main > li > a:hover,
	.navigation-main > li.active > a {
		background-color: whitesmoke !important;
		color: #007BFF !important;
		border-top-left-radius: 50px;
		border-bottom-left-radius: 50px;
		margin-left: 10px;
		font-weight: 600;
		
	}

	/* Bullet indicator (seperti "tonjolan" ke kanan) */
	.navigation-main > li.active > a::before,
	.navigation-main > li > a:hover::before {
		position: absolute;
		background-color: whitesmoke;
		border-top-right-radius: 50px;
		border-bottom-right-radius: 50px;
	}


  .sidebar-user {
  background-color: #007bff;
  padding: 20px 0;
  text-align: center;
  color: white;
}

.sidebar-user .user-profile {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.sidebar-user .foto-profile {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 10px;
  border: 3px solid white;
}

.sidebar-user .user-info {
  margin-top: 5px;
}

.sidebar-user .user-name {
  font-weight: bold;
  font-size: 16px;
  margin-bottom: 4px;
}

.sidebar-user .user-level {
  font-size: 13px;
  color: #e0e0e0;
}

.sidebar-user .user-level i {
  margin-right: 6px;
  color: #fff;
}



  @media (max-width: 768px) {
    .foto-kegiatan {
      max-height: 180px;
    }

    .foto-profile {
      max-height: 150px;
    }

   
}
	
</style>


</head>
<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default">
		<div class="navbar-header" style="background-color: #007BFF">
			<a class="navbar-brand" href=""style="color:white;"><p style="font-size: 21px; font-weight: 800; ">PKL SMK NESAPA</p></a>
			<ul class="nav navbar-nav visible-xs-block" style="background-color: #007bff;">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3" style="background-color: #007bff;"></i></a></li>
			</ul>
		</div>

		
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main";>
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content user-content">
							<div class="user-profile">
							<a href="users/profile">
								<img src="foto/<?php 
								if ($level == 'Siswa') { echo "siswa/"; }
								if ($level == 'Pembimbing') { echo "pembimbing/"; }
								if ($level == 'Pembind') { echo "pembind/"; }
								echo $cek->foto == '' ? 'default.png' : $cek->foto;
								?>" class="foto-profile" alt="Foto Profil">
							</a>
							<div class="user-info">
								<div class="user-name"><?php echo ucwords($nama); ?></div>
								<div class="user-level">
								<?php if ($level == 'Admin') { ?>
									<i class="fas fa-user-tie"></i> Administrator
								<?php } elseif ($level == 'Pembimbing') { ?>
									<i class="fas fa-chalkboard-teacher"></i> Pembimbing Sekolah
								<?php } elseif ($level == 'Pembind') { ?>
									<i class="fas fa-building-user"></i> Pembimbing Industri
								<?php } elseif ($level == 'Siswa') { ?>
									<i class="fas fa-user-graduate"></i> Siswa
								<?php } ?>
								</div>
							</div>
							</div>
						</div>
						</div>

					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span></span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if ($sub_menu == "") { echo 'active';}?>">
							<?php if ($level == 'Siswa'){?>
												<li class="<?php if ($sub_menu == "status_prakerin") { echo 'active';}?>"><a href="users/status_prakerin"><i class="fa-solid fa-wrench"></i> <span>Status PKL</span></a></li>
							<?php } ?>
								<li class="<?php if ($sub_menu == "profile") { echo 'active';}?>"><a href="users/profile"><i class="fa-solid fa-user-gear"></i> <span>Kelola Profile</span></a></li>
								
								
								<?php if ($level == 'Admin'){ ?>
													<li class="<?php if ($sub_menu == "penempatan") { echo 'active';}?>"><a href="users/penempatan"><i class="fa-solid fa-list-check"></i> <span>Kelola Pendaftaran</span></a></li>
													<li class="<?php if ($sub_menu == "pengguna") { echo 'active';}?>"><a href="users/pengguna"><i class="fa-solid fa-users"></i> <span>Kelola Pengguna</span></a></li>
													<li class="<?php if ($sub_menu == "j_k") { echo 'active';}?>"><a href="users/j_k"><i class="fa-solid fa-landmark"></i> <span>Jurusan & Kelas</span></a></li>
													<li class="<?php if ($sub_menu == "industri") { echo 'active';}?>"><a href="users/industri"><i class="fa-solid fa-city"></i> <span>Kelola Industri</span></a></li>
													<li class="<?php if ($sub_menu == "info") { echo 'active';}?>"><a href="users/info"><i class="fa-solid fa-newspaper"></i> <span>Kelola Informasi</span></a></li>
													<li class="<?php if ($sub_menu == "nilai_praktik") { echo 'active';}?>"><a href="users/nilai_praktik"><i class="fa-solid fa-star"></i> <span>Nilai Siswa</span></a></li>
													<li class="<?php if ($sub_menu == "monitoring") { echo 'active';}?>"><a href="users/monitoring"><i class="fa-solid fa-chart-simple"></i> <span>Monitoring</span></a></li>

								<?php }elseif ($level == 'Pembimbing'){?>
													<li class="<?php if ($sub_menu == "d_siswa") { echo 'active';}?>"><a href="users/d_siswa"><i class="fa-solid fa-graduation-cap"></i> <span>Daftar Siswa</span></a></li>
													<li class="<?php if ($sub_menu == "jurnal") { echo 'active';}?>"><a href="users/jurnal"><i class="fa-solid fa-pen-to-square"></i> <span>Jurnal Siswa</span></a></li>
													<li class="<?php if ($sub_menu == "nilai") { echo 'active';}?>"><a href="users/nilai"><i class="fa-solid fa-star"></i> <span>Kelola Nilai</span></a></li>
													<li class="<?php if ($sub_menu == "laporan_pkl_siswa") { echo 'active';}?>"><a href="users/laporan_pkl_siswa"><i class="fa-solid fa-book"></i> <span>Lap PKL Siswa</span></a></li>
													<li class="<?php if ($sub_menu == "monitoring") { echo 'active';}?>"><a href="users/monitoring_pemb"><i class="fa-solid fa-chart-simple"></i> <span>Monitoring</span></a></li>
													
								<?php }elseif ($level == 'Pembind'){?>
													<li class="<?php if ($sub_menu == "d_siswa_ind") { echo 'active';}?>"><a href="users/d_siswa_ind"><i class="fa-solid fa-graduation-cap"></i> <span>Daftar Siswa</span></a></li>
												

								<?php }elseif ($level == 'Siswa'){?>
												  <li class="<?php if ($sub_menu == "jurnal_harian") { echo 'active';}?>"><a href="users/jurnal_harian"><i class="fa-solid fa-pen-to-square"></i> <span>Jurnal Harian</span></a></li>
												  <li class="<?php if ($sub_menu == "nilai_prakerin") { echo 'active';}?>"><a href="users/nilai_prakerin"><i class="fa-solid fa-star"></i> <span>Nilai</span></a></li>
												  <li class="<?php if ($sub_menu == "laporan_pkl") { echo 'active';}?>"><a href="users/laporan_pkl"><i class="fa-solid fa-book"></i> <span>Laporan PKL</span></a></li>
												  
								<?php } ?>


								<!-- /main -->

								<!-- Logout -->
								<li class="navigation-header"><span>Keluar</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="web/logout"><i class="fa-solid fa-right-from-bracket"></i> <span>Keluar </span></a></li>

								<!-- /logout -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>

</body>
			<!-- /main sidebar -->
