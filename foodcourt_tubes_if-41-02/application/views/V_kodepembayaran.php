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
    
    .box-color_edit {
        background-color: white;
        margin-top: 5rem;
        width: 75%;
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

    #btnPbyr{
        height: 60px; width: 200px;
        color: black; font-size: 20px;
    }
</style>

<body>

    <nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_daftarmakanan" disabled>
                    <img src="<?php echo base_url('')?>assets/image/sendok.png" alt="menu">
                </a>
                <p style="margin-left: 20px; font-family:'Wacca Regular' ">Kembali</p>
            </li>
            <li class="nav-item" style="margin-top: 350px;">
                <a class="nav-link" href="#"><img src="<?php echo base_url()?>assets/image/keluar2.png" alt="keluar"data-toggle="modal" data-target="#modal-keluar"></a>
            </li>
        </ul>
    </nav>

    <div class="page-content">
        <div class="container box-color_edit" style="padding-bottom: 8%; margin-top: 10%">
            <div class=row>
                <div class="col-10" style="padding-top: 3%; padding-left: 38%">
                    <h2 class="font-weight-bold" style="font-family: palatino">Kode Pembayaran</h2>
                </div>
                <div class="col-2">
                    <h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>
                </div>
            </div>

            <?php foreach ($pembayaran as $prn) : ?>
            <p style="padding-top: 3%; color: #FFE303; font-size: 80px; font-family: times" class="text-center"><?= $prn['kodepembayaran'] ?></p>
            <?php endforeach ?>
            <div style="margin-top: 6%" class="text-center">
                 <button id="btnPbyr" onclick="location.href='<?php echo base_url()?>index.php/C_upload_pembayaran'" type="button" class="btn btn-outline-warning">Pembayaran</button>
            </div>
           
        </div>

    </div>

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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>