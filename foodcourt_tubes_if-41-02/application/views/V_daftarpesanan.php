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
        src: url('Wacca-Regular.otf');
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
        height: auto;
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
        width: 90%;
        margin: auto;
        font-size:20px
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

    #btnBayar{
        float: right; margin-right: 460px;
        margin-top: 2%; font-size: 20px;
        height: 60px; width: 125px;
    }
</style>

<body>
    <?php if ($this->session->flashdata('notifhapus')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Makanan berhasil</strong> dibuang.</center>
            </div>
    <?php } ?>
    <nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_daftarmakanan" disabled>
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

    <div class="page-content" style="font-family: Wacca Regular">
        <div class="container box-color_edit" style="padding-bottom: 8%; margin-top: 10%">
            <div class=row>
                <div class="col-10" style="padding-top: 1%; padding-left: 23%">
                    <h3 class="text-center" style="font-family: Wacca Regular; font-size:40px">Daftar Pesanan</h3>
                    <marquee>

                    <p class="text-center" style="font-size:20px">Selamat datang di <strong> @EAT REPUBLIC </strong> <?= $this->session->userdata('sesi')['email']?></p>
                </marquee>
                </div>
                <div class="col-2">
                    <h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>
                </div>
            </div>
        
            <div>
                <table id="myTable">
                    <tr id=header>
                        <th>Nama Makanan</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <tr>
                <?php $tot=0; 
                $tamp = '';
                foreach ($memesan as $mmn) :  ?>
                        <td>
                             <?= $mmn['namamakanan']; ?>
                        </td>
                        <td>
                           <img src="<?php echo base_url('assets/upload/')?><?= $mmn["gambar"]?> " width="100" />
                        </td>
                        <td>
                            Rp. <?= $mmn['harga']; ?>
                        </td>
                        <td>
                            <button class="w3-button w3-xlarge w3-circle w3-red" data-toggle="modal"  data-target="#modal-hapus<?= $mmn['idmakanan']; ?>">X</button>
                            
                        </td>
                    </tr>
                        <?php
                            $tot += $mmn['harga'];
                            $tamp .= $mmn['namamakanan']. ', ';
                        ?>
                <?php endforeach ?> 
                    <td colspan="2">Total harga</td>
                    <td colspan="2" name="totalharga">
                        <strong>
                             Rp. <?= $tot ?>
                        </strong>
                    </td>       
                </table>
                <br>
                <button style="margin-right: 400px" id="btnBayar" class="btn btn-danger" data-toggle="modal"  data-target="#modal-bayar">Bayar</button>

            </div>
        </div>

    </div>

    </div>

<?php foreach ($memesan as $mmn) : ?>
<div class="modal fade" id="modal-bayar" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content" style="font-family: Wacca-Regular">
      <div class="modal-header">
         <h2 style="text-align: center; padding-left: 150px; font-family: Wacca-Regular">Bayar makanan</h3>
      </div>
      `<div class="modal-body">
            <form method="post" action="<?php echo site_url('C_daftarpesanan/proses_bayar')?>" style="font-size: 22px">
                <div class="form-group">
                    <label class="col-form-label">Nama makanan</label>
                    <input style="font-size: 18px" type="text" class="form-control" id="namamakanan" name="namamakanan" value="<?= $tamp ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="status" name="status" value=" " readonly>
                    <input type="hidden" class="form-control" id="kodepembayaran" name="kodepembayaran" value="<?= $mmn['kodepembayaran']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Total harga</label>
                    <input style="font-size: 18px" type="text" class="form-control" id="totalharga" name="totalharga" value="<?= $tot ?>" readonly> 
                    <input type="hidden" class="form-control" id="namapemesan" name="namapemesan" value=" " readonly>

                </div>
                <div class="modal-footer">
                    <button style="width: 80px; margin-right: 40px" onclick="location.href='<?php echo base_url('')?>index.php/C_kodepembayaran'" class="btn btn-dark" name="tombol">Ya</button>
                    <button style="width: 80px; margin-right: 120px" class="btn btn-light" data-dismiss="modal">Tidak</button>   
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
     <!-- ============ MODAL HAPUS PESANAN =============== -->
 <?php foreach ($memesan as $mmn) : ?>
    <div class="modal fade" id="modal-hapus<?= $mmn['idmakanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="font-family: Wacca Regular">
                <div class="modal-header">
                    <h3 style="text-align: center; margin-left:2px; font-family: Wacca Regular">Hapus Pesanan</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('C_daftarpesanan/proses_hapus')?>">
                    <div class="modal-body" style="text-align: center; font-family: Wacca Regular">
                        <p style="font-size: 20px">Anda yakin ingin menghapus <b> <?= $mmn['namamakanan']; ?></b>?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="kodepembayaran" id="kodepembayaran" value=" <?= $mmn['kodepembayaran']; ?>">
                        <button class="btn btn-danger">Hapus</button>
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tidak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;?>
</body>

</html>

<!-- Javascript source to enable bootstrap modal -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>