<!DOCTYPE html>
<html>
<head>
	<title>Eat Republic</title>	
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="icon" href="<?php echo base_url()?>assets/image/depan_regi.png">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">

	@font-face {
		font-family: Wacca Regular; src: url('Wacca-Regular.otf');
	}

	.tulisan{
		font-family: Wacca Regular;
		font-size:35px;
		margin-left: 33%;
		margin-top: 35%;
	}

	#foto{
		background-image: url("<?php echo base_url()?>assets/image/bg.jpg");
		background-size: 150%;
	}

	.tabisi {
		color: white;
		padding: 20%;
		margin-top: 1%;
		height: 95%;
	}

	.kiri{
		float:left;
		display:block;
		height: 50px;
		width: 50px;
		margin-left: 10%;
		margin-top: 5%;
	}

	.depan{
		height: 100%;
		width: 100%;
	}

	.warna{
		color: black;
		font-family: Wacca Regular;
		font-size:30px;
		margin-left: 10.5%;
		margin-top: 15%;
	}

	.warna1{
		font-family: Wacca Regular;
		font-size:30px;
		color: grey;
	}

	h4{
		font-family: Wacca Light;
		margin-left: 10.5%;
		color: grey;
	}

	</style>
</head>
<body>
	<?php if ($this->session->flashdata('notif')) { ?>
			<div class="alert alert-success alert-dismissible">
		    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    	<center><strong>Registrasi Berhasil</strong> Selamat Datang di Food Court.</center>
  			</div>
  	<?php } ?>
  	<?php if ($this->session->flashdata('notifgagal')) { ?>
			<div class="alert alert-danger alert-dismissible">
		    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    	<center><strong>Login Gagal!</strong> Alamat email dan kata sandi yang dimasukan salah.</center>
  			</div>
  	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
					<a href="<?php echo base_url('') ?>index.php/home"><img class="kiri" src="<?php echo base_url()?>assets/image/sendok.png"></img></a>
					<h3 class="warna">Selamat datang di <b><span class="warna1">eat republic</span><span style="color: orange">.</span></b></h3>
					<h4>Silahkan Login.</h4>
					<form action="<?php echo site_url('home/login')?>" method="POST"class="form-sigin">
						<div class="form-group" style="margin-left: 10%; margin-right: 15%">
					    	<input name="email" class="form-control" placeholder="Email" style="font-family: Wacca Regular" required="">
					    	<input type="Password" name="passwordd" class="form-control" placeholder="Password" style="font-family: Wacca Regular">
						</div>
						<button class="btn btn-dark solid" style="margin-left: 18.5%; padding-left:10%; padding-right:10%; margin-right: 5%; font-family: Wacca Regular">Login</button>
						<a href="<?php echo base_url('') ?>index.php/home/regis"><button type="button" class="btn btn-light"style="padding-left:10%;padding-right:10%; font-family: Wacca Regular">Registrasi</button></a>

					</form>
					
			</div>
			<div class="col-sm-6">
				<div id="foto" class="tabisi">
					<img class="depan" src="<?php echo base_url()?>assets/image/depan_regi.png">
				</div>
			</div>
		</div>
	</div>
</body>
</html>