<!DOCTYPE html>
<html>
<head>
    <title>Eat Republic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="<?php echo base_url('')?>assets/image/depan_regi.png">
</head>

<style>
    @font-face {
        font-family: Wacca Regular;
        src: url('Wacca-Regular.otf');
    }
    
    body {
        background-image: url("<?php echo base_url('')?>assets/image/bg.jpg");
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
        border-radius: 15px;
        width: 80%;
    }
    
    .text-right img {
        width: 50px;
        height: 100%;
    }
    
    img {
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
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_pemesanan" disabled>
      				<img src="<?php echo base_url('')?>assets/image/sendok.png" alt="menu">
  				</a>
            </li>
            <li class="nav-item" style="margin-top: 380px;">
                <a class="nav-link" href="#"><img src="<?php echo base_url()?>assets/image/keluar2.png" alt="keluar"data-toggle="modal" data-target="#modal-keluar"></a>
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
                <a href="<?php echo base_url('') ?>index.php/C_daftarmakanan">
                    <p class="text-center">
                        <button class="btn btn-dark" style="padding-left:5%;padding-right:5%">Pemesanan</button>
                    </p>
                </a>
            </div>

        </div>
        <br>
    </div> 

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
    

</body>

</html>
<!-- Javascript source to enable bootstrap modal -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>