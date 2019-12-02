<!DOCTYPE html>
<html>

<head>
    <title>Eat Republic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    
    .box-color {
        background-color: white;
        margin-top: 5rem;
        border-radius: 10px;
        width: 90%;
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
            <center><strong>Pencetakan Struk</strong> Berhasil.</center>
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
                    <li class="nav-item" style="margin-top: 370%;">
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
                        <h1 class="text-center">Pencetak Struk</h2>
        <p class="text-center">mulai mencetak struk sebagai bukti transaksi</p>
        <p class="text-center">Selamat datang admin, <strong><?= $this->session->userdata('sesi')['nama']?></strong> </p>
    </div>
    <div class="col-xs-6">
      <table class="table">
        <thead>
          <tr>
            <th>Kode Transaksi</th>
            <th>Nama Pemesan</th>
            <th>Nama Makanan</th>
            <th>Total Harga</th>
            <th>Alamat Email</th>
            <th>Status</th>
            <th  style="text-align: center;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr role="row" class="odd">
          <?php foreach ($pembayaran as $pbr):?>
            <td tabindex="0">
               <?= $pbr["kodetransaksi"]?>
            </td>
            <td tabindex="0">
               <?= $pbr["namapemesan"]?>
            </td>
            <td tabindex="0">
               <?= $pbr["namamakanan"]?>
            </td>
            <td tabindex="0">
               <?= $pbr["totalharga"]?>
            </td>
            <td tabindex="0">
               <?= $pbr["email_pembeli"]?>
            </td>

            <td tabindex="0">
               <?= $pbr["status"]?>
            </td>

            <td>
              <button data-toggle="modal"  data-target="#modal-kirim<?= $pbr["kodetransaksi"]?>" class="btn btn-dark">Kirim</button>
              <button data-toggle="modal"  data-target="#modal-hapus<?= $pbr["kodetransaksi"]?>" class="btn btn-dark">Hapus</button>

            </td>
          </tr>
                <?php endforeach ?>
        </tbody>
      </table>

  </div>
</div>

<!--PENGIRIMAN STRUK-->
<?php foreach ($pembayaran as $pbr):?>
<div class="modal fade" id="modal-kirim<?= $pbr["kodetransaksi"]?>" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">
         <h3 style="text-align: center; padding-left: 150px;">Kirim Struk
           <p style="font-size: 20px;">Admin @ <?=$this->session->userdata('sesi')['nama']?></p>
         </h3>
      </div>
      `<div class="modal-body">
            <form method="post" action="<?php echo site_url('C_cetakstruk/proses_kirim')?>">
                <div class="form-group" style="margin-top: -30px;">
                    <label class="col-form-label">Kode Transaksi</label>
                    <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" value="<?= $pbr["kodetransaksi"]?>" readonly>
                    <label class="col-form-label">Nama Pemesan</label>
                    <input type="text" class="form-control" id="namapemesana" name="namapemesana" value=" <?= $pbr["namapemesan"]?>" readonly>
                    <label class="col-form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="namamakanan" name="namamakanan" value="<?= $pbr["namamakanan"]?>" readonly>
                    <label class="col-form-label">Total Harga</label>
                    <input type="text" class="form-control" id="totalharga" name="totalharga" value=" <?= $pbr["totalharga"]?>" readonly>
                    <label class="col-form-label">Alamat Email</label>
                    <input type="text" class="form-control" id="email_pembeli" name="email_pembeli" value="<?= $pbr["email_pembeli"]?>" readonly>
                    <input type="hidden" class="form-control" id="status" name="status" value="berhasil" readonly>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-dark" name="tombol">Kirim</button>
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

<?php foreach ($pembayaran as $pbr):?>
    <div class="modal fade" id="modal-hapus<?= $pbr["kodetransaksi"]?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 style="text-align: center; margin-left:2px;">Hapus Akun</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('C_cetakstruk/proses_hapus')?>">
                    <div class="modal-body">
                        <p>Anda yakin mau menghapus kode transaksi <b> <?= $pbr["kodetransaksi"]?></b></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="kodetransaksi" id="kodetransaksi" value="<?= $pbr["kodetransaksi"]?>">
                        <button class="btn btn-danger">Hapus</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <input type="hidden" class="form-control" id="kodepembayaran" name="kodepembayaran" value="<?= $pbr["kodepembayaran"]?>" readonly>
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