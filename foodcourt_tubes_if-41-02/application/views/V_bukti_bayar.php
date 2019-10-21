<!DOCTYPE html>
<html>
<head>
	<title>Eat Republic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="icon" href="<?php echo base_url('')?>assets/image/depan_regi.png">
</head>

<style>

@font-face {
	font-family: Wacca Regular; src: url('Wacca-Regular.otf');
}

body{
	background-image: url("<?php echo base_url('')?>assets/image/bg.jpg");
	background-repeat: no-repeat;
	font-family: Wacca Regular;

}
.vertical-navigation{
  width: 80px;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
}
.vertical-navigation img{
	left:0;
	width: 50px;
	height: 100%;
	margin-top: 20px;
	margin-left: 0px;
}
.vertical-navigation a{
	margin-top: 20px;
	margin-left: 20px;
}
.page-content{
	margin-left: 6rem;
}
.box-color{
	background-color: white;
	margin-top: 5rem;
	border-radius: 10px;
}
.text-right img{
	width: 50px;
	height: 100%;	
}



</style>



<body>
<nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
  <ul class="navbar-nav">
    <li class="nav-item active">
    	<a class="nav-link active" href="<?php echo base_url('') ?>index.php/home" disabled>
      		<img src="<?php echo base_url('')?>assets/image/sendok.png" alt="menu">
  		</a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="<?php echo base_url('') ?>index.php/home/pesan" disabled><img src="<?php echo base_url('')?>assets/image/payment-method.png" alt="payment"></a>
      <p style="margin-left: 20px; font-family:'Wacca Regular' ">Pesan</p>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" style="margin-top:600px;" href="<?php echo base_url('') ?>index.php/home/buktibayar" disabled>
      	<img  src="<?php echo base_url('')?>assets/image/logo.png" alt="payment">
      </a>
    </li>
    <li class="nav-item" style="margin-top: 39rem;">
    	<a class="nav-link" href="#">
    		<img src="<?php echo base_url('')?>assets/image/logo.png">
    	</a>
    </li>
  </ul>
</nav>

<div class="page-content">
	<div class="container box-color">
		<div class="col-xs-6">
			<h1 class="text-right"><img src="<?php echo base_url('')?>assets/image/logo.png"></h1>
		</div>
		<div class="col-xs-6">
			<h1 class="text-center">Upload Bukti Pembayaran</h1>
		</div>
		<div class="custom-file" style="margin-left: 400px; margin-top: 30px">
			<form>
				<input type="file" class="custom-file-input">
					<label class="custom-file-label" style="width: 300px; ">Bukti Pembayaran</label>
			</form>
		</div>
		<div class="col-xs-6">
			<a href="<?php echo base_url('') ?>index.php/home/informasibayar"><h3 class="text-center"><button class="btn btn-primary" style="margin-bottom: 2rem; margin-top: 2rem;">OK</button></h3></a>
		</div>
	</div>
</div>


</body>



</html>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>