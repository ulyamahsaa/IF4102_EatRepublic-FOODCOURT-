<!DOCTYPE html>
<html>
<head>
	<title>Eat Republic</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="icon" href="<?php echo base_url() ?>assets/image/depan_regi.png">
	<style type="text/css">
	
	@font-face {
		font-family: Wacca Regular; src: url('Wacca-Regular.otf');
	}

	.tulisan{
		font-family: Wacca Regular;
		font-size:35px;
		margin-left: 10.5%;
		margin-top: 15%;
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

	</style>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<a href="<?php echo base_url('') ?>index.php/home">
					<img class="kiri" src="<?php echo base_url()?>assets/image/sendok.png"></img>
				</a>		
				<h3 class="tulisan">Registrasi sebagai</h3>
				<a href="<?php echo base_url('')?>index.php/C_regispembeli"><button type="button" class="btn btn-dark solid" style="margin-left: 10.5%; padding-left:10%; padding-right:10%; margin-right: 2%; font-family: Wacca Regular; margin-top: 2%">Pembeli</button></a>
				<a href="<?php echo base_url('')?>index.php/C_regispenjual"><button type="button" class="btn btn-light"style="padding-left:10%;padding-right:10%;font-family: Wacca Regular; margin-top: 2%">Penjual</button></a>
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