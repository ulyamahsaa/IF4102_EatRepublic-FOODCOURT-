<!DOCTYPE html>
<html>

<head>
    <title>Eat Republic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="<?php echo base_url()?>assets/image/depan_regi.png">
</head>

<style>
    @font-face {
        font-family: Wacca Regular;
        src: url('Wacca-Regular.otf');
    }
    
    body {
        background-image: url("<?php echo base_url()?>assets/image/bg.jpg");
        background-repeat: no-repeat;
        font-family: Wacca Regular;
    }
    
    .vertical-navigation {
        width: 80px;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
    }
    
    .vertical-navigation img {
        left: 0;
        width: 50px;
        height: 100%;
        margin-top: 20px;
        margin-left: 0px;
    }
    
    .vertical-navigation a {
        margin-top: 20px;
        margin-left: 20px;
    }
    
    .page-content {
        margin-left: 6rem;
    }
    
    .box-color_edit {
        background-color: white;
        margin-top: 5rem;
        width: 80%;
        height: 500px;
    }
    
    .text-right img {
        width: 50px;
        height: 100%;
    }
    
    #logosearch {
        height: 20px;
        width: inherit;
    }
    
    table {
        /* font-family: arial, sans-serif; */
        /* border:none; */
        width: 90%;
        margin: auto;
    }
    
    td,
    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }
    
    th {
        font-size: 20px;
    }
    
    .tombol:hover,
    tr:hover {
        background-color: #FDF8FF;
        color: black;
        cursor: pointer;
    }
    
    #bsr {
        height: 50px;
        width: 140px;
        font-size: large;
    }
</style>

<body>
    <?php if ($this->session->flashdata('notif')) { ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Berhasil</strong> Menambahkan Makanan ke Keranjang.</center>
            </div>
    <?php } ?>
    <nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_pemesanan" disabled>
                    <img src="<?php echo base_url('')?>assets/image/sendok.png" alt="menu">
                </a>
                <p style="margin-left: 20px; font-family:'Wacca Regular' ">Kembali</p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('') ?>index.php/C_daftarpesanan" disabled><img src="<?php echo base_url('')?>assets/image/payment-method.png" alt="payment"></a>
                <p style="margin-left: 25px; font-family:'Wacca Regular' ">Pesan</p>
            </li>
            <li class="nav-item" style="margin-top: 200px;">
                <a class="nav-link" href="#"><img src="<?php echo base_url()?>assets/image/keluar2.png" alt="keluar"data-toggle="modal" data-target="#modal-keluar"></a>
            </li>
        </ul>
    </nav>

    <div class="page-content" style="margin-top : -75px">
        <div class="container box-color_edit" style="padding-bottom: 8%; margin-top: 10%; height: 630px">
            <div class=row>
                <div class="col-10" style="padding-top: 1%; padding-left: 22%">
                    <h3 class="text-center" style="font-size: 40px; font-family: Wacca Regular">Menu Makanan</h3>
                </div>
                <div class="col-2">
                    <h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>
                </div>
            </div>
            <div>
                <p class="text-center" style="font-size: 20px">Selamat datang di <strong> @EAT REPUBLIC </strong> <?= $this->session->userdata('sesi')['email']?></p>
            </div>
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

            <div style="height: 400px; overflow: auto">
                <table id="myTable">
                    <tr id=header>
                        <th >No</th>
                        <th name="namamakanan" >Nama Makanan</th>
                        <th>Gambar</th>
                        <th name="harga" >Harga</th>
                        <th>Aksi</th>
                    </tr>

                    <tr>
                    <?php $counter=0; foreach ($makanan as $mkn) : $counter++; ?>
                        
                        <td style="font-size: 20px">
                            <?= $counter ?>
                        </td>
                        <td style="font-size: 20px">
                            <?= $mkn['namamakanan']; ?>
                        </td>
                        <td>
                           <img src="<?php echo base_url('assets/upload/')?><?= $mkn["gambar"]?> " width="100" />
                        </td>
                        <td style="font-size: 20px">
                            Rp. <?= $mkn['harga']; ?>
                        </td>
                        <td>
                            <button class="w3-button w3-xlarge w3-circle w3-green" data-toggle="modal"  data-target="#modal-tambah<?= $mkn['idmakanan']; ?>">+</button>
                           
                        </td>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>

            </div>
        </div>

    </div>

    </div>

    <!-- modal for edit menu -->
<?php foreach ($makanan as $mkn) : ?>
<div class="modal fade" id="modal-tambah<?= $mkn['idmakanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">
         <h3 style="text-align: center; padding-left: 150px; font-family: Wacca Regular">Tambah makanan</h3>
      </div>
      `<div class="modal-body">
            <form method="post" action="<?php echo site_url('C_daftarmakanan/proses_tambah')?>">
                <div class="form-group">
                    <label class="col-form-label">Nama makanan</label>
                    <input type="text" class="form-control" id="namamakanan" name="namamakanan" value="<?= $mkn["namamakanan"]?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">ID makanan</label>
                    <input type="text" class="form-control" id="idmakanan" name="idmakanan" value="<?= $mkn["idmakanan"]?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Gambar</label>
                    <dt>
                        <center>
                            <img src="<?php echo base_url('assets/upload/')?><?= $mkn["gambar"]?> " width="100" />
                        </center>
                        
                    </dt>
                </div>
                <div class="form-group">
                    <label class="col-form-label">harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $mkn["harga"]?>" readonly>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" name="tombol" style="width: 80px; margin-right: 50px">Ya</button>
                    <button class="btn btn-light" data-dismiss="modal" style="width: 80px; margin-right: 100px">Tidak</button>   
                </div>
            </form>
        </div>

      </div>

    </div>

  </div>
</div>
<?php endforeach ?>





    <!-- ============ MODAL KELUAR AKUN =============== -->
    <div class="modal fade" id="modal-keluar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="text-align: center; font-size: 30px; font-family: Wacca Regular">Keluar Akun</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                </div>
                <div class="modal-body">
                    <h5 style="font-family: Wacca Regular; text-align: center">Anda yakin mau Keluar <b> <?=$this->session->userdata('sesi')['email']?> ?</b></h5>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('') ?>index.php/home/logout">
                        <button class="btn btn-danger">Keluar</button>
                    </a>
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
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
                td = tr[i].getElementsByTagName("td")[1];
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