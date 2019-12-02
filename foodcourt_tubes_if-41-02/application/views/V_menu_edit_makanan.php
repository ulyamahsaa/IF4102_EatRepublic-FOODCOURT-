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
        background-color: #FFF5EE;
        color: black;
        cursor: pointer;
    }
    
    #bsr {
        height: 50px;
        width: 140px;
        font-size: large;
    }

    #exampleModalCenterTitle{
        padding-left: 45px;
    }
</style>

<body>
    <?php if ($this->session->flashdata('notif')) { ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Selamat Anda Berhasil</strong> Menambahkan Makanan.</center>
            </div>
    <?php } ?>
    <?php if ($this->session->flashdata('notifhapus')) { ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Makanan berhasil</strong> dihapus.</center>
            </div>
    <?php } ?>
    <?php if ($this->session->flashdata('notifedit')) { ?>
            <div class="alert alert-success alert-dark">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center><strong>Berhasil</strong> Mengedit Makanan.</center>
            </div>
    <?php } ?>
    <nav class="navbar-light bg-light vertical-navigation" style="width: 90px">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="<?php echo base_url('') ?>index.php/C_editmakanan" disabled>
                    <img src="<?php echo base_url()?>assets/image/sendok.png" alt="menu">
                </a>
            </li>
            <li class="nav-item" style="margin-top: 370px;">
                <a class="nav-link" href="#"><img src="<?php echo base_url()?>assets/image/keluar2.png" alt="keluar"data-toggle="modal" data-target="#modal-keluar"></a>
            </li>
        </ul>
    </nav>

    <div class="page-content" style="margin-top : -75px">
        <div class="container box-color_edit" style="padding-bottom: 8%; margin-top: 10%; height: 630px">
            <div class=row>
                <div class="col-10" style="padding-left: 33%">
                    <br>
                    <h1>Menu Edit Makanan</h1>
                </div>
                <div class="col-2">
                    <h1 class="text-right"><img src="<?php echo base_url()?>assets/image/logo.png"></h1>
                </div>
            </div>
            <div style="font-size: 20px">
                <p class="text-center">Hai <?= $this->session->userdata('sesi')['email']?>!</p>
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

            <div style="height: 400px; overflow: auto">
                <table id="myTable">
                    <tr id=header>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                    <?php $counter=0; foreach ($makanan as $mkn) : $counter++; ?>
                        <tr style="font-size: 20px">
                            <td>
                                <?= $counter?>
                            </td>
                            <td>
                                <?= $mkn['namamakanan']; ?>
                            </td>
                            <td>
                                <img src="<?php echo base_url('assets/upload/')?><?= $mkn["gambar"]?> " width="100" />
                            </td>
                            <td>
                                <?= $mkn['harga']; ?>
                            </td>
                            <td>
                                <?= $mkn['stok']; ?>
                            </td>
                            <td>
                                <p>
                                    <button type="button" class="btn btn-default btn-sm btn-danger" data-toggle="modal" data-target="#delete-food-modal<?= $mkn['idmakanan']?>">
                                        <span class="glyphicon glyphicon-remove"></span>Hapus
                                    </button>
                                </p>
                                <p>
                                    <button type="button" class="btn btn-default btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit-menu<?= $mkn['idmakanan']?>">
                                        <span class="glyphicon glyphicon-remove"></span>Ubah
                                    </button>
                                </p>
                            </td>
                            </td>
                        </tr>
                        <?php endforeach ?>
                </table>

            </div>
            <button class="btn btn-default btn-sm btn-dark" style="margin-left: 750px;margin-top: -892px;" onclick="" class="text-center" data-toggle="modal" data-target="#modal-add-menu"> Add New Menu </button>
        </div>

    </div>

    </div>

    <!-- modal for edit menu -->
    <?php $counter=0; foreach ($makanan as $edit_menu) : $counter++; ?>
        <div class="modal fade" id="modal-edit-menu<?= $edit_menu['idmakanan'];?>" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="padding-left: 50px">
                    <div class="modal-header">
                        <h1 class="modal-title text-center" id="exampleModalCenterTitle" style="padding-left:80px">Edit Makanan</h1>
                    </div>
                    <form method="POST" action="<?= site_url('C_editmakanan/edit_menu');?>">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>ID Makanan</label>
                                    <input type="text" name="idmakanan" style="width: 400px" class="form-control text-center" value="<?= $edit_menu['idmakanan']?>" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Nama Makanan</label>
                                    <input type="text" name="namamakanan" value="<?= $edit_menu['namamakanan']?>" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Harga</label>
                                    <input type="text" value="<?= $edit_menu['harga']?>" name="harga" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Stok</label>
                                    <input type="text" name="stok" value="<?= $edit_menu['stok']?>" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label>Foto Makanan</label>
                                    <input type="file" name="gambar" class="form-control text-center" style="width: 400px">
                                </div>
                            </div>
                           <br>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-dark" style="width: 100px; height: 50px; margin-right:190px">Edit</button>
                                </div>
                                <div class="col-xs-6">
                                    <button style="margin-left: 10px; width: 100px; height: 50px" class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>

            <!-- Modal for delete food -->
            <?php $counter=0; foreach ($makanan as $delete_food) : $counter++; ?>
                <div class="modal fade" id="delete-food-modal<?= $delete_food['idmakanan']?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 style="text-align: center; padding-left: 40px">Konfirmasi Membuang Menu Makanan</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                            </div>
                            <div class="modal-body" style="text-align: center">
                                <h5>Anda yakin untuk membuang <b><?=$delete_food['namamakanan'];?>?</b></p>
                            </div>
                            <div class="modal-footer">
                                <form action="<?= site_url('C_editmakanan/remove_menu');?>" method="POST">
                                    <input type="hidden" name="idmakanan" id="idmakanan" value="<?= $delete_food['idmakanan'];?>">
                                    <button class="btn btn-danger" type="submit" style="width: 100px; height: 50px; margin-right: 160px">Ya</button>
                                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true" style="width: 100px; height: 50px; margin-right: 50px">Tidak</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                    <!-- modal for add menu -->
                    <div class="modal fade" id="modal-add-menu" tabindex="-1" role="dialog" aria-labelledby="validate_modal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="padding-left: 50px">
                                <div class="modal-header">
                                    <h1 class="modal-title text-center" id="exampleModalCenterTitle">Tambah Makanan</h1>
                                </div>
                                <form action="<?php echo site_url('C_editmakanan/add_menu')?>" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <input type="hidden" name="idmakanan" class="form-control text-center">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <label>Nama Makanan</label>
                                                <input type="text" name="namamakanan" class="form-control" style="width: 400px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <label>Harga</label>
                                                <input type="text" name="harga" class="form-control" style="width: 400px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <label>Stok</label>
                                                <input type="text" name="stok" class="form-control" style="width: 400px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-8">
                                                <label>Foto Makanan</label>
                                                <input type="file" name="gambar" class="form-control" style="width: 400px">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <button type="submit" class="btn btn-dark" style="width: 100px; height: 50px; margin-right:190px">Tambah</button>
                                        </div>
                                </form>
                                <div class="col-xs-6">
                                    <button style="margin-left: 10px; width: 100px; height: 50px"class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============ MODAL KELUAR AKUN =============== -->
                    <div class="modal fade" id="modal-keluar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 style="text-align: center; margin-left:2px;">Keluar Akun</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 1px;">x</button>
                                </div>
                                    <div class="modal-body" style="text-align: center">
                                        <h5>Anda yakin mau Keluar <b> <?=$this->session->userdata('sesi')['email']?> ?</b></h5>
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