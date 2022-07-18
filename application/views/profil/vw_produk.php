<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

            
<!-- Begin Page Content -->
<div class="container-fluid">
<?= $this->session->flashdata('message'); 
                ?>
    <!-- Page Heading -->

    
                        
    <div class="row">
            <div class="col-md-12">
                
                <div>
                    <?php $i = 1; ?>
                    <?php foreach($produk as $us) : ?>
                        <div class="col-xl-4 col-md-2 mb-2">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div><?= $us['nama'] ?></div>
                                            
                                            <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                            <div>Stok
                                                <a class="badge badge-info"><?= $us['stok'] ?></a>
                                            </div>
                                            <div class="col-auto">
                                                <img src="<?= base_url('assets4/images/produk/').$us['gambar'];?>" style="width:100px" class="img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="align-items-center">
                                            <a href="<?= base_url('Profil/keranjang/').$us['id'] ?>" class="btn btn-primary">Beli</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
    </div>
</div>
    </div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

