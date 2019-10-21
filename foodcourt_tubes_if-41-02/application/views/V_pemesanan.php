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
	border-radius: 15px;
	width: 80%;
}
.text-right img{
	width: 50px;
	height: 100%;	

}
img{
	height: 30%;
	width: 30%;
	margin-top: 50px;
	overflow-wrap: ova
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
     <li class="nav-item active">
    	<a class="nav-link active" style="margin-top:260px; "href="<?php echo base_url('') ?>index.php/home" disabled>
      		<img src="<?php echo base_url('')?>assets/image/kembali.png">
  		</a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" style="margin-top:600px;" href="<?php echo base_url('') ?>index.php/home/pesan" disabled>
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
	<div class="container box-color" style="padding-bottom: 4%;">
		<div>
			<center>
				<img src="<?php echo base_url('')?>assets/image/tembus.jpg">
			</center>
			
		</div>
		<br>
		<br>
		<div class="col-xs-6" style="margin-top: 1rem">
			<a href="#">
				<p class="text-center">
					<button class="btn btn-dark" style="padding-left:5%;padding-right:5%">Pemesanan</button>
				</p>
			</a>
		</div>
		
	</div>
	<br>
</div>


</body>

</html>



