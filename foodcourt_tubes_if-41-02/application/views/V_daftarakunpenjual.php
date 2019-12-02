<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url()?>assets/image/depan_regi.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
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
    
    .box-color {
        background-color: white;
        margin-top: 5rem;
        border-radius: 10px;
    }
    
    .text-right img {
        width: 50px;
        height: 100%;
    }
</style>

<body>
    <?php if ($this->session->flashdata('notif')) { ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Hapus akun</strong> Berhasil.</center>
            </div>
    <?php } ?>
     <?php if ($this->session->flashdata('notifedit')) { ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Edit status akun penjual</strong> Berhasil.</center>
            </div>
    <?php } ?>
    <nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_menuadmin" disabled>
                    <img src="<?php echo base_url()?>assets/image/sendok.png" alt="menu">
                    <p style="margin-left: 0px; font-family:'Wacca Regular' ">Kembali</p>
                 </a>
            </li>
            <li class="nav-item" style="margin-top: 380%;"> 
                <a class="nav-link" href="#"><img src="<?php echo base_url()?>assets/image/keluar2.png" alt="keluar"data-toggle="modal" data-target="#modal-keluar"></a>
            </li>
        </ul>
    </nav>

    <div class="page-content">
        <div class="container box-color" style="padding-bottom: 4%;">
            <div class="col-xs-6">
                <h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>
            </div>
            <div class="col-xs-6">
                <h1 class="text-center">Menu Validasi</h2>
                <p class="text-center">Selamat datang admin, <strong><?= $this->session->userdata('sesi')['nama']?></strong> </p>
        </div>
        <div class="col-xs-6">
            <table class="table">
                <thead>
                    <tr>
                        <th name="email" >Email</th>
                        <th name ="nama">Nama Toko</th>
                        <th>Status</th>
                        <th style="text-align: center;" >Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr role="row" class="odd">
                    <?php $no=0; foreach ($penjual as $pnjl) : $no++; ?>
                        <td  tabindex="0"> 
                            <?= $pnjl["email"]?>
                        </td>

                        <td  tabindex="0" >
                            <?= $pnjl["nmtoko"]?>
                        </td>

                        <td  tabindex="0">
                            <?= $pnjl["statusvalidasi"]?>
                        </td>
                        <td>
                      
                            <center>
                                <button style="margin-right: 10%; " type="button" class="btn btn-warning btn-sm" data-toggle="modal"  data-target="#modal-validasi<?= $pnjl["email"]?>">Update</button>
                                <button type="button" class="btn btn-danger btn-sm"data-toggle="modal" data-target="#modal-hapus<?= $pnjl["email"]?>">Hapus</button>
                            </center>
                          
                        </td>
                      
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- modal for edit menu -->
<?php foreach ($penjual as $pnjl) : ?>
<div class="modal fade" id="modal-validasi<?= $pnjl["email"]?>" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">
         <h3 style="text-align: center; padding-left: 150px;">Validasi Akun</h3>
      </div>
      `<div class="modal-body">
            <form method="post" action="<?php echo site_url('C_daftarakunpenjual/proses_edit')?>">
                <div class="form-group">
                    <label class="col-form-label">Nama Toko</label>
                    <input type="text" class="form-control" id="nmtoko" name="nmtoko" value="<?= $pnjl["nmtoko"]?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $pnjl["email"]?>" readonly>
                </div>
                <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-8">
                             <select name="statusvalidasi" class="form-control" id="statusvalidasi" required>
                                <option value="">-PILIH-</option>
                                    <option value="valid">valid</option>
                                    <option value="tidak valid">tidak valid</option>
                             </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" name="tombol">Ya</button>
                    <button class="btn btn-light" data-dismiss="modal">Tidak</button>   
                </div>
            </form>
        </div>

      </div>

    </div>

  </div>
</div>
<?php endforeach ?>
 
 <!-- ============ MODAL HAPUS AKUN PENJUAL =============== -->
 <?php foreach ($penjual as $pnjl) : ?>
    <div class="modal fade" id="modal-hapus<?= $pnjl["email"]?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="text-align: center; margin-left:2px;">Hapus Akun</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('C_daftarakunpenjual/proses_hapus')?>">
                    <div class="modal-body">
                        <p>Anda yakin mau menghapus <b> <?= $pnjl["nmtoko"]?></b></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="email" id="email" value="<?= $pnjl["email"]?>">
                        <button class="btn btn-danger">Hapus</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>

<!-- ============ MODAL KELUAR AKUN =============== -->
    <div class="modal fade" id="modal-keluar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="text-align: center; margin-left:2px;">Keluar Akun</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                </div>
                    <div class="modal-body">
                        <p>Anda yakin mau Keluar <b> <?=$this->session->userdata('sesi')['nama']?> ?</b></p>
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





</body>

</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>