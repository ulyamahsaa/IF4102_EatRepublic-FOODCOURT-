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
		background-image: url("<?php echo base_url('')?>assets/image/bg.jpg");
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

	h5{
		font-family: Wacca Light;
		opacity: 0.6;
		margin-left: 10.5%;
	}

	.kanan{
		float: right;
	}

	</style>
</head>
<body>
	<?php if ($this->session->flashdata('notif')) { ?>
			<div class="alert alert-danger alert-dismissible">
		    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    	<center><strong>Registrasi Gagal!</strong> Alamat email telah terpakai akun lain.</center>
  			</div>
  	<?php } ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
					<a href="<?php echo base_url('') ?>index.php/home">
						<img class="kiri" src="<?php echo base_url('')?>assets/image/sendok.png"></img>
					</a>
					<h3 class="warna">Registrasi <b><span class="warna1"> penjual</span></b></h3>
					<h5>Silahkan mengisi form dengan lengkap</h5>
					<form action="<?php echo site_url('C_regispenjual/proses_regis_penjual')?>" method="POST" enctype="multipart/form-data">
						<div class="form-group" style="margin-left: 10.5%; margin-right: 10%; font-family: Wacca Regular">
					    	<input type="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
					    	<input type="email"  name="email" class="form-control" placeholder="E-mail" required>
					    	<input type="Username" name="Username" class="form-control" placeholder="Username" required>
					    	<input type="Password" name="Password" class="form-control" placeholder="Password" required>
					    	<select type="Jeniskelamin" name="jeniskelamin" class="form-control" placeholder="Jenis kelamin" required>
                                <option value="">Jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
					    	<input type="Usia" name="usia" class="form-control" placeholder="Usia" required>
  						
    						<input type="file" name="gambar" class="form-control">
    							
					    	<input type="namatoko" name="namatoko" class="form-control" placeholder="Nama Toko" required required>
					    	<input type="alamat" name="alamat" class="form-control" placeholder="Alamat" required>
					    	<input type="no_handphone" name="no_handphone" class="form-control" placeholder="No. Handphone" required>
						</div>
							<button class="btn btn-dark" style="margin-left: 38%;padding-left:10%;padding-right:10%; font-family: Wacca Regular">Submit</button> 
					</form>
				
			</div>
			<div class="col-sm-6">
				<div id="foto" class="tabisi">
					<img class="depan" src="<?php echo base_url('')?>assets/image/depan_regi.png">
				</div>
				
			</div>
			
		</div>
	</div>
</body>
</html>