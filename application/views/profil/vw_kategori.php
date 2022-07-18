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
            <div class="col-md-6">
                <div>
                    <?php $i = 1; ?>
                    <?php foreach($kategori as $us) : ?>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-6">
                                            <div>
                                            <a href="<?= base_url() ?>Profil/produk">
                                            <?= $us['nama_kategori'] ?></a>
                                                </a>
                                            </div>
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