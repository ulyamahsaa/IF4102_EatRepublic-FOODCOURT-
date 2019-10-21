<!DOCTYPE html>
<html>
<head>
	<title>Eat Republic</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="icon" href="<?php echo base_url()?>assets/image/depan_regi.png">
</head>

<style>

@font-face {
	font-family: Wacca Regular; src: url('Wacca-Regular.otf');
}

body{
	background-image: url("<?php echo base_url()?>assets/image/bg.jpg");
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
.box-color_edit{
	background-color: white;
	margin-top: 5rem;
	width: 80%;
	height: 500px;
}
.text-right img{
	width: 50px;
	height: 100%;	

}

#logosearch{
	height: 20px; 
	width: inherit;
}

table {
  font-family: arial, sans-serif;
  /* border:none; */
  width: 90%; 
  margin: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

th {
	font-size: 20px;
}

.tombol{
	border-radius: 5px;
	height: 40px;
	width: 120px;
	margin-right: 20px;
	border: none;
	background-color:ghostwhite;
}

.tombol:hover, tr:hover{
	background-color:rgba(0, 0, 0, 0.856);
	color: white;
	cursor: pointer;
}

#bsr{
	height: 50px;
	width: 140px;
	font-size: large;
}
</style>

<body>
<nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link active" href="<?php echo base_url('') ?>index.php/home" disabled>
          <img src="<?php echo base_url()?>assets/image/sendok.png" alt="menu">
      </a>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" href="<?php echo base_url('') ?>index.php/home/pesan" disabled><img src="<?php echo base_url()?>assets/image/payment-method.png" alt="payment"></a>
      <p style="margin-left: 20px; font-family:'Wacca Regular' ">Pesan</p>
    </li>
    <li class="nav-item"> 
      <a class="nav-link" style="margin-top:600px;" href="<?php echo base_url('') ?>index.php/home/editmakanan" disabled>
        <img  src="<?php echo base_url()?>assets/image/logo.png" alt="payment">
      </a>
    </li>
    <li class="nav-item" style="margin-top: 39rem;">
      <a class="nav-link" href="#">
        <img src="<?php echo base_url()?>assets/image/logo.png">
      </a>
    </li>
  </ul>
</nav>

<div class="page-content">
	<div class="container box-color_edit" style="padding-bottom: 8%; margin-top: 10%">
		<div class=row>
			<div class="col-8" style="padding-top: 1%; padding-left: 38%">
				<h1 class="text-center">Menu Edit Makanan</h1>
			</div>
			<div class="col-4">
				<h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>				
			</div>
		</div>
		<!-- searchbar -->
		<div>
			<form>
				<div class="input-group mb-3 input-group-sm" style="width: 30%; margin: auto">
					<div class="input-group-prepend">
						<span class="input-group-text" style="background-color: transparent; border:none;"><img src="<?php echo base_url()?>assets/image/search.png" id="logosearch"></span>
					</div>
					<input type="text" class="form-control" id="myInput" onkeyup="cari()" placeholder="cari berdasarkan nama">
				</div>
			</form>
		</div>
		<div style="height: 280px; overflow: auto"> 
			<table id="myTable">							
				<tr id=header>
					<th>No</th>
					<th>ID Makanan</th>
					<th>Nama Makanan</th>
					<th>Harga</th>
					<th>Stok</th>
				</tr>
				<tr>
					<td>1</td>
					<td>MKN001</td>
					<td>Soto Ayam</td>
					<td>Rp 15.000</td>
					<td>25</td>
				</tr>
				<tr>
					<td>2</td>
					<td>MKN002</td>
					<td>Soto Betawi</td>
					<td>Rp 16.000</td>
					<td>20</td>
				</tr>
				<tr>
					<td>3</td>
					<td>MKN003</td>
					<td>Soto Padang</td>
					<td>Rp 15.000</td>
					<td>18</td>
				</tr>
			</table>
		</div>

		<div style="margin-left: 25%; margin-top: -5%">
			<a href="<?php echo base_url('') ?>index.php/home/pemesanan"><button onclick="" class="tombol" id="bsr"> Back </button></a>
			<button onclick="" class="tombol" data-toggle="modal"  data-target="#modal-edit-menu"> Edit </button>
			<button onclick="" class="tombol"> Hapus </button>
			<button onclick="" class="tombol" id="bsr" data-toggle="modal"  data-target="#modal-add-menu"> Add New Menu </button>
		</div>		
	</div>
	<br>
</div>

<!-- modal for edit menu -->
<div class="modal fade" id="modal-edit-menu" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding-left: 50px">
      <div class="modal-header">
        <h1 class="modal-title text-center" id="exampleModalCenterTitle">Edit Makanan</h1>
      </div>
      <div class="modal-body">
      	  <div class="row">
      		<div class="col-xs-12">
      			<label>ID Makanan</label>
      			<input type="text" name="" placeholder="MKN1011" class="form-control text-center">
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-xs-12">
      			<label>Nama Makanan</label>
      			<input type="text" name="" class="form-control">
      		</div>
        </div>
        <div class="row">
      		<div class="col-xs-12">
      			<label>Harga</label>
      			<input type="text" name="" class="form-control">
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-xs-12">
      			<label>Stok</label>
      			<input type="text" name=""  class="form-control">
      		</div>
		</div>
		<div class="row">
      		<div class="col-xs-12">
      			<label>Foto Makanan</label>
      			<input type="file" name="" class="form-control">
      		</div>
      	</div>
		<div class="row">
      		<div class="col-xs-2">
      			<label>Tidak dapat diedit harga per porsi</label>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-xs-6">
      			<button class="btn btn-dark">Tambah</button>
      		</div>
      		<div class="col-xs-6">
      			<button class="btn btn-light" data-dismiss="modal">Batal</button>
      		</div>
      		</div>
      </div>
    </div>
  </div>
</div>

<!-- modal for add menu -->
<div class="modal fade" id="modal-add-menu" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="padding-left: 50px">
      <div class="modal-header">
        <h1 class="modal-title text-center" id="exampleModalCenterTitle">Tambah Makanan</h1>
      </div>
      <div class="modal-body">
      	  <div class="row">
      		<div class="col-xs-8">
      			<label>ID Makanan</label>
      			<input type="text" name="" class="form-control text-center">
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-xs-8">
      			<label>Nama Makanan</label>
      			<input type="text" name="" class="form-control">
      		</div>
        </div>
        <div class="row">
      		<div class="col-xs-8">
      			<label>Harga</label>
      			<input type="text" name="" class="form-control">
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-xs-8">
      			<label>Stok</label>
      			<input type="text" name="" class="form-control">
      		</div>
		</div>
		<div class="row">
      		<div class="col-xs-8">
      			<label>Foto Makanan</label>
      			<input type="file" name="" class="form-control">
      		</div>
      	</div>
		<div class="row">
      		<div class="col-xs-8">
      			<label>Harga per Porsi</label>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-xs-6">
      			<button class="btn btn-dark">Tambah</button>
      		</div>
      		<div class="col-xs-6">
      			<button class="btn btn-light" data-dismiss="modal">Batal</button>
      		</div>
      		</div>
      </div>
    </div>
  </div>
</div>


	<script>
		function cari() {
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("myTable");
		  tr = table.getElementsByTagName("tr");
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[2];
			if (td) {
			  txtValue = td.textContent || td.innerText;
			  if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}       
		  }
		}
	</script>

</body>



</html>

<!-- Javascript source to enable bootstrap modal -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>